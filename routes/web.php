<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {return view('layout/conquer2');});

Route::resource('obat', 'Obat160419128Controller');
Route::resource('kategoriobat', 'KategoriObat160419128Controller');
Route::resource('suppliers','SupplierController');
Route::resource('transaksi', 'TransactionController');

//Route::get('daftartransaksi', 'TransactionController@DaftarTransaksi')->name('Daftar Transaksi');

Route::get('rinciantransaksi/{id}', 'TransactionController@RincianTransaksi'); //id otomatis langsung terlempar ke parameter di fun controller

//uts
Route::get('listobat160419128', 'Obat160419128Controller@index');
Route::get('obatbatuk160419128', 'Obat160419128Controller@showBatuk');
Route::get('daftarkategori160419128', 'Obat160419128Controller@showDaftarKategori');
Route::get('stokobatdikit160419128', 'Obat160419128Controller@showStokObat');
//uts
