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
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('erd.erd');
});

Route::get('/artikel/create', 'ArtikelController@create'); // menampilkan halaman form
Route::post('/artikel', 'ArtikelController@store'); // menyimpan data artikel
Route::get('/artikel', 'ArtikelController@index'); // menampilkan semua data artikel
Route::get('/artikel/{id}', 'ArtikelController@show'); // menampilkan detail artikel dengan id
Route::get('/artikel/{id}/edit', 'ArtikelController@edit'); // menampilkan form untuk edit artikel
Route::put('/artikel/{id}', 'ArtikelController@update'); // menyimpan perubahan dari form edit artikel
Route::delete('/artikel/{id}', 'ArtikelController@destroy'); // menghapus data artikel dengan id
