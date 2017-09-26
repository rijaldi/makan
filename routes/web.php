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


Route::get('/laporan',"LaporanController@tampil_laporan");
Route::get('/transaksi',"TransaksiController@tampil_transaksi");
Route::get('/pegawai', "ControllerCucu@tampil_pegawai");
Route::get('/transaksi_pegawai', "ControllerCucu@tampil_transaksi_pegawai");

