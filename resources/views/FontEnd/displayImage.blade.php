@extends('FontEnd.layout')


@section('content')
<div class="container mt-5">
    <div class="row">
      <div class="col">
          <form class="d-flex input-group w-auto"> 
      </div>
          <div class="col">
          
          </div>
          
          <div class="row">
            <div class="col-12">
              <div class="title mt-30 mb-30">
              </div>
            </div>
                <div class="container">
                  <div class="card">
                      <div class="card-body">
                          <div class="row mt-4">
                              @foreach ($images as $image)
                                  <div class="card text-white  m-3" style="max-width:50%; max-height:50%">
                                          <img src="/Documents_images/{{$image->image}}" class="card-img-top">  
                                  </div>
                              @endforeach
                          </div>
                      </div>
                  </div>
              </div>
           </div>
            <div  class="row" class="Datagram" id="Content"></div>
              
          </div>
         <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
        </div>
      </div>
     
    </div>

@endsection