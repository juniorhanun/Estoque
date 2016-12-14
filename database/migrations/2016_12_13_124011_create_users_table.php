<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password');
			$table->string('papel')->default('cliente');
			$table->string('telefone')->nullable();
			$table->string('cep')->nullable();
			$table->string('estado')->nullable();
			$table->string('cidade')->nullable();
			$table->text('endereco')->nullable();
			$table->string('cpf')->nullable();
			$table->string('rg')->nullable();
			$table->integer('status')->default(1);
			$table->softDeletes();
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
