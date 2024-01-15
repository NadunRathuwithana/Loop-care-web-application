@extends('layouts.master')

@section('content')
    <div class="container mt-5">

        <div class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block">
                                    <img src="assets/img/login-reg/login-img.jpeg" alt="login form" class="img-fluid"
                                        style="border-radius: 1rem 0 0 1rem;" />
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center text-center justify-content-center">
                                    <div class="card-body p-4 p-lg-5 text-black">
                                        <div class="form-group pt-3 mb-5">
                                            <h3>Sign Up to Loop Care</h3>
                                        </div>

                                        <form action="">
                                            <div class="row d-flex justify-content-center align-items-top"
                                                style="height: 400px;">
                                                <div class="col-12">

                                                    <div class="all-steps d-none" id="all-steps"> <span
                                                            class="step"></span>
                                                        <span class="step"></span> <span class="step"></span> <span
                                                            class="step"></span> <span class="step"></span><span
                                                            class="step"></span> <span class="step"></span>
                                                    </div>

                                                    {{--  single tab  --}}
                                                    <div class="tab">
                                                        <div>
                                                            <p class="text-main">About you</p>
                                                            <div class="form-group mb-2">
                                                                <input type="text" class="form-control input py-2 px-4"
                                                                    id="first_name" name="first_name"
                                                                    placeholder="First Name">
                                                            </div>

                                                            <div class="form-group mb-2">
                                                                <input type="text" class="form-control input py-2 px-4"
                                                                    id="last_name" name="last_name" placeholder="Last Name">
                                                            </div>

                                                            <div class="form-group mb-2">
                                                                <input type="email" class="form-control input py-2 px-4"
                                                                    id="email" name="email"
                                                                    aria-describedby="emailHelp" placeholder="Email">
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
                                                                        name="gender" value="male" checked>
                                                                    <span class="checkbox-tile">
                                                                        <span class="checkbox-label">Male</span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="checkbox-wrapper col-6 p-0 ps-1">
                                                                <label class="checkbox-wrapper">
                                                                    <input class="checkbox-input radio-input" type="radio"
                                                                        name="gender" value="female">
                                                                    <span class="checkbox-tile">
                                                                        <span class="checkbox-label">Female</span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        {{--  height  --}}
                                                        <div class="input-group mb-2 m-0 p-0 selectWizard">
                                                            <span class="input-group-text">Height</span>
                                                            <select class="form-select select-label text-secondary"
                                                                aria-label="Default select example">
                                                                <option value="">4 feet</option>
                                                                <option value="">4.1 feet</option>
                                                                <option value="">4.2 feet</option>
                                                                <option value="">4.3 feet</option>
                                                                <option value="">4.4 feet</option>
                                                                <option value="">4.5 feet</option>
                                                                <option value="">4.6 feet</option>
                                                                <option value="">4.7 feet</option>
                                                                <option value="">4.8 feet</option>
                                                                <option value="">4.9 feet</option>

                                                                <option selected>5 feet</option>
                                                                <option value="">5.1 feet</option>
                                                                <option value="">5.2 feet</option>
                                                                <option value="">5.3 feet</option>
                                                                <option value="">5.4 feet</option>
                                                                <option value="">5.5 feet</option>
                                                                <option value="">5.6 feet</option>
                                                                <option value="">5.7 feet</option>
                                                                <option value="">5.8 feet</option>
                                                                <option value="">5.9 feet</option>

                                                                <option value="">6 feet</option>
                                                                <option value="">6.1 feet</option>
                                                                <option value="">6.2 feet</option>
                                                                <option value="">6.3 feet</option>
                                                                <option value="">6.4 feet</option>
                                                                <option value="">6.5 feet</option>
                                                            </select>
                                                        </div>

                                                        {{--  weight  --}}
                                                        <div class="input-group mb-2 m-0 p-0 selectWizard">
                                                            <span class="input-group-text">Weight</span>
                                                            <select class="form-select select-label text-secondary"
                                                                aria-label="Default select example">

                                                                <option>30-40 kg</option>
                                                                <option>41-50 kg</option>
                                                                <option selected>51-60 kg</option>
                                                                <option>61-70 kg</option>
                                                                <option>71-80 kg</option>
                                                                <option>81-90 kg</option>
                                                                <option>91-100 kg</option>
                                                                <option>101-110 kg</option>
                                                            </select>
                                                        </div>


                                                        {{--  birthday  --}}
                                                        <div class="input-group mb-2 m-0 p-0 selectWizard">
                                                            <div class="d-flex justify-content-between w-100">
                                                                <span class="input-group-text">Birthday</span>
                                                                <div class="form-group">
                                                                    <input type="date"
                                                                        class="form-control input py-2 px-4 border-0 text-secondary"
                                                                        id="bd" name="bd" placeholder=""
                                                                        value="1990-01-01">
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>

                                                    {{--  single tab  --}}
                                                    <div class="tab">
                                                        <p>Do you have any pain?</p>
                                                        <div class="checkbox-wrapper p-0 pe-1 mb-2">
                                                            <label class="checkbox-wrapper">
                                                                <input class="checkbox-input" type="checkbox">
                                                                <span class="checkbox-tile">
                                                                    <span class="checkbox-label">Back Pain</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="checkbox-wrapper p-0 pe-1 mb-2">
                                                            <label class="checkbox-wrapper">
                                                                <input class="checkbox-input" type="checkbox">
                                                                <span class="checkbox-tile">
                                                                    <span class="checkbox-label">Neck Pain</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="checkbox-wrapper p-0 pe-1 mb-2">
                                                            <label class="checkbox-wrapper">
                                                                <input class="checkbox-input" type="checkbox">
                                                                <span class="checkbox-tile">
                                                                    <span class="checkbox-label">Knee Pain</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="checkbox-wrapper p-0 pe-1 mb-2">
                                                            <label class="checkbox-wrapper">
                                                                <input class="checkbox-input" type="checkbox">
                                                                <span class="checkbox-tile">
                                                                    <span class="checkbox-label">Elbow Pain</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="checkbox-wrapper p-0 pe-1 mb-2">
                                                            <label class="checkbox-wrapper">
                                                                <input class="checkbox-input" type="checkbox">
                                                                <span class="checkbox-tile">
                                                                    <span class="checkbox-label">No I haven't pains</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div style="overflow:auto;" id="nextprevious"
                                                    class="justify-content-between w-100 mt-auto">

                                                    <div class="d-flex justify-content-between">
                                                        <button type="button" class="btn btn-main" id="prevBtn"
                                                            onclick="nextPrev(-1)" style="width:160px;">Previous</button>
                                                        <button type="button" class="btn btn-main p-2" id="nextBtn"
                                                            onclick="nextPrev(1)" style="width:160px;>Next</button>
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
