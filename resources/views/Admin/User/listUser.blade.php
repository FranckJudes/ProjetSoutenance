@extends('Admin.main-layout')
    @section('title')
    <h2> Page D'acceuil </h2>
    @endsection
    @section('GrandTitre')
        DashBoard
    @endsection
    @section('SousTitre')
        Acceuil
    @endsection
@section('content')

<div class="card-style mb-30">
    <h6 class="mb-10">Utilisateurs</h6>
  
    <div class="table-wrapper table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th><h6>name</h6></th>
            <th><h6>email</h6></th>
            <th><h6>password</h6></th>
            <th><h6>Action</h6></th>

          </tr>
          <!-- end table row-->
        </thead>
        <tbody>
          @forelse ($data as $product) 
          <tr>
            <td class="min-width">
              <div class="lead">
                <div class="lead-text">
                  <p>{{$product->name}}</p>
                </div>
              </div>
            </td>
            
            <td class="min-width">
              <p>{{$product->email}}</p>
            </td>
            <td class="min-width">
                <div class="lead">
                  <div class="lead-text">
                    <p>/</p>
                  </div>
                </div>
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
                        <a href="{{url('deleteUser',$product->id)}}" class="text-gray">Remove</a>
                      </li>
                      <li class="dropdown-item">
                        <a href="{{url('update',$product->id)}}" class="text-gray">view</a>
           
                    </ul>
                  </div>
              </div>
            </td>
          </tr>
          @empty
            <tr>
                <td colspan="5" class="text-center">Aucun document</td>
            </tr>
          @endforelse
        </tbody>
      </table>
      <!-- end table -->
    </div>
  </div>    


@endsection