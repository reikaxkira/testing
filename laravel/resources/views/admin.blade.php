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
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                        <a href="{{ url('/admin/create')}}">
                            <button type="button" class="btn m-3 btn-success btn-md">Create Post</button> 
                       </a>
                </div>
       </div>
    
    <div class="row">      
         <div class="col-md-12">
            <table class="table"> 
                <thead>
                    <th>ID </th>
                    <th>Slug </th>
                    <th>Title</th>
                    <th>Description</th>
                    <th> Date Created</th>
                    <th>Action</th>                              
                </thead>
                       <tbody>
                         @foreach($blogs as $blog)
                                <tr>
                                    <td> {{ $blog -> id}} </td>
                                    <td> {{ $blog -> title}} </td>
                                    <td> {{ $blog -> slugs}} </td>
                                    <td> {{ substr(strip_tags($blog -> description),0,250)}} </td>
                                    {{-- M(three day format) ,j(Day of month without leading zeros) ,Y(full numeric representation),h 12 hour format, i with leading zeros --}}
                                    <td> {{ date('M j,Y h:i',strtotime($blog -> created_at)) }} </td>
                                    <td> 
                                         <div class="row">
                                            <div class="form-group m-1">
                                                 <form action="{{ route('edit', [$blog->id])}}" method="get">  
                                                     @csrf 
                                                     <button  value="edit" type="submit"  class="btn btn-primary btn-sm"> Edit </button> </a>
                                                 </form>
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

