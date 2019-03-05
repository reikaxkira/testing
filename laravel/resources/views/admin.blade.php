@extends('layouts.master')
@section('content')
@if(Auth::check()) 



<div class="container">
        <div class="pull-right ml-auto">
                <div class="">
                        <a href="{{ url('form/blog')}}">
                            <button type="button" class="btn m-3 btn-success btn-md">Create Post</button> 
                       </a>
                </div>
      <div class="row">      
         <div class="col-md-12">
            <table class="table"> 
                <thead>
                    <th>ID </th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>                              
                </thead>
                       <tbody>
                            @foreach($blogs as $blog)
                                <tr>
                                    <td> {{ $blog -> id}} </td>
                                    <td> {{ $blog -> title}} </td>
                                    <td> {{ $blog -> description}} </td>
                                    <td> 
                                         <a href="update"><button class="btn btn-primary btn-sm"> Update </button> </a>
                                         <a> <button class="btn btn-warning btn-sm"> Edit </button> </a>
                                         <a href={{ route('admin.destroy', [$blog->title])}}>  
                                        <button value="Delete" type="submit"  class="btn btn-danger btn-sm"> Delete </button> </a>
                                    </td>
                                </tr>
                                         
                            @endforeach
                         </tbody>                       
            </table>      
        </div>
    </div>
</div>
</div>    
@endif
@endsection