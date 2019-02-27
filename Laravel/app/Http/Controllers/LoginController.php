<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function login(Request $req) 
   {
      $username = $req->input('username');
      $password = $req->input('password');
      echo $username. "---".$password; 
      // this is for check in if the form is working properly
      $checkLogin = DB::table('users')-> where(['username'=>$username,'password'=> $password])-> get();
       if(count($checkLogin) > 0)
         {
           return view('dashboard');
         }
        else
        {
           echo "Login Failed Wrong Data Passed";
        }
    }
}



