<?php

use Estoque\Entities\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Winston Hanun Júnior',
            'email' => 'hanunjunior@gmail.com',
            'password'=>bcrypt('Linux1009'),
            'papel'=>'admin'
        ]);
    }
}
