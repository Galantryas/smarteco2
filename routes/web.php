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
Route::get('/sensusprofesi', function () {
    return view('sensusprofesi');
});
Route::get('/edit_sensusprofesi', function () {
    return view('edit_sensusprofesi');
});
Route::get('/edit_kehijauanwilayah', function () {
    return view('edit_kehijauanwilayah');
});
Route::get('/edit_datawilayah', function () {
    return view('edit_datawilayah');
});
Route::get('/edit_foto', function () {
    return view('edit_foto');
});
Route::get('/tambah_foto', function () {
    return view('tambah_foto');
});
