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
Route::get('/', 'ProductoController@index')->name('inicio');
Route::post('/add', 'ProductoController@store')->name('add');
Route::get('/edit/{id}', 'ProductoController@edit')->name('edit');
Route::put('/update/{id}', 'ProductoController@update')->name('update');
Route::get('/show/{id}', 'ProductoController@show')->name('show');
Route::get('/destroy/{id}', 'ProductoController@destroy')->name('destroy');


