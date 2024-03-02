@extends('layouts.master')

<link href="{{ url('assets/css/wizard.css') }}" rel="stylesheet">

@section('content')
    <div class="container-fluid">
        <video autoplay muted loop class="bg-video">
            <source src="{{ url('assets/img/login-reg/bg-video.mp4') }}" type="video/mp4">
            <!-- Add additional source elements for different video formats (webm, ogg) if necessary -->
            Your browser does not support the video tag.
        </video>
        <div class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card  login-card" style="border-radius: 1rem;">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block">
                                    <img src="assets/img/login-reg/login-img.jpeg" alt="login form" class="img-fluid"
                                        style="border-radius: 1rem 0 0 1rem;" />
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center justify-content-center">
                                    <div class="card-body p-4 p-lg-5 text-black">


                                        @if (session()->has('message'))
                                            <div class="col-md-4">
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    {{ session()->get('message') }}
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>
                                        @endif


                                        <div class="form-group pt-4 mb-5 text-center">
                                            <h2 class="fw-bold mb-5">Welcome to Loop Care</h2>
                                        </div>

                                        @if (session()->has('error'))
                                            <div class="alert alert-danger alert-dismissible fade show mb-3 border border-danger"
                                                role="alert">
                                                <small> {{ session()->get('error') }}</small>
                                            </div>
                                        @endif


                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf


                                            <div class="form-group mb-3">
                                                <input type="email" class="form-control input py-2 px-4" id="email"
                                                    name="email" @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" autocomplete="email" autofocus
                                                    placeholder="Email" required>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-3">
                                                <input type="password" class="form-control input py-2 px-4" id="password"
                                                    @error('password') is-invalid @enderror" name="password"
                                                    autocomplete="current-password" placeholder="Password" required>

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>


                                            <div class="mb-4">
                                                <button class="btn btn-main btn-block w-100 py-2 mb-3" type="submit">
                                                    {{ __('Login') }}</button>

                                                @if (Route::has('password.request'))
                                                    <a class="small text-muted" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </form>
                                        <div class="d-flex justify-content-center">
                                            <p class="pt-5 mb-5 pb-lg-2">Don't have an account?
                                                <a href="{{ url('regStart') }}" class="reglink">Register here</a>
                                            </p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
