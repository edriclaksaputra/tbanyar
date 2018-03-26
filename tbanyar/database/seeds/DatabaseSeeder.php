<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SuppliersSeeder::class);
        $this->call(ItemsSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(DetailItemSeeder::class);
        $this->call(DetailorderSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
