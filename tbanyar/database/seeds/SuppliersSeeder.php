<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SuppliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
        	'nama'=>'Chrysta Mentari',
        	'alamat'=>'',
        	'telp'=>'',
        	'jatuhtempo'=>45,
        	'lamapengiriman'=>2,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('suppliers')->insert([
        	'nama'=>'Holis Jaya',
        	'alamat'=>'',
        	'telp'=>'',
        	'jatuhtempo'=> 0,
        	'lamapengiriman'=> 0,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('suppliers')->insert([
        	'nama'=>'Semen 80',
        	'alamat'=>'',
        	'telp'=>'',
        	'jatuhtempo'=>60,
        	'lamapengiriman'=>2,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('suppliers')->insert([
        	'nama'=>'Kopo Jaya',
        	'alamat'=>'',
        	'telp'=>'',
        	'jatuhtempo'=>30,
        	'lamapengiriman'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('suppliers')->insert([
        	'nama'=>'Cipta Warna',
        	'alamat'=>'',
        	'telp'=>'',
        	'jatuhtempo'=>0,
        	'lamapengiriman'=>0,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('suppliers')->insert([
        	'nama'=>'Sarana Bangun',
        	'alamat'=>'',
        	'telp'=>'',
        	'jatuhtempo'=> 30,
        	'lamapengiriman'=>2,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('suppliers')->insert([
        	'nama'=>'Semen Holcim',
        	'alamat'=>'',
        	'telp'=>'',
        	'jatuhtempo'=>30,
        	'lamapengiriman'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('suppliers')->insert([
        	'nama'=>'PT. Catur',
        	'alamat'=>'',
        	'telp'=>'',
        	'jatuhtempo'=>45,
        	'lamapengiriman'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('suppliers')->insert([
        	'nama'=>'MKI',
        	'alamat'=>'',
        	'telp'=>'',
        	'jatuhtempo'=>30,
        	'lamapengiriman'=>2,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('suppliers')->insert([
        	'nama'=>'Berkat',
        	'alamat'=>'',
        	'telp'=>'',
        	'jatuhtempo'=>0,
        	'lamapengiriman'=>0,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('suppliers')->insert([
        	'nama'=>'Senjaya',
        	'alamat'=>'',
        	'telp'=>'',
        	'jatuhtempo'=>60,
        	'lamapengiriman'=>2,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('suppliers')->insert([
        	'nama'=>'Nipsea',
        	'alamat'=>'',
        	'telp'=>'',
        	'jatuhtempo'=>0,
        	'lamapengiriman'=>0,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('suppliers')->insert([
        	'nama'=>'Alisha',
        	'alamat'=>'',
        	'telp'=>'',
        	'jatuhtempo'=>30,
        	'lamapengiriman'=>1,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('suppliers')->insert([
        	'nama'=>'Buana Pembangunan',
        	'alamat'=>'',
        	'telp'=>'',
        	'jatuhtempo'=>0,
        	'lamapengiriman'=>0,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('suppliers')->insert([
        	'nama'=>'Aneka Ragam',
        	'alamat'=>'',
        	'telp'=>'',
        	'jatuhtempo'=>0,
        	'lamapengiriman'=>0,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('suppliers')->insert([
        	'nama'=>'Sinar Makmur',
        	'alamat'=>'',
        	'telp'=>'',
        	'jatuhtempo'=>0,
        	'lamapengiriman'=>0,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('suppliers')->insert([
        	'nama'=>'Tekad',
        	'alamat'=>'',
        	'telp'=>'',
        	'jatuhtempo'=>0,
        	'lamapengiriman'=>0,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
