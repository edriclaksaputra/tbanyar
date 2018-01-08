<?php

use Illuminate\Database\Seeder;

class DetailorderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order')->insert([
        	'order_id'=>1,
        	'detailitem_id'=>'38',
        	'banyak'=>'1',
        	'subtotal'=>'1',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
