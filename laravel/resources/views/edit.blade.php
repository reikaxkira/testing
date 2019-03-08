@extends('layouts.master')
@section('content')

@if(Auth::check()) 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"></div>
                    <div class="card-body">
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                        {{ session()->get('message') }}
                        </div>
                        @endif              
                            @if($errors->any())
                            <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                            @endforeach
                            </div>
                            @endif
                            <h2> Edit Blog</h2>
                                <form action="{{route('updates',$blogs->id)}}" method="post">
                                     @method('PUT')
                                     @csrf  
                                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                        <div class="form-group">
                                            <label for="name">Title</label>
                                            <input type="text" class="form-control" id="title" value="{{ $blogs -> title}}" name="title" aria-describedby="title">
                                        </div>
                                        <div class="form-group">
                                            <label for="slugs">Slugs</label>
                                            <input type="text" class="form-control" id="slugs" name="slugs" value="{{ $blogs -> slugs}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" id="description" rows="10" name="description" value="">{{ $blogs -> description}}</textarea>
                                        </div> 
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary m-1"> Update</button>     
                                            <a href="{{url('admin')}}" class="btn btn-dark m-1"> Back to admin page</a>  
                                        </div>   
                                </form>                        
                    </div>
                </div>
            </div>
    </div>
</div>
@endif
@endsection
