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

Route::get('/users', 'UsersController@index');

Route::post('/register', 'RegisterController@store');
Route::get('/register', 'RegisterController@index');
Route::get('/edit/{id}', 'UsersController@edit');
Route::post('/update/{id}', 'UsersController@update')->name('update.user');
Route::get('/delete/{id}', 'UsersController@destroy');