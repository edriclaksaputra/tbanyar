<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('detailorder/{idsupplier}', 'DetailorderController@index')->name('detailorder');
Route::post('inputorder/{idsupplier}', 'DetailorderController@create')->name('inputorder');
Route::get('evaluasisupplier', 'EvaluasisupplierController@index')->name('evaluasisupplier');
Route::get('inputbarang', 'InputbarangController@index')->name('inputbarang');
Route::post('inputbarang/addbarangbaru', 'InputbarangController@create')->name('addbarangbaru');
Route::get('inputpo', 'InputpoController@index')->name('inputpo');
Route::get('inputsupplier', 'InputsupplierController@index')->name('inputsupplier');
Route::post('inputsupplier/addnewsupplier', 'InputsupplierController@create')->name('addnewsupplier');
Route::get('listbarang', 'ListbarangController@index')->name('listbarang');
Route::get('listsupplier', 'ListsupplierController@index')->name('listsupplier');
Route::get('penjualan', 'PenjualanController@index')->name('penjualan');
Route::get('validasipo', 'ValidasipoController@index')->name('validasipo');