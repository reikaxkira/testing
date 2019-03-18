<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use App\User;

class LoginController extends Controller
{
 
    public function showLoginForm()
    {   
       return view('auth.login');
    }


    public function login (Request $request) { 

        $request->validate([
            'email'=>'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // return redirect()->intended('admin');
            return response()->redirectTo('admin');
        }
        // $email=$request->input('email'); 
        // $password=$request->input('password'); 
    
        // if (Auth::attempt($request->only($email,$password))) {
        //     return response()->redirectTo('index');
        // }
        // else { 
        //     return response()->redirectTo('login');
        // }
    }


   
    // }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
    protected function loggedOut(Request $request)
    {
         
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

