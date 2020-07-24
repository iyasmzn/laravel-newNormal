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

Route::get('/players', 'PlayerController@index');
Route::get('/players/create', 'PlayerController@create');
Route::post('/players/store', 'PlayerController@store');
Route::get('/players/edit/{id}', 'PlayerController@edit');
Route::put('/players/update/{id}', 'PlayerController@update');
Route::delete('/players/delete/{id}', 'PlayerController@delete');
