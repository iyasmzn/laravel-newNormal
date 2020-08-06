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
Route::get('/', 'HomeController@index');

Route::get('/players', 'PlayerController@index');
Route::get('/players/create', 'PlayerController@create');
Route::post('/players/store', 'PlayerController@store');
Route::get('/players/edit/{id}', 'PlayerController@edit')->where('id', '[0-9]+');
Route::put('/players/update/{id}', 'PlayerController@update');
Route::delete('/players/delete/{id}', 'PlayerController@delete');

Route::get('/clubs', 'ClubController@index');
Route::get('/clubs/create', 'ClubController@create');
Route::post('/clubs/store', 'ClubController@store');
Route::get('/clubs/edit/{id}', 'ClubController@edit');
Route::put('/clubs/update/{id}', 'ClubController@update');
Route::delete('/clubs/delete/{id}', 'ClubController@delete');

Route::get('/login', 'AuthController@login');
Route::get('/register', 'AuthController@register');
Route::post('/registration-process', 'AuthController@registrationProcess');
Route::post('/login-process', 'AuthController@loginProcess');
Route::post('/logout', 'AuthController@logout');
