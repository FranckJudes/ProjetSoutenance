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
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row mt-4">
                @foreach ($images as $image)
                    <div class="card text-white bg-secondary m-3" style="max-width:20em;">
                        <div class="">
                            <img src="/Documents_images/{{$image->image}}" class="card-img-top">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection