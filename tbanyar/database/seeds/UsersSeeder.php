<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name'=>'Erik Lokasurya',
        	'email'=>'eriklokasurya@gmail.com',
        	'password'=> Hash::make('erikerik123'),
        ]);
    }
}
