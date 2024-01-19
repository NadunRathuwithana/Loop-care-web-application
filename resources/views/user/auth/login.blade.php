@extends('layouts.master')

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

                                        @if (session()->has('error'))
                                            <div class="col-md-4">
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    {{ session()->get('error') }}
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>hjj
                                        @endif




                                        <form action="{{ url('signIn') }}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                            <div class="form-group pt-3 mb-5 text-center">
                                                <h2 class="fw-bold">Welcome to Loop Care</h2>
                                            </div>

                                            <div class="form-group pt-5">
                                                <input type="email" class="form-control input py-2 px-4" id="email"
                                                    name="email" aria-describedby="emailHelp" placeholder="Email" required>
                                            </div>

                                            <div class="form-group pt-3">
                                                <input type="password" class="form-control input py-2 px-4" id="password"
                                                    name="password" placeholder="Password" required>
                                            </div>

                                            <div class="pt-3 mb-4">
                                                <button class="btn btn-main btn-block w-100 py-2" type="submit">
                                                    Login</button>
                                            </div>

                                            <a class="small text-muted" href="#!">Forgot password?</a>
                                            <p class="pt-5 mb-5 pb-lg-2">Don't have an account?
                                                <a href="{{ url('regStart') }}" class="reglink">Register here</a>
                                            </p>
                                        </form>

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
