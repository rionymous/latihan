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

Route::get('/', 'DashboardController@index');

Route::get('/pendaftaran', 'PendaftaranController@index');

Route::get('/dokter', 'DokterController@index');
Route::get('/dokter/tambah', 'DokterController@tambah');

Route::get('/poliklinik', 'PoliklinikController@index');
Route::get('/poliklinik/tambah', 'PoliklinikController@tambah');
Route::post('/poliklinik/store', 'PoliklinikController@store');
Route::get('/poliklinik/hapus/{id}', 'PoliklinikController@hapus');

Route::get('/penjamin', 'PenjaminController@index');
Route::get('/penjamin/tambah', 'PenjaminController@tambah');
Route::post('/penjamin/store', 'PenjaminController@store');
Route::get('/penjamin/hapus/{id}', 'PenjaminController@hapus');
