<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\DosenController;

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

Route::get('/error', function () {
    return "<h1>Server Error : Ada Kesalahan di Server</h1>";
});

Route::get('/error', function () {
    return "<h1>Server Error : Ada Kesalahan di Server</h1>";
});

// route blog
Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('blog2', 'App\Http\Controllers\DosenController@blog');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

// Route::get('/pegawai/{nama}', 'App\Http\Controllers\PegawaiController@index');
Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiDBController@index');

Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiDBController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiDBController@store');

//tugas tambahin: edit, save, delete
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiDBController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiDBController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiDBController@hapus');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiDBController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiDBController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiDBController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiDBController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiDBController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiDBController@hapus');

Route::get('/pegawai','App\Http\Controllers\PegawaiDBController@index');

Route::get('/pegawai','App\Http\Controllers\PegawaiDBController@index');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiDBController@cari');


//Tugas
Route::get('/kursi', 'App\Http\Controllers\KursiDBController@index');
Route::get('/kursi/tambah', 'App\Http\Controllers\KursiDBController@tambah');
Route::post('/kursi/store', 'App\Http\Controllers\KursiDBController@store');
Route::get('/kursi/edit/{id}', 'App\Http\Controllers\KursiDBController@edit');
Route::post('/kursi/update', 'App\Http\Controllers\KursiDBController@update');
Route::get('/kursi/hapus/{id}', 'App\Http\Controllers\KursiDBController@hapus');
Route::get('/kursi/cari', 'App\Http\Controllers\KursiDBController@cari');
