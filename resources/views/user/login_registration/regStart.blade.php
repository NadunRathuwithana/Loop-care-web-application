@extends('layouts.master')

@section('content')
    <div class="background-div">
        <div class="container-fluid px-5 d-flex align-items-center vh-100">
            <div class="text-left">
                <img class="logo" src="assets/img/navWhite.png" alt="">
                <h1 class="text-white text-main">Empowering your journey</br>towards wellness.</h1>
                <a href="{{ url('/reg1') }}" class="btn btn-main py-3 w-100 mt-3">Get Started</a>
            </div>
        </div>

    </div>
@endsection
