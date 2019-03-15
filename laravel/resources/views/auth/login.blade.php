@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Login</div>
                <div class="card-body">  

                        <div class="row justify-content-md-center">
                                @if(session()->has('success'))
                                       <div class="alert alert-success">
                                           {{ session()->get('success') }}
                                       </div>
                                @endif
                            </div> 
                        @if ($errors->any())
                        <div class="alert alert-danger">
                               <ul>
                                   @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                   @endforeach
                               </ul>
                         </div>
                       @endif
                  <div ng-app="myApp" ng-controller="loginController">
                       <form ng-submit="doLogin()">
                            @csrf
                            {{-- Response Data: @{{data}}
                            Error: @{{error}} --}}
                            {{-- <form method="POST" action="{{ route('login') }}"> --}}
            
                        <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right"> Email</label>
                            <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" ng-model="login.email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"> Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" ng-model="login.password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                    <label class="form-check-label" for="remember">
                                         Remember Me    
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                         Forgot Your Password?
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>  
</div>


@endsection
