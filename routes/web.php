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
Route::prefix('admin')->middleware('auth')->group(function(){    
	Route::get('pelanggan','PelangganController@index');
	Route::get('pelanggan/tambah','PelangganController@tambah');  
	Route::post('pelanggan/simpan','PelangganController@simpan');
	Route::get('pelanggan/hapus/{id}', 'PelangganController@hapus');
	Route::get('pelanggan/edit/{id}','PelangganController@edit');  
	Route::put('pelanggan/update/{id}','PelangganController@update');

});
Route::prefix('admin')->middleware('auth')->group(function(){    
	Route::get('barang','BarangController@index');
	Route::get('barang/tambah','BarangController@tambah');  
	Route::post('barang/simpan','BarangController@simpan');
	Route::get('barang/hapus/{id}', 'BarangController@hapus');
	Route::get('barang/edit/{id}','BarangController@edit');  
	Route::put('barang/update/{id}','BarangController@update');	
});

Route::prefix('admin')->middleware('auth')->group(function(){    
	Route::get('pembelian','PembelianController@index');
	Route::get('pembelian/tambah','PembelianController@tambah');  
	Route::post('pembelian/simpan','PembelianController@simpan');	
	Route::get('pembelian/hapus/{id}', 'PembelianController@hapus');
	Route::get('pembelian/edit/{id}','PembelianController@edit');  
	Route::put('pembelian/update/{id}','PembelianController@update');	
});
Route::get('/beranda','BerandaController@fungsi1');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


