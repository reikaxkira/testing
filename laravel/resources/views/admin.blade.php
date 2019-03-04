@extends('layouts.master')
@section('content')
@if(Auth::check()) 

<div class="container">
    <div class="row justify-content-center">
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
                                    <td> <button href="#" class="btn btn-primary btn-sm"> View </button> 
                                         <button href="#" class="btn btn-secondary btn-sm"> Create </button> 
                                         <button href="#" class="btn btn-warning btn-sm"> Edit </button></td>
                                </tr>         
                            @endforeach
                        </tbody>                       
            </table>      
        </div>
    </div>
</div>
@endif
@endsection