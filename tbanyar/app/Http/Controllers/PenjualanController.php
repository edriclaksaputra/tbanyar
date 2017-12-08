<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;
use App\Faktur;
use App\Detailfaktur;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

class penjualanController extends Controller
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
        return view('penjualan', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $counter = Input::get('counter');

        $faktur = new Faktur;
        $faktur->tanggal = Input::get('tanggal');
        $faktur->customer = Input::get('namakonsumen');
        $faktur->alamat = Input::get('alamatkonsumen');
        $faktur->total = Input::get('belanjatotal');
        $faktur->save();
        
        //Input ke detail Faktur
        $faktur_id = Faktur::where('created_at', Carbon::now())->first();
        for ($i=0; $i <= $counter; $i++) {
            $detailfaktur = new Detailfaktur;
            $detailfaktur->faktur_id = $faktur_id->id;
            $detailfaktur->items_id = Input::get('item_id'.$i);
            $detailfaktur->banyak = Input::get('banyakBarang'.$i);
            $detailfaktur->subtotal = Input::get('totalbelanjaan'.$i);
            $detailfaktur->save();
            
            //Kurangi Stok di Toko
            $item = Items::find($detailfaktur->items_id);
            $item->stock = $item->stock - $detailfaktur->banyak;
            $item->save();
        }

        return redirect('penjualan');
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
