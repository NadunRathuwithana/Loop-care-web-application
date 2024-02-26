@extends('layouts.master')

@section('content')
    @include('layouts.trainerNav')

    <div class="container-fluid px-md-5 hero-slider mt-3">


        <div class="row mt-3">
            <div class="col-2">
                <div class="card card-ui">
                    <img src="https://picsum.photos/seed/picsum/300/200" class="card-img-top " alt="..."
                        style="width:100%; height:100%;">
                </div>
                <div class="d-flex justify-content-between align-items-center px-1 mt-2">
                    <p class="card-title font-weight-bold m-0">Playlist Name</p>
                    <div class="dropdown">
                        <button class="btn p-0 shadow-none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-ellipsis-vertical p-0"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
