<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;
use App\Suppliers;
use Illuminate\Support\Facades\Input;
use App\Detailitem;
use App\Order;

class evaluasisupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
       $this->middleware('auth');
    }
    
    public function index()
    {
        $items = Items::get();
        return view('evaluasisupplier', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $item_id = Input::get('item_id');
        //get value dari depan
        $a = Input::get('aspek1');
        $b = Input::get('aspek2');
        $c = Input::get('aspek3');
        $d = Input::get('aspek4');

        //masukin ke dalam array 2D
        $aspek1 = explode('-', $a);
        $aspek2 = explode('-', $b);
        $aspek3 = explode('-', $c);
        $aspek4 = explode('-', $d);

        //Definisi Konstanta
        if($aspek1[0] == 'harga'){
            $harga = $aspek1[1];
        }
        else if($aspek1[0] == 'kecepatan'){
            $kecepatan_pengiriman = $aspek1[1];
        }
        else if($aspek1[0] == 'jatuhtempo'){
            $jatuh_tempo = $aspek1[1];
        }
        else {
            $ketersediaan = $aspek1[1];
        }

        if($aspek2[0] == 'harga'){
            $harga = $aspek2[1];
        }
        else if($aspek2[0] == 'kecepatan'){
            $kecepatan_pengiriman = $aspek2[1];
        }
        else if($aspek2[0] == 'jatuhtempo'){
            $jatuh_tempo = $aspek2[1];
        }
        else {
            $ketersediaan = $aspek2[1];
        }

        if($aspek3[0] == 'harga'){
            $harga = $aspek3[1];
        }
        else if($aspek3[0] == 'kecepatan'){
            $kecepatan_pengiriman = $aspek3[1];
        }
        else if($aspek3[0] == 'jatuhtempo'){
            $jatuh_tempo = $aspek3[1];
        }
        else {
            $ketersediaan = $aspek3[1];
        }

        if($aspek4[0] == 'harga'){
            $harga = $aspek4[1];
        }
        else if($aspek4[0] == 'kecepatan'){
            $kecepatan_pengiriman = $aspek4[1];
        }
        else if($aspek4[0] == 'jatuhtempo'){
            $jatuh_tempo = $aspek4[1];
        }
        else {
            $ketersediaan = $aspek4[1];
        }

        //List semua supplier penyedia supplierDetail
        $supplierDetail = Detailitem::where('items_id',$item_id)->get();

        //Kondisi hanya 1 orang Supplier
        if(count($supplierDetail) == 1){
            $listSupplier = Suppliers::where('id',$supplierDetail[0]->suppliers_id)->get();
            return view('hasilsupplier', compact('listSupplier'));
        }
        else{
            //Definisikan Variabel Pembagi
            $pembagiharga = 99;
            $pembagikecepatanpengiriman = 99;
            $pembagijatuhtempo = 0;
            $pembagiketersediaan = 1;
            for ($i=0; $i < count($supplierDetail); $i++) {

                if($supplierDetail[$i]->hargabeli < $pembagiharga){
                    $pembagiharga = $supplierDetail[$i]->hargabeli;
                }

                if($supplierDetail[$i]->suppliers->lamapengiriman < $pembagikecepatanpengiriman){
                    $pembagikecepatanpengiriman = $supplierDetail[$i]->suppliers->lamapengiriman;
                }

                if($supplierDetail[$i]->suppliers->jatuhtempo > $pembagijatuhtempo){
                    $pembagijatuhtempo = $supplierDetail[$i]->suppliers->jatuhtempo;
                }

                $bykTransaksiSupSatu = Order::where('suppliers_id', $supplierDetail[$i]->suppliers_id)->get();
                if(count($bykTransaksiSupSatu) > $pembagiketersediaan){
                    $pembagiketersediaan = count($bykTransaksiSupSatu);
                }
            }
            //Perhitungan nilai-nilai Suppliers
            for ($i=0; $i < count($supplierDetail); $i++) {
                $supplierDetail[$i]->nilaiHargaSupplier = $pembagiharga/$supplierDetail[$i]->hargabeli;
                $supplierDetail[$i]->nilaiKecepatanSupplier = $pembagikecepatanpengiriman/$supplierDetail[$i]->suppliers->lamapengiriman;
                $supplierDetail[$i]->nilaiJatuhtempoSupplier = $supplierDetail[$i]->suppliers->jatuhtempo/$pembagijatuhtempo;

                $bykTransaksi = Order::where('suppliers_id',$supplierDetail[$i]->suppliers_id)->get();
                $supplierDetail[$i]->nilaiKetersediaan = count($bykTransaksi)/$pembagiketersediaan;

                //Hitung Nilai Total nya
                $supplierDetail[$i]->nilaiTotal = ($supplierDetail[$i]->nilaiHargaSupplier*$harga)+($supplierDetail[$i]->nilaiKecepatanSupplier*$kecepatan_pengiriman)+($supplierDetail[$i]->nilaiJatuhtempoSupplier*$jatuh_tempo)+($supplierDetail[$i]->nilaiKetersediaan*$ketersediaan);
            }

            $listSupplier = $supplierDetail->sortByDesc('nilaiTotal');
            return view('hasilsupplier', compact('listSupplier'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
