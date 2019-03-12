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

Route::get('/home   ', function () {
    return view('home');
});

Auth::routes();
Route::get('/index', 'BlogController@indexpage')-> name('indexpage');
Route::get('/admin', 'BlogController@indexs')-> name('indexs');
Route::get('/admin/create', 'BlogController@blogform');
Route::put('/admin/update/{id}', 'BlogController@updates')-> name('updates');
Route::get('/admin/edit/{slugs}', 'BlogController@editform')-> name('edit');
Route::post('create/blog', 'BlogController@store')-> name('created');
Route::delete('delete/blog/{id}', 'BlogController@destroy')-> name('delete');
Route::get('/{slugs}', 'BlogController@show')-> name('show');

