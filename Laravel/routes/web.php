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
    return view('home');
});


Route::get('/login', 'UserLoginController@login');
Route::get('/register', 'UserLoginController@register');
Route::post('/register', 'UserLoginController@validateRegister');
Route::post('/register', 'UserLoginController@storeRegister');
Route::post('/login', 'LoginController@login');
