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

Route::get('/create', function () {
    return view('create');
});

Route::get('/show', function () {
    return view('show');
});

Route::get('/', 'MahasiswaController@index')->name('home');
Route::get('/create', 'MahasiswaController@create');
Route::post('/store', 'MahasiswaController@store');
Route::get('/show/{id}', 'MahasiswaController@show');
Route::get('/delete/{id}', 'MahasiswaController@destroy');
Route::get('/edit/{id}', 'MahasiswaController@edit');
Route::post('/update/{id}', 'MahasiswaController@update');
