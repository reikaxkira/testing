@extends('layouts.master')
@section('content')
@if(Auth::check()) 
  <div class="row">
      <div class="col-sm-12">
         <div class="full-right">
             <h2> Admin Blog Page </h2>
         </div>
      </div>
  </div>

  <table class="table table-bordered">
      <tr>
          <th width="80px">No</th>
          <th> Body</th>
          <th width="140px" class="text-center"> 
              <a href="#" class="btn btn-success btn-sm"></a>
          </th>
      </tr>

  </table>
@endif
@endsection