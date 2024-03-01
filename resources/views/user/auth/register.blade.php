@extends('layouts.master')

<link href="{{ url('assets/css/wizard.css') }}" rel="stylesheet">

@section('content')
    <div class="container-fluid login-screen">
        <video autoplay muted loop class="bg-video">
            <source src="{{ url('assets/img/login-reg/bg-video.mp4') }}" type="video/mp4">
            <!-- Add additional source elements for different video formats (webm, ogg) if necessary -->
            Your browser does not support the video tag.
        </video>

        <div class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card login-card" style="border-radius: 1rem;">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block">
                                    <img src="assets/img/login-reg/reg_patient.jpg" alt="login form"
                                        class="img-fluid login-img" />
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center text-center justify-content-center">
                                    <div class="card-body p-4 p-lg-5 text-black">
                                        <div class="form-group pt-3 mb-5">
                                            <h2 class="fw-bold">Welcome to Loop Care</h2>
                                            <p class="text-secondary">Patient Registration</p>
                                        </div>

                                        <form action="{{ url('registerQuestion') }}" method="post"
                                            enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="row d-flex justify-content-center align-items-top"
                                                style="height: 400px;">
                                                <div class="col-12">

                                                    <div class="all-steps d-none" id="all-steps">
                                                        <span class="step"></span>
                                                        <span class="step"></span>
                                                        <span class="step"></span>
                                                        <span class="step"></span>
                                                        <span class="step"></span>
                                                        <span class="step"></span>
                                                        <span class="step"></span>
                                                    </div>

                                                    {{--  single tab  --}}
                                                    <div class="tab">
                                                        <div>
                                                            <p class="text-main">About you</p>
                                                            <div class="form-group mb-2">
                                                                <input type="text" class="form-control input py-2 px-4"
                                                                    id="fName" name="fName" placeholder="First Name">
                                                            </div>

                                                            <div class="form-group mb-2">
                                                                <input type="text" class="form-control input py-2 px-4"
                                                                    id="lName" name="lName" placeholder="Last Name">
                                                            </div>

                                                            <div class="form-group mb-2">
                                                                <input type="email" class="form-control input py-2 px-4"
                                                                    id="email" name="email" placeholder="Email">
                                                            </div>

                                                            <div class="form-group mb-2">
                                                                <input type="password" class="form-control input py-2 px-4"
                                                                    id="password" name="password" placeholder="Password">
                                                            </div>

                                                            <div class="form-group mb-2">
                                                                <input type="password" class="form-control input py-2 px-4"
                                                                    id="confirm-password" name="confirm-password"
                                                                    placeholder="Confirm password">
                                                            </div>

                                                        </div>
                                                    </div>

                                                    {{--  single tab  --}}
                                                    <div class="tab">
                                                        <p class="text-main">About you</p>

                                                        {{--  male female  --}}
                                                        <div class="row no-gutters m-0 mb-2">
                                                            <div class="checkbox-wrapper col-6 p-0 pe-1">
                                                                <label class="checkbox-wrapper">
                                                                    <input class="checkbox-input radio-input" type="radio"
                                                                        name="sex" value="male" checked>
                                                                    <span class="checkbox-tile">
                                                                        <span class="checkbox-label">Male</span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="checkbox-wrapper col-6 p-0 ps-1">
                                                                <label class="checkbox-wrapper">
                                                                    <input class="checkbox-input radio-input" type="radio"
                                                                        name="sex" value="female">
                                                                    <span class="checkbox-tile">
                                                                        <span class="checkbox-label">Female</span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        {{--  height  --}}
                                                        <div class="input-group mb-2 m-0 p-0 selectWizard">
                                                            <span class="input-group-text border-0">Height</span>
                                                            <select
                                                                class="form-select select-label text-secondary bg-transparent"
                                                                aria-label="Default select example" id="height"
                                                                name="height">
                                                                <option value="4 feet">4 feet</option>
                                                                <option value="4.1 feet">4.1 feet</option>
                                                                <option value="4.2 feet">4.2 feet</option>
                                                                <option value="4.3 feet">4.3 feet</option>
                                                                <option value="4.4 feet">4.4 feet</option>
                                                                <option value="4.5 feet">4.5 feet</option>
                                                                <option value="4.6 feet">4.6 feet</option>
                                                                <option value="4.7 feet">4.7 feet</option>
                                                                <option value="4.8 feet">4.8 feet</option>
                                                                <option value="4.9 feet">4.9 feet</option>

                                                                <option selected value="5 feet">5 feet</option>
                                                                <option value="5.1 feet">5.1 feet</option>
                                                                <option value="5.2 feet">5.2 feet</option>
                                                                <option value="5.3 feet">5.3 feet</option>
                                                                <option value="5.4 feet">5.4 feet</option>
                                                                <option value="5.5 feet">5.5 feet</option>
                                                                <option value="5.6 feet">5.6 feet</option>
                                                                <option value="5.7 feet">5.7 feet</option>
                                                                <option value="5.8 feet">5.8 feet</option>
                                                                <option value="5.9 feet">5.9 feet</option>

                                                                <option value=">6 feet">6 feet</option>
                                                                <option value="6.1 feet">6.1 feet</option>
                                                                <option value="6.2 feet">6.2 feet</option>
                                                                <option value="6.3 feet">6.3 feet</option>
                                                                <option value="6.4 feet">6.4 feet</option>
                                                                <option value="6.5 feet">6.5 feet</option>
                                                            </select>
                                                        </div>

                                                        {{--  weight  --}}
                                                        <div class="input-group mb-2 m-0 p-0 selectWizard">
                                                            <span class="input-group-text border-0">Weight</span>
                                                            <select
                                                                class="form-select select-label text-secondary bg-transparent"
                                                                aria-label="Default select example" id="weight"
                                                                name="weight">

                                                                <option value="30-40 kg">30-40 kg</option>
                                                                <option value="41-50 kg">41-50 kg</option>
                                                                <option selected value="51-60 kg">51-60 kg</option>
                                                                <option value="61-70 kg">61-70 kg</option>
                                                                <option value="71-80 kg">71-80 kg</option>
                                                                <option value="81-90 kg">81-90 kg</option>
                                                                <option value="91-100 kg">91-100 kg</option>
                                                                <option value="101-110 kg">101-110 kg</option>
                                                            </select>
                                                        </div>


                                                        {{--  birthday  --}}
                                                        <div class="input-group mb-2 m-0 p-0 selectWizard">
                                                            <div class="d-flex justify-content-between w-100">
                                                                <span class="input-group-text border-0">Birthday</span>
                                                                <div class="form-group">
                                                                    <input type="date"
                                                                        class="form-control input py-2 px-4 border-0 text-secondary"
                                                                        id="dob" name="dob" placeholder=""
                                                                        value="1990-01-01">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="overflow:auto;" id="nextprevious"
                                                    class="justify-content-between w-100 mt-auto">

                                                    <div class="d-flex justify-content-between">
                                                        <button type="button" class="btn btn-main" id="prevBtn"
                                                            onclick="nextPrev(-1)" style="width:160px;">Previous</button>

                                                        <button type="button" class="btn btn-main p-2" id="nextBtn"
                                                            onclick="nextPrev(1)" style="width:160px;">Next</button>

                                                        <button type="submit" class="btn btn-main p-2" id="submitBtn"
                                                            style="width:160px;">Submit</button>
                                                    </div>
                                                </div>
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
