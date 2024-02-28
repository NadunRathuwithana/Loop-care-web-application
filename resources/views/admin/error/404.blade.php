@extends('layouts.adminMaster')
@section('content')
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100 w-100 p-0"
        style="background-image: url('assets/img/maintenance.jpg'); background-size: cover;
    background-position: center;">
        <div class="misc-wrapper text-center">
            <h1 class="mb-2 mx-2">404</h1>
            <h3 class="mb-2 mx-2">Page not found</h3>
            <p class="mb-4 mx-2">Sorry, we couldn't find the page you are looking for</p>
            <a href="{{ url('/') }}" class="btn btn-primary">Back to home</a>
        </div>
    </div>
@endsection
