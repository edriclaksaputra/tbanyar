<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DetailItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Sheet 4
    	//Sarana Bangun
        DB::table('detailitem')->insert([
        	'suppliers_id'=>6,
        	'items_id'=>38,
        	'hargabeli'=>16200,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('detailitem')->insert([
        	'suppliers_id'=>6,
        	'items_id'=>39,
        	'hargabeli'=>22325,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('detailitem')->insert([
        	'suppliers_id'=>6,
        	'items_id'=>41,
        	'hargabeli'=>39700,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('detailitem')->insert([
        	'suppliers_id'=>6,
        	'items_id'=>42,
        	'hargabeli'=>52300,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //Alisha
        DB::table('detailitem')->insert([
        	'suppliers_id'=>13,
        	'items_id'=>24,
        	'hargabeli'=>16200,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('detailitem')->insert([
        	'suppliers_id'=>13,
        	'items_id'=>27,
        	'hargabeli'=>39500,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('detailitem')->insert([
        	'suppliers_id'=>13,
        	'items_id'=>29,
        	'hargabeli'=>70850,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //PT. Catur
        DB::table('detailitem')->insert([
        	'suppliers_id'=>8,
        	'items_id'=>19,
        	'hargabeli'=>51500,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //Semen Holcim
        DB::table('detailitem')->insert([
        	'suppliers_id'=>7,
        	'items_id'=>20,
        	'hargabeli'=>51500,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //MKI
        DB::table('detailitem')->insert([
        	'suppliers_id'=>9,
        	'items_id'=>19,
        	'hargabeli'=>51300,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //Senjaya
        DB::table('detailitem')->insert([
        	'suppliers_id'=>11,
        	'items_id'=>62,
        	'hargabeli'=>782500,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('detailitem')->insert([
        	'suppliers_id'=>11,
        	'items_id'=>63,
        	'hargabeli'=>1180300,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('detailitem')->insert([
        	'suppliers_id'=>11,
        	'items_id'=>64,
        	'hargabeli'=>1659300,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('detailitem')->insert([
        	'suppliers_id'=>11,
        	'items_id'=>51,
        	'hargabeli'=>14800,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('detailitem')->insert([
        	'suppliers_id'=>11,
        	'items_id'=>52,
        	'hargabeli'=>20600,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //Kopo Jaya
        DB::table('detailitem')->insert([
        	'suppliers_id'=>4,
        	'items_id'=>25,
        	'hargabeli'=>22500,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('detailitem')->insert([
        	'suppliers_id'=>4,
        	'items_id'=>80,
        	'hargabeli'=>12000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('detailitem')->insert([
        	'suppliers_id'=>4,
        	'items_id'=>21,
        	'hargabeli'=>46500,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //Semen 80
        DB::table('detailitem')->insert([
        	'suppliers_id'=>3,
        	'items_id'=>25,
        	'hargabeli'=>46500,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('detailitem')->insert([
        	'suppliers_id'=>3,
        	'items_id'=>22,
        	'hargabeli'=>46000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //Chrysta Mentari
        DB::table('detailitem')->insert([
        	'suppliers_id'=>1,
        	'items_id'=>68,
        	'hargabeli'=>16000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('detailitem')->insert([
        	'suppliers_id'=>1,
        	'items_id'=>70,
        	'hargabeli'=>23400,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('detailitem')->insert([
        	'suppliers_id'=>1,
        	'items_id'=>71,
        	'hargabeli'=>37500,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
