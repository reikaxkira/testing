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
    return view('index');
});


Auth::routes();


Route::get('/home', 'HomeController@index');

Route::get('admin',function(){
    return view('admin');
});

Route::resource('admin','BlogController');

Route::get('/form/blog', 'BlogController@blogform');

Route::post('create/blog', 'BlogController@store');


Route::get('/blog/update', function () {
    return view('update');
});