<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use App\User;
use Validator;

class LoginController extends Controller
{

 
    public function showLoginForm()
    {   
       return view('auth.login');
    }


    public function login (Request $request) { 

        // $request->validate([
        //     'email'=>'required|email',
        //     'password' => 'required',
        // ]);
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique',
            'password' => 'required',
        ]);
    
        if($validator->fails()) {    
            return response()->json($validator->errors()->all(),200);
          }
         
        $credentials = [
             'email'=>$request->input('email'),
             'password'=>$request->input('password')
        ];  
        

        if(!Auth::attempt($credentials)) {  
            return response()->json(['error' => 'Account not found'], 400);
        }
            return response()->json(['message' => 'success']);
        }
        
//             //if ($validator->fails()) {    
//     return response()->json($validator->messages(), 200);
// }
        
    
    //      try {
    //         // verify the credentials and create a token for the user
    //         if (! $token = JWTAuth::attempt($credentials)) {
    //             return response()->json(['error' => 'invalid_credentials'], 401);
    //         }
    //     } catch (JWTException $e) {
    //         // something went wrong
    //         return response()->json(['error' => 'could_not_create_token'], 500);
    //     }

    //     // if no errors are encountered we can return a JWT
    //     return response()->json(compact('token'));
    // }

          

        // $credentials = $request->only('email', 'password');
        // if (Auth::attempt($credentials)) {
        //     // return redirect()->intended('admin');

        //     return response()->json([
        //         'message' => 'success'
        //     ]);
        //     // return response()->redirectTo('admin');
        
        // $email=$request->input('email'); 
        // $password=$request->input('password'); 
    
        // if (Auth::attempt($request->only($email,$password))) {
        //     return response()->redirectTo('index');
        // }
        // else { 
        //     return response()->redirectTo('login');
        // }
    


   
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

