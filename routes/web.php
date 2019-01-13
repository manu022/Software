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

Route::get('/home', function () {
    return view('landing_page');
});

Route::get('login', 'Auth\LoginController@getLogin');

Route::post('login', 'Auth\LoginController@login')->name('login');

Route::get('/register', function() {
	return view('register');
});

Route::get('/registro_empresa', function() {
  return view('registro_empresa');
});
