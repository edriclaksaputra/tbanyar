<?php

use Illuminate\Database\Seeder;

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
        $this->call(DetailItemSeeder::class);
    }
}
