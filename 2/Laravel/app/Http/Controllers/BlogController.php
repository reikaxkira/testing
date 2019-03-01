<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function view()  
    { 
        return view('blog');
    }

    public function create()  
    { 
        
    }

    public function update()  
    { 
        
    }

    public function delete()  
    { 
        
    }

}



// Route::post('/blog','BlogController@view');
// Route::post('/blog/create','BlogController@create');
// Route::post('/blog/update','BlogController@update');
// Route::post('/blog/delete','BlogController@delete');