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


Route::get('/index', function () {
    return view('index');
});


Auth::routes();


Route::get('/home', 'HomeController@index');

Route::get('admin',function(){
    return view('admin');
});
Route::resource('admin','BlogController');
Route::get('/admin/create', 'BlogController@blogform');


Route::put('/admin/update/{id}', 'BlogController@update')-> name('updates');
// Route::put('/admin/update/{id}', 'BlogController@update')-> name('update');
Route::post('/admin/edit/{id}', 'BlogController@editform')-> name('edit');


// Route::post('albums/update/{id}', ['uses' => 'BlogController@editform']) -> name('update');

Route::post('create/blog', 'BlogController@store')-> name('created');
Route::delete('delete/blog/{id}', 'BlogController@destroy')-> name('delete');