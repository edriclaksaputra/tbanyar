<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use App\Detailorder;
use App\Detailitem;
use App\Items;
use App\Suppliers;

class validasipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::get();

        return view('validasipo', compact('orders'));
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
    public function update()
    {
        $order_id = Input::get('idOrderKirim');
        $order = Order::find($order_id);
        $order->status = 1;
        $order->tanggaldatang = Carbon::now();
        $order->save();
        //update supplier lama kirim
        $supplier = Suppliers::find($order->suppliers_id);
        $tanggal = Carbon::parse($order->tanggal);
        $supplier->lamapengiriman = $order->tanggaldatang->diffInDays($tanggal);
        $supplier->save();
        //

        $detailorder = Detailorder::where('order_id',$order_id)->get();
        for ($i=0; $i < count($detailorder); $i++) { 
            $detailitem = Detailitem::find($detailorder[$i]->detailitem_id);
            $item = Items::find($detailitem->items_id);
            $item->stock = $item->stock+$detailorder[$i]->banyak;
            $item->save();
        }
        return redirect('validasipo');
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
