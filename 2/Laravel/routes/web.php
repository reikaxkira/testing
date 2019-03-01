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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin Page





// Blog Page
Route::get('/blog','BlogController@view');
Route::post('/blog/create','BlogController@create');
Route::post('/blog/update','BlogController@update');
Route::post('/blog/delete','BlogController@delete');






