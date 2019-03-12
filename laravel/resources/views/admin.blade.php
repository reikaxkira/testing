@extends('layouts.master')
@section('content')
@if(Auth::check()) 



<div class="container">
        <div class="row justify-content-md-center">
            @if(session()->has('message'))
                   <div class="alert alert-success">
                       {{ session()->get('message') }}
                   </div>
            @endif
        </div> 
                <div class="row pb-4 ml-2 mb-2">
                     <div class="col">
                        <h5> Blog Post Collection </h5> 
                        <hr class="hrindexadmin">
                      </div>  
                </div>   
                    <div class="row"> 
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col mb-3">
                              <a href="{{ url('/admin/create')}}">
                                 <button type="button" class="btn btn-success btn-md">Create New Post</button> 
                              </a>
                       </div>
                    </div>
      
    
    <div class="row m-3">      
         <div class="col-md-12">
            <table class="table"> 
                <thead>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Action</th>                              
                </thead>
                       <tbody>
                         @foreach($blogs as $blog)
                                <tr>
                                    <td> {{ $blog->id}} </td>
                                    <td> {{ $blog->title}} </td>
                                    {{--  --}}
                                    <td> {{ substr(strip_tags($blog->description),0,20)}} </td>
                                    {{-- M(three day format) ,j(Day of month without leading zeros) ,Y(full numeric representation),h 12 hour format, i with leading zeros --}}                                    
                                    <td> {{  ($blog->created_at->format('M j,Y')) }} </td>
                                    <td> 
                                         <div class="row">
                                            <div class="form-group m-1">

                                            <a href="{{route('edit',[$blog->slugs])}}" class="btn btn-primary btn-sm"> Edit</a>
                                                
                                            </div>
                                            <div class="form-group m-1">
                                                <form action="{{ route('delete', [$blog->id])}}" method="POST"> 
                                                    @method('DELETE')
                                                    @csrf 
                                                    <button  onclick="return confirm('Are you sure?')"  data-toggle="confirmation" value="Delete" type="submit"  class="btn btn-danger btn-sm"> Delete </button> </a>
                                                </form> 
                                            </div> 
                                        </div>
                                    </td>
                                </tr>            
                            @endforeach
                        </tbody>                       
            </table>      
        {{ $blogs -> links() }}
        </div>
    </div>
</div>
</div>    
@endif
@endsection

