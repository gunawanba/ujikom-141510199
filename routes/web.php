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

Route::get('/register', function () {
    return view('auth.register');
});

Auth::routes();

Route::get('/', 'HomeController@index');
Route::resource('/jabatan','Jabatan_Controller');
Route::resource('/golongan','Golongan_Controller');
Route::resource('/pegawai','Pegawai_Controller');
Route::resource('/kategori_lembur','Kategori_Lembur_Controller');
Route::resource('/lembur_pegawai','lembur_pegawai_Controller');
Route::resource('/tunjangan','Tunjangan_Controller');
Route::resource('/tunjangan_pegawai','Tunjangan_Pegawai_Controller');
Route::resource('/penggajian','Penggajian_Controller');
Route::get('error', 'Lembur_pegawai_Controller@error');
Route::get('/akses', function () {
    return view('akses');
});
