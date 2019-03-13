<!DOCTYPE html>
<html ng-app>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/app1.js') }}" defer></script>
    <script src="path/to/jquery.js"></script>
    <script src="path/to/popper.js"></script>
    <script src="path/to/bootstrap.js"></script>
    <script src="path/to/bootstrap-confirmation.js"></script> 

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
     <div id="app"> 
        <nav class="navbar navbar-expand-md navbar-light">
             <div class="container">
                        @guest     
                            <a class="navbar-brand" href="{{ url('index') }}">My Blog</a>
                        @endguest
                            @if(Auth::check()) 
                                  <a class="navbar-brand" href="{{ url('index') }}">My Admin Page</a>
                            @endif  
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">  
                                            <ul class="navbar-nav mr-auto"></ul>
                                             <div class="row m-4">  
                                                  @guest
                                                   <a class="btn btn-primary" href="{{ route('login') }}"> Login</a>
                             @else
                                                </div>
                                                  @if(Auth::check()) 
                                                     <h5 class=""> Welcome Admin {{Auth::user()->name}} </h5>
                                                  @endif    
                                               </div> 
                                             </div>
                            
                                         @endguest
                   
                                     </div>
                 </div>
         </nav>


         <div class="row">
            <div class="col-2"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col">
                @if(Auth::check()) 
                   <form id="logout-form" action="{{ route('logout') }}" method="POST">
                       @csrf
                       <button type="submit" class="btn btn-primary m-1"> Logout</button>   
                    </form>
                 @endif
             </div>
         </div>
                                             <main class="py-4">
                                                   @yield('content')
                                             </main>
     </div>
</body>


</html>
