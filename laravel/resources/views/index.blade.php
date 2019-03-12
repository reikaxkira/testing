@extends('layouts.master')
@section('content')


<div class="container">
     <div class="row m-1">
         <div>
              <h3> Popular Posts </h3>
              <hr class="hrindex">
         </div>
     </div>
       <div class="row">
          <div class="col">
                @foreach($blogs as $blog)
                     <label class="label_bold font-weight-bold mx-5"> {{ $blog->title}} </label>
                       <p class="dateparagraph font-italic mx-5"> {{ ($blog->created_at->format('M j,Y H:i:s A')) }} </p>
                       <p class="mx-5">  {{ str_limit($blog->description, $limit=200, $end='....') }}  </p>                
                         <div class="row m-5"> 
                             <div class="col"></div>
                             <div class="col"></div>
                             <div class="col">
                             <a class="btn btn-primary ml-5" href="{{route('show',[$blog->slugs])}}"> Read More </a>
                           </div>
                         </div>     
                      <hr class="ml-5 hrindexdash"> 
                      <br>
                 @endforeach
                      <div class="row">
                          <div class="col"></div>
                          <div class="col"></div>
                          <div class="col">
                         {{ $blogs->links('vendor.pagination.simple-bootstrap-4') }} 
                          <div class="col"></div>
                      </div>   
            </div>
         </div>
@endsection
