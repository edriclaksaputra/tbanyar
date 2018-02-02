<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order')->insert([
        	'suppliers_id'=>6,
        	'tanggal'=>'2017-08-21',
        	'total'=>'0',
        	'status'=>'1',
        	'tanggaldatang'=>'2017-08-23',
        	'keterangan'=>'',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('order')->insert([
        	'suppliers_id'=>13,
        	'tanggal'=>'2017-08-21',
        	'total'=>'0',
        	'status'=>'1',
        	'tanggaldatang'=>'2017-08-22',
        	'keterangan'=>'',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('order')->insert([
        	'suppliers_id'=>8,
        	'tanggal'=>'2017-08-22',
        	'total'=>'0',
        	'status'=>'1',
        	'tanggaldatang'=>'2017-08-23',
        	'keterangan'=>'',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('order')->insert([
        	'suppliers_id'=>3,
        	'tanggal'=>'2017-08-22',
        	'total'=>'0',
        	'status'=>'1',
        	'tanggaldatang'=>'2017-08-24',
        	'keterangan'=>'',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('order')->insert([
        	'suppliers_id'=>7,
        	'tanggal'=>'2017-08-22',
        	'total'=>'0',
        	'status'=>'1',
        	'tanggaldatang'=>'2017-08-23',
        	'keterangan'=>'',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('order')->insert([
        	'suppliers_id'=>9,
        	'tanggal'=>'2017-08-23',
        	'total'=>'0',
        	'status'=>'1',
        	'tanggaldatang'=>'2017-08-25',
        	'keterangan'=>'',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('order')->insert([
        	'suppliers_id'=>11,
        	'tanggal'=>'2017-08-23',
        	'total'=>'0',
        	'status'=>'1',
        	'tanggaldatang'=>'2017-08-25',
        	'keterangan'=>'',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('order')->insert([
        	'suppliers_id'=>4,
        	'tanggal'=>'2017-08-23',
        	'total'=>'0',
        	'status'=>'1',
        	'tanggaldatang'=>'2017-08-24',
        	'keterangan'=>'',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('order')->insert([
        	'suppliers_id'=>3,
        	'tanggal'=>'2017-08-24',
        	'total'=>'0',
        	'status'=>'1',
        	'tanggaldatang'=>'2017-08-26',
        	'keterangan'=>'',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('order')->insert([
        	'suppliers_id'=>7,
        	'tanggal'=>'2017-08-24',
        	'total'=>'0',
        	'status'=>'1',
        	'tanggaldatang'=>'2017-08-25',
        	'keterangan'=>'',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('order')->insert([
        	'suppliers_id'=>1,
        	'tanggal'=>'2017-08-24',
        	'total'=>'0',
        	'status'=>'1',
        	'tanggaldatang'=>'2017-08-26',
        	'keterangan'=>'',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('order')->insert([
        	'suppliers_id'=>3,
        	'tanggal'=>'2017-08-25',
        	'total'=>'0',
        	'status'=>'1',
        	'tanggaldatang'=>'2017-08-27',
        	'keterangan'=>'',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('order')->insert([
        	'suppliers_id'=>8,
        	'tanggal'=>'2017-08-25',
        	'total'=>'0',
        	'status'=>'1',
        	'tanggaldatang'=>'2017-08-26',
        	'keterangan'=>'',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('order')->insert([
        	'suppliers_id'=>11,
        	'tanggal'=>'2017-08-25',
        	'total'=>'0',
        	'status'=>'1',
        	'tanggaldatang'=>'2017-08-28',
        	'keterangan'=>'',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
