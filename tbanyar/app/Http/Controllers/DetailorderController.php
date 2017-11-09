<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suppliers;
use App\Detailitem;
use App\Order;
use App\Detailorder;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

class detailorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idsupplier)
    {
        $id_supplier = $idsupplier;

        $supplier_detail = Suppliers::find($id_supplier);
        $listItem_supplier = Detailitem::where('suppliers_id',$id_supplier)->get();
        return view('detailorder', compact('supplier_detail','listItem_supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($supplier_id)
    {
        $counter = Input::get('counter');
        $tanggal = Carbon::now();
        $keterangan = Input::get('keterangan');
        $total = Input::get('belanjatotal');
        $supplier_id = $supplier_id;

        //Input Order baru
        $order = new Order;
        $order->supplier_id = $supplier_id;
        $order->tanggal = $tanggal;
        $order->status = 0;
        $order->tanggaldatang = null;
        $order->keterangan = $keterangan;
        $order->total = $total;
        $order->save();

        //Input ke dalam DetailOrder
        //Ambil detail order yg baru dibuat
        $order_detail = Order::where('created_at', Carbon::now())->first();
        for ($i=0; $i <= $counter; $i++) {
            $detailorder = new Detailorder;
            $detailorder->order_id = $order_detail->id;
            $detailorder->detailitem_id = Input::get('detailbarang_id'.$i);
            $detailorder->banyak = Input::get('banyakBarang'.$i);
            $detailorder->subtotal = Input::get('totalbelanjaan'.$i);
            $detailorder->save();
        }

        return redirect('inputpo');
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
