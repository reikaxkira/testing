@extends('layouts.master')
@section('content')

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
                            <h2> View Blogs</h2>
                                <div class="row m-4">
                                        <div class="col">
                                            <h4> {{ $blogs->title}}</h4>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col ml-5">
                                            <p>{{ $blogs->description}}</p>
                                        </div> 
                                </div>
                                
                                <div class="d-flex justify-content-end">    
                                        <a href="{{route('indexpage')}}" class="btn btn-dark m-1"> Back</a>  
                                </div>                      
                    </div>
                </div>
            </div>
    </div>
</div>

@endsection
