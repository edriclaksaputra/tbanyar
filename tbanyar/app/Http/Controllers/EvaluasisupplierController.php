<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;
use App\Suppliers;
use Illuminate\Support\Facades\Input;
use App\Detailitem;

class evaluasisupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $aspek_1 = Input::get('aspek1');
        $aspek_2 = Input::get('aspek2');
        $aspek_3 = Input::get('aspek3');
        $aspek_4 = Input::get('aspek4');

        //Definisi Konstanta
        $kecepatan_pengiriman = 0.4;
        $harga = 0.3;
        $ketersediaan = 0.2;
        $jatuh_tempo = 0.1;

        //List semua supplier penyedia supplierDetail
        $supplierDetail = Detailitem::where('items_id',$item_id)->get();

        //Kondisi hanya 1 orang Supplier
        if(count($supplierDetail) == 1){
            $suppliers = Suppliers::find($supplierDetail[0]->suppliers_id);
            return view('hasilsupplier', compact('suppliers'));
        }
        else{
            //Definisikan Variabel Pembagi
            $pembagiharga = 0;
            $pembagikecepatanpengiriman =0;
            $pembagijatuhtempo = 0;
            $pembagiketersediaan = 0;
            for ($i=0; $i < count($supplierDetail) - 1; $i++) { 
                if($supplierDetail[$i]->hargabeli < $supplierDetail[$i+1]->hargabeli){
                    $pembagiharga = $supplierDetail[$i]->hargabeli;
                }
                else{
                    $pembagiharga = $supplierDetail[$i+1]->hargabeli;
                }

                if($supplierDetail[$i]->suppliers->lamapengiriman < $supplierDetail[$i+1]->suppliers->lamapengiriman){
                    $pembagikecepatanpengiriman = $supplierDetail[$i]->suppliers->lamapengiriman;
                }
                else{
                     $pembagikecepatanpengiriman = $supplierDetail[$i+1]->suppliers->lamapengiriman;
                }

                if($supplierDetail[$i]->suppliers->jatuhtempo > $supplierDetail[$i+1]->suppliers->jatuhtempo){
                    $pembagijatuhtempo = $supplierDetail[$i]->suppliers->jatuhtempo;
                }
                else{
                    $pembagijatuhtempo = $supplierDetail[$i+1]->suppliers->jatuhtempo;
                }
            }
            //Perhitungan nilai-nilai Suppliers
            for ($i=0; $i < count($supplierDetail); $i++) {
                $supplierDetail[$i]->nilaiHargaSupplier = $pembagiharga/$supplierDetail[$i]->hargabeli;
                $supplierDetail[$i]->nilaiKecepatanSupplier = $pembagikecepatanpengiriman/$supplierDetail[$i]->suppliers->lamapengiriman;
                $supplierDetail[$i]->nilaiJatuhtempoSupplier = $supplierDetail[$i]->suppliers->jatuhtempo/$pembagijatuhtempo;
                // $supplierDetail[$i]->nilaiSupplier->ketersediaan = $pembagiharga/$supplierDetail[$i]->hargabeli;

                //Hitung Nilai Total nya
                $supplierDetail[$i]->nilaiTotal = ($supplierDetail[$i]->nilaiHargaSupplier*$harga)+($supplierDetail[$i]->nilaiKecepatanSupplier*$kecepatan_pengiriman)+($supplierDetail[$i]->nilaiJatuhtempoSupplier*$jatuh_tempo);
            }

            $listSupplierSorted = $supplierDetail->sortByDesc('nilaiTotal');
            $suppliers = $supplierDetail;
            return view('hasilsupplier', compact('listSupplierSorted','suppliers'));
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
