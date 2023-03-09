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
                <h2>Cards</h2>
              </div>
            </div>
            <!-- end col -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="card-style-2 mb-30">
                <div class="card-image">
                  <a href="#0">
                    <img
                      src="assets/images/cards/card-style-2/card-1.jpg"
                      alt=""
                    />
                  </a>
                </div>
                <div class="card-content">
                  <h4><a href="#0">Communiquer </a></h4>
                  <p>
                    consectetur adipiscing elit. Integer
                    posuere erat a ante.
                  </p>
                  <p>12-02-2022</p>
                </div>
              </div>
            </div>
            <!-- end col -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="card-style-2 mb-30">
                <div class="card-image">
                  <a href="#0">
                    <img
                      src="assets/images/cards/card-style-2/card-2.jpg"
                      alt=""
                    />
                  </a>
                </div>
                <div class="card-content">
                  <h4><a href="#0">Liste de Selection </a></h4>
                  <p>
                    consectetur adipiscing elit. Integer
                    posuere erat a ante.
                  </p>
                  <p>12-02-2022</p>
                </div>
              </div>
            </div>
            <!-- end col -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="card-style-2 mb-30">
                <div class="card-image">
                  <a href="#0">
                    <img
                      src="assets/images/cards/card-style-2/card-3.jpg"
                      alt=""
                    />
                  </a>
                </div>
                <div class="card-content">
                  <h4><a href="#0">Notes  </a></h4>
                  <p>
                    consectetur adipiscing elit. Integer
                    posuere erat a ante.
                  </p>
                  <p>12-02-2022</p>
                </div>
              </div>
            </div>
          </div>
          
      
      </div>
     
    </div>

@endsection