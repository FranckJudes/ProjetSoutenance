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
        <form action="{{route('ajouter')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="card-style mb-30">
            <h6 class="mb-25">Input Fields</h6>
            <div class="input-style-1 col">
              <label>Titre</label>
              <input type="text" name="titre"placeholder="Titre"/>
              @if($errors->has('titre'))
                   <span class="text-danger">{{ $errors->first('titre') }}</span>
               @endif
            </div>
            <!-- end input -->
            <div class="input-style-1 col">
              <label>Description</label>
              <input type="hidden" name="datePublication"/>
              <input type="text" name="description" placeholder="Description" />
              @if ($errors->has('description'))
                  <span class="text-danger">{{ $errors->first('description') }}</span>
             @endif
            </div>
            <!-- end input -->
            <div class="input-style-1 col">
                  <label>Selectionner L' Image :</label>
                  <input type="file" name="images[]" placeholder="Full Name"  accept="image/*" multiple/>
            </div>
            <!-- end input -->
            <div class="input-style-1 col">
              <button class="main-btn deactive-btn  w-100 text-center square-btn btn-hover" type="submit">Soumettre</button>
            </div>
          </div>
        </form>  

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
                  @forelse ($document as $product) 
                  <tr>
                    <td class="min-width">
                      <div class="lead">
                        <div class="lead-text">
                          <p>{{$product->titre}}</p>
                        </div>
                      </div>
                    </td>
                    <td class="min-width">
                      <p>{{$product->description}}</p>
                    </td>
                    <td class="min-width">
                      <p>{{$product->images->count()}}</p>
                    </td>
                    <td class="min-width">
                      <p>{{$product->datePublication}}</p>
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
                                <a href="{{url('deleteImage',$product->id)}}" class="text-gray">Remove</a>
                              </li>
                              <li class="dropdown-item">
                                <a href="{{url('AffichageDocImage',$product->id)}}" class="text-gray">view</a>
                              </li>
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