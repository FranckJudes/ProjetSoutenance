@extends('Admin.main-layout')
    @section('title')
    <h2> Importation Image</h2>
    @endsection
    @section('GrandTitre')
        Import
    @endsection
    @section('SousTitre')
        Image
    @endsection
@section('content')
<div class="form-elements-wrapper">
    <div class="row container">
      <div class="col-12">
        <!-- input style start -->
        <div class="card-style mb-30">
          <h6 class="mb-25">Input Fields</h6>
          <div class="input-style-1 col">
            <label>Titre</label>
            <input type="text" placeholder="Titre"/>
          </div>
          <!-- end input -->
          <div class="input-style-1 col">
            <label>Description</label>
            <input type="text" placeholder="Description" />
          </div>
          <!-- end input -->
          <div class="input-style-1 col">
            <label>Full Name</label>
            <input type="file" placeholder="Full Name" multiple/>
          </div>
          <!-- end input -->
          <div class="input-style-1 col">
            <button class="main-btn deactive-btn  w-100 text-center square-btn btn-hover">Soumettre</button>
          </div>
        </div>

        <div class="card-style mb-30">
            <h6 class="mb-10">Documents</h6>
          
            <div class="table-wrapper table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th><h6>Titre</h6></th>
                    <th><h6>Description</h6></th>
                    <th><h6>Total Images</h6></th>
                    <th><h6>Date de Publication</h6></th>
                    <th><h6>Action</h6></th>

                  </tr>
                  <!-- end table row-->
                </thead>
                <tbody>
                  <tr>
                    <td class="min-width">
                      <div class="lead">
                        <div class="lead-text">
                          <p>Courtney Henry</p>
                        </div>
                      </div>
                    </td>
                    <td class="min-width">
                      <p><a href="#0">yourmail@gmail.com</a></p>
                    </td>
                    <td class="min-width">
                      <p>(303)555 3343523</p>
                    </td>
                    <td class="min-width">
                      <p>UIdeck digital agency</p>
                    </td>
                    <td>
                      <div class="action">
                        <div class="action justify-content-end">
                            <button
                              class="more-btn ml-10 dropdown-toggle"
                              id="moreAction1"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              <i class="lni lni-more-alt"></i>
                            </button>
                            <ul
                              class="dropdown-menu dropdown-menu-end"
                              aria-labelledby="moreAction1"
                            >
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Remove</a>
                              </li>
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Edit</a>
                              </li>
                            </ul>
                          </div>
                      </div>
                    </td>
                  </tr>
                 
                </tbody>
              </table>
              <!-- end table -->
            </div>
          </div>    

@endsection