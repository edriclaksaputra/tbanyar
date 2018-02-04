<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class DetailorderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detailorder')->insert([
        	'order_id'=>1,
        	'detailitem_id'=>1,
        	'banyak'=>'0',
        	'subtotal'=>'0',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
 		DB::table('detailorder')->insert([
        	'order_id'=>1,
        	'detailitem_id'=>2,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		DB::table('detailorder')->insert([
        	'order_id'=>1,
        	'detailitem_id'=>3,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		DB::table('detailorder')->insert([
        	'order_id'=>1,
        	'detailitem_id'=>4,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('detailorder')->insert([
        	'order_id'=>2,
        	'detailitem_id'=>5,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
         DB::table('detailorder')->insert([
        	'order_id'=>2,
        	'detailitem_id'=>6,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
          DB::table('detailorder')->insert([
        	'order_id'=>2,
        	'detailitem_id'=>7,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
           DB::table('detailorder')->insert([
        	'order_id'=>3,
        	'detailitem_id'=>8,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
         DB::table('detailorder')->insert([
        	'order_id'=>4,
        	'detailitem_id'=>20,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
          DB::table('detailorder')->insert([
        	'order_id'=>5,
        	'detailitem_id'=>9,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
           DB::table('detailorder')->insert([
        	'order_id'=>6,
        	'detailitem_id'=>10,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
            DB::table('detailorder')->insert([
        	'order_id'=>7,
        	'detailitem_id'=>11,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
             DB::table('detailorder')->insert([
        	'order_id'=>7,
        	'detailitem_id'=>12,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
              DB::table('detailorder')->insert([
        	'order_id'=>7,
        	'detailitem_id'=>13,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
               DB::table('detailorder')->insert([
        	'order_id'=>8,
        	'detailitem_id'=>16,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
                DB::table('detailorder')->insert([
        	'order_id'=>8,
        	'detailitem_id'=>17,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
                 DB::table('detailorder')->insert([
        	'order_id'=>8,
        	'detailitem_id'=>18,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
            DB::table('detailorder')->insert([
        	'order_id'=>9,
        	'detailitem_id'=>19,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
			 DB::table('detailorder')->insert([
        	'order_id'=>9,
        	'detailitem_id'=>20,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
			 DB::table('detailorder')->insert([
        	'order_id'=>10,
        	'detailitem_id'=>9,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
			 DB::table('detailorder')->insert([
        	'order_id'=>11,
        	'detailitem_id'=>21,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
			 DB::table('detailorder')->insert([
        	'order_id'=>11,
        	'detailitem_id'=>22,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
			 DB::table('detailorder')->insert([
        	'order_id'=>11,
        	'detailitem_id'=>23,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
			 DB::table('detailorder')->insert([
        	'order_id'=>12,
        	'detailitem_id'=>20,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
			  DB::table('detailorder')->insert([
        	'order_id'=>13,
        	'detailitem_id'=>8,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
			   DB::table('detailorder')->insert([
        	'order_id'=>14,
        	'detailitem_id'=>14,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
			      DB::table('detailorder')->insert([
        	'order_id'=>14,
        	'detailitem_id'=>15,
        	'banyak'=>1,
        	'subtotal'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
