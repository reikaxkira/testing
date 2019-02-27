@extends('layouts.master')
@section('content')


{{-- <div class="container">
  <div class="row justify-row-center">
      <div class="col-md-8">
          <form action="POST" action=""></form>
             <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                    <div class="col-md-6">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
             </div>
      </div>
  </div>
</div>  --}}

@if (count($errors) > 0)
<div class="alert alert-danger">
   <ul>
     @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
     @endforeach
   </ul>
</div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<h1 class="justify-content-center align-text-center mx-5">Register</h1>
<form method="POST" action="{{ 'register'}}">
{{ csrf_field() }}
<div class="form-group row {{ $errors->has('name') ? 'has-error' : ''}})">
  <label for="name" class="col-md-4 col-form-label text-md-right"> Name</label>
    <div class="col-md-6">
    
    <input id="name" type="text" class="form-control{{ $errors -> has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus> 
      @if ($errors -> has('name'))
          <span class="invalid-feedback" role="alert">
          <strong>{{ $errors -> first('name') }}</strong>
          </span>       
       @endif
    </div>
</div>

<div class="form-group row">
  <label for="email" class="col-md-4 col-form-label text-md-right"> Email</label>
    <div class="col-md-6">
       <input id="email" type="email" class="form-control" name="email" value="" required>
          <span class="invalid-feedback" role="alert">
          <strong></strong>
          </span>
    </div>
</div>

<div class="form-group row">
   <label for="password" class="col-md-4 col-form-label text-md-right"> Password</label>
     <div class="col-md-6">
        <input id="password" type="password" class="form-control" name="password" required>
            <span class="invalid-feedback" role="alert">
            <strong></strong>
            </span>
     </div>
</div>

<div class="form-group row">
        <label for="password-confirmation" class="col-md-4 col-form-label text-md-right"> Confirm Password</label>
          <div class="col-md-6">
             <input id="password" type="password" class="form-control" name="password-confirmation" required>
                 <span class="invalid-feedback" role="alert">
                 <strong></strong>
                 </span>
          </div>
     </div>

<div class="form-group row mb-0">
   <div class="col-md-6 offset-md-4">
     <button type="submit" class="btn btn-primary"> Register </button>
</div>
</form>

@endsection