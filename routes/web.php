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
    return view('index');
});
Route::get('/load', function () {
    return view('loading');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/perda', function () {
    return view('perda');
});
Route::get('/datawilayah', function () {
    return view('datawilayah');
});
Route::get('/foto', function () {
    return view('foto');
});
Route::get('/kehijauanwilayah', function () {
    return view('kehijauanwilayah');
});
Route::resource('sensusprofesi','SensusProfesiController');
Route::get('/tambah_sensusprofesi', function () {
    return view('tambah_sensusprofesi');
});
Route::get('/tambah_kehijauanwilayah', function () {
    return view('tambah_kehijauanwilayah');
});
Route::get('/tambah_datawilayah', function () {
    return view('tambah_datawilayah');
});
Route::get('/tambah_foto', function () {
    return view('tambah_foto');
});
Route::get('/tambah_foto', function () {
    return view('tambah_foto');
});

Route::resource('admin','AdminController');
Route::resource('datawilayah','DataTabelController');
Route::resource('foto','GaleriController');
Route::resource('jadwal','jadwalController');
Route::resource('kehijauanwilayah','KehijauanWilayahController');
Route::resource('perdah','PemerintahDaerahController');
Route::resource('sensusprofesi','SensusProfesiController');
