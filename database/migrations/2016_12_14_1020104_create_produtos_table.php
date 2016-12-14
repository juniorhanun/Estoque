<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produtos', function(Blueprint $table) {
            $table->increments('id');
			$table->integer('categoria_id')->unsigned();
			$table->foreign('categoria_id')->references('id')->on('categorias');
			$table->string('nome');
			$table->text('descricao')->nullable();
			$table->decimal('preco',8,2)->default(0);
			$table->string('arquivo')->nullable();
			$table->integer('status')->default(1);
			$table->softDeletes();
            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produtos');
	}

}
