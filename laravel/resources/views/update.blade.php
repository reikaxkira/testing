@extends('layouts.master')
@section('content')

@if(Auth::check()) 

<div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header"></div>
                
                  <div class="card-body">
                        <h2> Update Blog</h2>
                  <form method="post" action="{{ url('admin.update') }}">
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                               <div class="form-group">
                                    <label for="name">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" aria-describedby="title">
                                    @if ($errors -> has('title'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors -> first('title') }}</strong>
                                    </span>       
                                 @endif
                               </div>
                               <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                                    <span class="invalid-feedback" role="alert">
                                          <strong></strong>
                                          </span>
                               </div>
                               <button type="submit" class="btn btn-primary">Update post</button> 
                   </form>       
                   
                               @if($errors->any())
                                 <div class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                          </div>
                               @endif
                  </div>
              </div>
          </div>
      </div>
</div>


@endif
@endsection
