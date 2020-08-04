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

//////////////////////////////////////////////////////////////////////
///////////////////////////////////                                 //
// Route::get('/', function () { //                                 //
//     return view('welcome');   //                                 //
// });                           //                                 //
///////////////////////////////////                                 //
// Route::get('/user/name_{name?}/bio', function ($name = 'john') { //
//     return $name;                                                //
// });                                                              //
//////////////////////////////////////////////////////////////////////

Route::get('/', 'HomeController@index');

Route::get('/guardians', 'GuardianController@index')->name('guardians');
Route::get('/guardians/create', 'GuardianController@create')->name('guardians_create');
Route::post('/guardians/store', 'GuardianController@store')->name('guardians_store');
Route::get('/guardians/edit/{id}', 'GuardianController@edit');
Route::put('/guardians/update/{id}', 'GuardianController@update');
Route::delete('/guardians/delete/{id}', 'GuardianController@delete');

Route::get('/students', 'StudentController@index')->name('students');
Route::get('/students/create', 'StudentController@create')->name('students_create');
Route::post('/students/store', 'StudentController@store')->name('students_store');
Route::get('/students/edit/{id}', 'StudentController@edit');
Route::put('/students/update/{id}', 'StudentController@update');
Route::delete('/students/delete/{id}', 'StudentController@delete');

Route::get('/login', 'AuthController@login');
Route::get('/register', 'AuthController@register');
Route::post('/registration-process', 'AuthController@registrationProcess');
Route::post('/login-process', 'AuthController@loginProcess');
Route::post('/logout', 'AuthController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
