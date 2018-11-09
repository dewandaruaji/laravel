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
Route::get('/index', function () {
    return view('index');
});
Route::get('/halamandua', function () {
    return view('halamandua');
});
Route::get('/halamantiga', function () {
    return view('halamantiga');
});
Route::get('/mahasiswa_create', function () {
    return view('mahasiswa_create');
});
Route::get('/user_create', function () {
    return view('user_create');
});
Route::get('/file_create', function () {
    return view('file_create');
});

Route::resource('halaman', 'Dave');
Route::get('dave/tambah', 'Dave@tambah');

Route::resource('mahasiswa','Mahasiswa');
Route::resource('model_users','User');
Route::resource('model_files','Files');
