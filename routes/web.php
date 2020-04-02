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

Route::get('hello', function () {
    return "settt";
});

Route::get('blog', function () {
    return view('blog');
});

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
//pencarian
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/cariumur','PegawaiController@cariumur');
//validasi
Route::get('/input', 'MalasngodingController@input');
Route::post('/proses', 'MalasngodingController@proses');
//
Route::get('/pegawais','PegawaisController@index');

//
Route::get('/dosen', 'DosenController@index');
Route::get('/pegawai/{nama}', 'PegawaiController@indexs');
Route::get('/formulir', 'PegawaiController@formulir');
Route::post('/formulir/proses', 'PegawaiController@proses');

// route blog
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');
Route::get('/blog/blog', 'BlogController@blog');