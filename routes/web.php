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

Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('register', 'Auth\RegisterController@showRegisterForm');
Route::post('register', 'Auth\RegisterController@register')->name('register');


Route::get('/registro_empresa', function() {
  return view('registro_empresa');
});

Route::get('/curriculum', function() {
  return view('curriculum');
});

Route::get('dashboard', 'DashboardController@index')->name('dashboard');



