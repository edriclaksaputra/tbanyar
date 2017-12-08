<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suppliers;
use App\Items;
use App\Detailitem;
use Illuminate\Support\Facades\Input;

class inputbarangController extends Controller
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
        $suppliers = Suppliers::get();
        return view('inputbarang', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = new Items;
        $item->nama = Input::get('namabarang');
        // $item->stock = Input::get('stockbarang');
        $item->stock = 0;
        $item->hargajual = Input::get('hargajual');

        $cekItem = Items::where('nama',$item->nama)->get()->first();
        if($cekItem == null){
            $item->save();

            $itemDetail = new Detailitem;
            $itemDetail->suppliers_id = Input::get('supplier');

            //buat dapet id barang
            $namaItem = Input::get('namabarang');
            $id_barang = Items::where('nama',$namaItem)->first();
            //
            $itemDetail->items_id = $id_barang->id;
            $itemDetail->hargabeli = Input::get('hargabeli');
            $itemDetail->save();

            return redirect('listbarang');
        }
        else{
            $cekItem->stock = $cekItem->stock+$item->stock;
            $cekItem->save();

            $itemDetail = new Detailitem;
            $itemDetail->suppliers_id = Input::get('supplier');

            //buat dapet id barang
            $namaItem = Input::get('namabarang');
            $id_barang = Items::where('nama',$namaItem)->first();
            //
            $itemDetail->items_id = $id_barang->id;
            $itemDetail->hargabeli = Input::get('hargabeli');
            $itemDetail->save();
            return redirect('listbarang');
        }

        
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
    public function show($id)
    {
        //
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
