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
//didalam view ini berisi html semua
Route::get('/', function () {
    return view('welcome');
});
// id besrifat opsional

Route::get('halo', function () {
    // bisa diisi program apa saja
    return "Halo, Apa Kabar";


});

Route::get('halo2', function () {
    return "<h1>Halo Apa Kabar</h1>";

});

Route::get('blog', function () {
    return view('blog');

});

Route::get('contact.blade.php', function () {
    return view('contact');

});

Route::get('sign.blade.php', function () {
    return view('sign');

});
Route::get('hello.blade.php', function () {
    return view('hello');

});
Route::get('responsive.blade.php', function () {
    return view('responsive');

});
Route::get('link.blade.php', function () {
    return view('link');

});
Route::get('style.blade.php', function () {
    return view('style');

});
Route::get('js1.blade.php', function () {
    return view('js1');

});
Route::get('js2.blade.php', function () {
    return view('js2');

});
Route::get('style.blade.php', function () {
    return view('style');

});
Route::get('tugas1.blade.php', function () {
    return view('tugas1');

});
Route::get('tugas2.blade.php', function () {
    return view('tugas2');

});
Route::get('/blog', function () {
    return view('home');

});
Route::get('/blog/tentang', function () {
    return view('tentang');

});
Route::get('/blog/kontak', function () {
    return view('kontak');

});



Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');
Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post("/formulir/proses", 'App\Http\Controllers\DosenController@proses');

//route CRUD
Route::get('/keranjangbelanja','App\Http\Controllers\BelanjaController@index1');
Route::post('/keranjangbelanja/store','App\Http\Controllers\BelanjaController@store');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\BelanjaController@beli');
Route::get('/keranjangbelanja/hapus/{ID}','App\Http\Controllers\BelanjaController@hapus');


//route CRUD Pegawai
Route::get('/pegawai','App\Http\Controllers\pegawaicontroller@index');
Route::get('/pegawai/tambah','App\Http\Controllers\pegawaicontroller@tambah');
Route::post('/pegawai/store','App\Http\Controllers\pegawaicontroller@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\pegawaicontroller@edit');
Route::post('/pegawai/update','App\Http\Controllers\pegawaicontroller@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\pegawaicontroller@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/lihat/{id}','App\Http\Controllers\PegawaiController@viewPegawai');
