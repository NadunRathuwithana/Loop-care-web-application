@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card  login-card" style="border-radius: 1rem;">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block">
                                    <img src="{{ url('assets/img/admin/auth/admin_login.jpg') }}" alt="login form" class="img-fluid"
                                        style="border-radius: 1rem 0 0 1rem;" />
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center justify-content-center">
                                    <div class="card-body p-4 p-lg-5 text-black">


                                        <form action="{{ url('/') }}" method="post" enctype="multipart/form-data">

                                            <div class="form-group pt-3 mb-5 text-center">
                                                <img class="img-fluid mb-5" src="{{ url('assets/img/navBlack.png') }}" alt="loopcare" style="width: 100px">
                                                <h2 class="fw-bold">Welcome to Loop Care</h2>
                                                <h2 class="fw-bold">Admin</h2>
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
