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
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    // public function authenticate(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         return redirect()->intended('/admin');
    //     }
    // }

    public function showLoginForm()
    {   

       return view('auth.login');
    }


    public function login (Request $request) { 

        // dd($request->all());
        // $request->validate([
        //     'email'=>'required|email',
        //     'password' => 'required',
        // ]);
        return response($content);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('admin');
        //    return['status' => 'redirect',
        //     'to' => route('admin')];

        //     return [
        //         'status' => 'failed',
        //         'message' => 'Email or password are wrong'
        //     ];

         }
    }


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

