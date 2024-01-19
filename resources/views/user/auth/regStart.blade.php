@extends('layouts.master')

@section('content')
<div class="background-div" style="background-image: url('assets/img/login-reg/reg-bg.jpg'); background-size: cover; height: 100%; width: auto;">
    <div class="container-fluid px-5 d-flex align-items-center vh-100">
        <div class="text-start">
            <img class="logo-reg-screen" src="assets/img/navWhite.png" alt="">
            <h1 class="text-white text-start mt-3">Empowering your journey</br>towards wellness.</h1>
            <div class="d-flex mt-3">
                <a href="{{ url('register') }}" class="btn btn-white-outline py-3 w-50 mt-3 me-2">I'm a Patient</a>
                <a href="{{ url('register_doctor') }}" class="btn btn-white-outline py-3 w-50 mt-3 me-2">I'm a Doctor</a>
                <a href="{{ url('register_trainer') }}" class="btn btn-white-outline py-3 w-50 mt-3 me-2">I'm a Trainer</a>
            </div>
        </div>
    </div>
</div>

@endsection
