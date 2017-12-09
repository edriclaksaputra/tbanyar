<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;
use Illuminate\Support\Facades\Input;
use App\Detailitem;
use App\Suppliers;

class listbarangController extends Controller
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
        $items = items::get();
        return view('listbarang', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = items::get();
        return view('listbarangsupplier', compact('items'));
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
        $idbarang = Input::get('idbarang');

        $itemSupplier = Detailitem::where('items_id', $idbarang)->get();
        return view('detailbarangsupplier', compact('itemSupplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function insert()
    {
        $idbarang = Input::get('iditem');
        $itemDetail = Items::where('id', $idbarang)->first();
        $suppliers = suppliers::get();

        return view('inputbarangsupplierbaru', compact('itemDetail', 'suppliers'));
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
        $idbarang = Input::get('idbarang');
        $idsupplier = Input::get('idsupplier');
        $hargabeli = Input::get('hargabeli');

        $detailItemBaru = new Detailitem;
        $detailItemBaru->items_id = $idbarang;
        $detailItemBaru->suppliers_id = $idsupplier;
        $detailItemBaru->hargabeli = $hargabeli;

        $detailItemBaru->save();
        return redirect('listbarangsupplier');
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
