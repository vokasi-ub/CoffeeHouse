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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/master', function () {
    return view('dashboard.dashboard');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('kategori', 'KategoriController');
Route::resource('produk', 'ProdukController');
Route::resource('pembelian', 'PembelianController');
Route::resource('pelanggan', 'PelangganController');
Route::resource('tampilProduk', 'TampilProdukController');
Route::resource('detailProduk', 'TampilProdukController');
Route::resource('beli', 'TampilProdukController');
Route::resource('nota', 'TampilProdukController');

Route::get('transaksi/{id}', 'TampilProdukController@transaksi');
Route::post('nota-beli', 'TampilProdukController@nota');
Route::get('/getharga/{id}', 'TampilPRodukController@getharga');


//Searching
Route::get('query', 'ProdukController@search');