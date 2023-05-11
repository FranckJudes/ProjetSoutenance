@extends('FontEnd.layout')


@section('content')
<div class="container mt-5">
    <div class="row">
      <div class="col">
          <form class="d-flex input-group w-auto"> 
      </div>
      <div class="col-8 input-style-1">
          <input
          type="search"
          class="form-control rounded"
          name="search"
          id="search"
          placeholder="Search"
          aria-label="Search"
          aria-describedby="search-addon "/>

      </div>
          <div class="col">
          
          </div>
          
          <div class="row">
            <div class="col-12">
              <div class="title mt-30 mb-30">
              </div>
            </div>
            <!-- end col -->
           <div class="row" id="allData">
              @foreach ($documents as $document)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ">
                  <div class="card-style-2 mb-30 ">
                    <div class="card-image">
                      <a href="#">
                        @php
                                  $image = $document->images;
                        @endphp
                        <img
                          src=""
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="card-content">
                      <h4><a href="#">{{$document->titre}}</a></h4>
                      <p>
                        {{$document->description}}
                      </p>
                      <p>{{$document->datePublication}} </p>
                        <a class="main-btn deactive-btn  w-100 text-center square-btn btn-hover mt-1" href="{{url('viewID',$document->id)}}" type="submit">Visualiser </a>
                    </div>
                  </div>
                </div>
              @endforeach   
           </div>
            <div  class="row" class="Datagram" id="Content"></div>
              
          </div>
         <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
              {{ $documents->render() }}
        </div>
      </div>
     
    </div>

@endsection
