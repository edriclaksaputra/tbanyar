<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//pompa
        DB::table('items')->insert([
        	'nama'=>'PS-116',
        	'stock'=>100,
        	'hargajual'=>311000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'PS-128',
        	'stock'=>100,
        	'hargajual'=>355000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'PS-135',
        	'stock'=>100,
        	'hargajual'=>420000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'PS-130',
        	'stock'=>100,
        	'hargajual'=>502000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'PS-226',
        	'stock'=>100,
        	'hargajual'=>757000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'PS-230',
        	'stock'=>100,
        	'hargajual'=>854000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'PS-103',
        	'stock'=>100,
        	'hargajual'=>731000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'PS-150',
        	'stock'=>100,
        	'hargajual'=>960000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'PS-225',
        	'stock'=>100,
        	'hargajual'=>1793000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'PS-108',
        	'stock'=>100,
        	'hargajual'=>665000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'PS-300',
        	'stock'=>100,
        	'hargajual'=>600000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'PS-400',
        	'stock'=>100,
        	'hargajual'=>1141000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'PS-250',
        	'stock'=>100,
        	'hargajual'=>1238000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'PS-260',
        	'stock'=>100,
        	'hargajual'=>2163000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'PS-268',
        	'stock'=>100,
        	'hargajual'=>1510000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'PS-375',
        	'stock'=>100,
        	'hargajual'=>1774000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'PS-502',
        	'stock'=>100,
        	'hargajual'=>2863000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'PS-503',
        	'stock'=>100,
        	'hargajual'=>2860000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //pompa

        //semen
        DB::table('items')->insert([
        	'nama'=>'Semen Tiga Roda',
        	'stock'=>100,
        	'hargajual'=>51900,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Holcim',
        	'stock'=>100,
        	'hargajual'=>51750,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Garuda',
        	'stock'=>100,
        	'hargajual'=>47000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Bima',
        	'stock'=>100,
        	'hargajual'=>46500,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //semen

        //pvc Trilliun
        DB::table('items')->insert([
        	'nama'=>'Trilliun 1/2',
        	'stock'=>100,
        	'hargajual'=>11600,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Trilliun 3/4',
        	'stock'=>100,
        	'hargajual'=>16350,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Trilliun 1',
        	'stock'=>100,
        	'hargajual'=>22700,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Trilliun 1 1/4',
        	'stock'=>100,
        	'hargajual'=>32750,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Trilliun 1 1/2',
        	'stock'=>100,
        	'hargajual'=>39650,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Trilliun 2',
        	'stock'=>100,
        	'hargajual'=>48800,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Trilliun 2 1/2',
        	'stock'=>100,
        	'hargajual'=>71000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Trilliun 3',
        	'stock'=>100,
        	'hargajual'=>98400,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Trilliun 4',
        	'stock'=>100,
        	'hargajual'=>167000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Trilliun 5',
        	'stock'=>100,
        	'hargajual'=>274600,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Trilliun 6',
        	'stock'=>100,
        	'hargajual'=>378700,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Trilliun 8',
        	'stock'=>100,
        	'hargajual'=>604500,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Trilliun 10',
        	'stock'=>100,
        	'hargajual'=>913450,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Trilliun 12',
        	'stock'=>100,
        	'hargajual'=>1335900,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //pvc Tilliun

        //pvc Maspion
        DB::table('items')->insert([
        	'nama'=>'Maspion 1/2',
        	'stock'=>100,
        	'hargajual'=>12200,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Maspion 3/4',
        	'stock'=>100,
        	'hargajual'=>16400,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Maspion 1',
        	'stock'=>100,
        	'hargajual'=>22500,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Maspion 1 1/4',
        	'stock'=>100,
        	'hargajual'=>33200,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Maspion 1 1/2',
        	'stock'=>100,
        	'hargajual'=>39800,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Maspion 2',
        	'stock'=>100,
        	'hargajual'=>52400,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Maspion 2 1/2',
        	'stock'=>100,
        	'hargajual'=>72200,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Maspion 3',
        	'stock'=>100,
        	'hargajual'=>103900,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Maspion 4',
        	'stock'=>100,
        	'hargajual'=>172500,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Maspion 5',
        	'stock'=>100,
        	'hargajual'=>276600,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Maspion 6',
        	'stock'=>100,
        	'hargajual'=>385200,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Maspion 8',
        	'stock'=>100,
        	'hargajual'=>599700,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Maspion 10',
        	'stock'=>100,
        	'hargajual'=>980500,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Maspion 12',
        	'stock'=>100,
        	'hargajual'=>1398500,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //pvc Maspion

        //pvc Pralon
        DB::table('items')->insert([
        	'nama'=>'Pralon 1/2',
        	'stock'=>100,
        	'hargajual'=>14925,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Pralon 3/4',
        	'stock'=>100,
        	'hargajual'=>20700,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Pralon 1',
        	'stock'=>100,
        	'hargajual'=>28200,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Pralon 1 1/4',
        	'stock'=>100,
        	'hargajual'=>44100,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Pralon 1 1/2',
        	'stock'=>100,
        	'hargajual'=>50750,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Pralon 2',
        	'stock'=>100,
        	'hargajual'=>64200,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Pralon 2 1/2',
        	'stock'=>100,
        	'hargajual'=>91100,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Pralon 3',
        	'stock'=>100,
        	'hargajual'=>125000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Pralon 4',
        	'stock'=>100,
        	'hargajual'=>206900,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Pralon 5',
        	'stock'=>100,
        	'hargajual'=>334100,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Pralon 6',
        	'stock'=>100,
        	'hargajual'=>461850,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Pralon 8',
        	'stock'=>100,
        	'hargajual'=>782750,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Pralon 10',
        	'stock'=>100,
        	'hargajual'=>1180500,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Pralon 12',
        	'stock'=>100,
        	'hargajual'=>1659500,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //pvc Pralon

        //pvc Giplon
        DB::table('items')->insert([
        	'nama'=>'Giplon 1/2',
        	'stock'=>100,
        	'hargajual'=>6750,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Giplon 3/4',
        	'stock'=>100,
        	'hargajual'=>8000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Giplon 1',
        	'stock'=>100,
        	'hargajual'=>10750,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Giplon 1 1/4',
        	'stock'=>100,
        	'hargajual'=>16150,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Giplon 1 1/2',
        	'stock'=>100,
        	'hargajual'=>18775,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Giplon 2',
        	'stock'=>100,
        	'hargajual'=>23525,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Giplon 2 1/2',
        	'stock'=>100,
        	'hargajual'=>37625,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Giplon 3',
        	'stock'=>100,
        	'hargajual'=>47050,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Giplon 4',
        	'stock'=>100,
        	'hargajual'=>73950,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Giplon 5',
        	'stock'=>100,
        	'hargajual'=>112925,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Giplon 6',
        	'stock'=>100,
        	'hargajual'=>141125,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //pvc Giplon

        //pvc Giplon
        DB::table('items')->insert([
        	'nama'=>'Megalon 1/2',
        	'stock'=>100,
        	'hargajual'=>4150,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Megalon 3/4',
        	'stock'=>100,
        	'hargajual'=>5500,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Megalon 1',
        	'stock'=>100,
        	'hargajual'=>7125,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Megalon 1 1/4',
        	'stock'=>100,
        	'hargajual'=>9000,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Megalon 1 1/2',
        	'stock'=>100,
        	'hargajual'=>12175,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Megalon 2',
        	'stock'=>100,
        	'hargajual'=>17075,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Megalon 2 1/2',
        	'stock'=>100,
        	'hargajual'=>21375,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Megalon 3',
        	'stock'=>100,
        	'hargajual'=>30600,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Megalon 4',
        	'stock'=>100,
        	'hargajual'=>44025,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Megalon 5',
        	'stock'=>100,
        	'hargajual'=>81175,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('items')->insert([
        	'nama'=>'Megalon 6',
        	'stock'=>100,
        	'hargajual'=>103700,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //pvc Megalon
    }
}
