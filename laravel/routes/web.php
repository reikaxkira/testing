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


Route::get('/home', function () {
    return view('home');
});

// Route::get('/login', function () {
//     return view('auth.login');
// });
 
// Auth::routes();  
//------------------------------------------------------------------------------
Route::get('login', 'Auth\LoginController@showLoginForm')->name('showlogin');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//-----------------
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register')->name('blog.register');

//-------------------------------------------------------------------------------

Route::get('/index', 'BlogController@indexpage')->name('indexpage');
Route::get('/admin', 'BlogController@indexs')->name('indexs');
Route::get('/admin/create', 'BlogController@blogform');
Route::put('/admin/update/{id}', 'BlogController@updates')->name('updates');
Route::get('/admin/edit/{slugs}', 'BlogController@editform')-> name('edit');
Route::post('create/blog', 'BlogController@store')->name('created');
Route::delete('delete/blog/{id}', 'BlogController@destroy')->name('delete');
Route::get('/{slugs}', 'BlogController@show')->name('show');



