<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    public function login()
    {
        return view('auth.login_form');
    }

    public function register()
    {
        return view('auth.register_form');
    }
    
    public function validateRegister() 
    { 
    request()->validate([
        'name' => 'required|min:8|max:50',           
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',                
        'confirm_password' => 'required|min:6|max:20|same:password',], 
        ['name.required' => 'Name is required',
        'name.min' => 'Username must be at least 8 characters.',
        'name.max' => 'Name should not be greater than 50 characters.',]);
         $input = request()->except('password','confirm_password');
        // $user=new User($input);
        // $user->password=bcrypt(request()->password);
        // $user->save();
        // return back()->with('success', 'User created successfully.');
    }

    public function storeRegister() { 
        $input = request()->except('password','confirm_password');
        $user=new User($input);
        $user->password=bcrypt(request()->password);
        $user->save();
        return back()->with('success', 'User created successfully.');

      
    }


}
