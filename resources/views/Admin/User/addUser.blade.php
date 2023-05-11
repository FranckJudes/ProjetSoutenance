@extends('Admin.main-layout')
    @section('title')
    <h2> Ajout des Utilisateur</h2>
    @endsection
    @section('GrandTitre')
        Ajout d'utilisateur
    @endsection
    @section('SousTitre')
        Utilisateur
    @endsection
@section('content')
<div class="row container">
    <div class="col-12">
      <!-- input style start -->
      <form action="{{route('addUser')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-style mb-30">
          <h6 class="mb-25">Entrez les donnees</h6>
          <div class="input-style-1 col">
            <label>Name</label>
            <input type="text" name="name"placeholder="Titre"/>
            @if($errors->has('name'))
                 <span class="text-danger">{{ $errors->first('name') }}</span>
             @endif
          </div>
          <!-- end input -->
          <div class="input-style-1 col">
            <label>email</label>
            <input type="text" name="email" placeholder="example@gmail.com" />
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
           @endif
          </div>
          <!-- end input -->
          <div class="input-style-1 col">
            <label>password</label>
            <input type="password" name="password" placeholder="password" />
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
           @endif
          </div>
          <div class="input-style-1 col">
            <label>confirmer le Mot de Passe</label>
            <input type="password" name="confirm_password" placeholder="password" />
            @if ($errors->has('confirm_password'))
                <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
           @endif
          </div>
          <!-- end input -->
          <div class="input-style-1 col">
            <button class="main-btn deactive-btn  w-100 text-center square-btn btn-hover" type="submit">Soumettre</button>
          </div>
        </div>
      </form> 
    </div>
</div>

@endsection