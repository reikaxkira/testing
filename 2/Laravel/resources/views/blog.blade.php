@extends('layouts.app')
@section('content')

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


<br>
<br>


<h1 class="row justify-content-right offset-md-6 align-text-center">Blog</h1>
<form id="formsz" method="POST" action="{{ 'blog'}}">
{{ csrf_field() }}
<div class="form-group row">
        <label for="Description" class="col-md-4 col-form-label text-md-right"> Title</label>
    <div class="col-md-6">
    
    <input id="title" type="text" class="form-control{{ $errors -> has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus> 
      @if ($errors -> has('title'))
          <span class="invalid-feedback" role="alert">
          <strong>{{ $errors -> first('title') }}</strong>
          </span>       
       @endif
    </div>
</div>


<div class="form-group row">
  <label for="Description" class="col-md-4 col-form-label text-md-right"> Description</label>
    <div class="col-md-6">
       <input id="Description1" type="Description" class="form-control" style="height: 300px" name="Description" value="" required>
          <span class="invalid-feedback" role="alert">
          <strong></strong>
          </span>
    </div>
</div>

<div class="form-group row mb-0">
   <div class="col-md-6 offset-md-4">
     <button type="submit" class="btn btn-primary"> Publish </button>
</div>
</form>

@endsection