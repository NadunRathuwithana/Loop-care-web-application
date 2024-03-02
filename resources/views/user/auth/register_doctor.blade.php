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
                                    <img src="assets/img/login-reg/reg_doctor.jpg" alt="login form"
                                        class="img-fluid login-img" />
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center text-center justify-content-center">
                                    <div class="card-body p-4 p-lg-5 text-black">
                                        <div class="form-group pt-3 mb-5">
                                            <h2 class="fw-bold">Welcome to Loop Care</h2>
                                            <p class="text-secondary">Doctor Registration</p>
                                        </div>

                                        <form action="{{ url('doctorRegister') }}" method="post"
                                            enctype="multipart/form-data">
                                            {{ csrf_field() }}
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
                                                                    id="fName" name="fName" placeholder="First Name">
                                                            </div>

                                                            <div class="form-group mb-2">
                                                                <input type="text" class="form-control input py-2 px-4"
                                                                    id="lName" name="lName" placeholder="Last Name">
                                                            </div>

                                                            <div class="form-group mb-2">
                                                                <input type="email" class="form-control input py-2 px-4"
                                                                    id="email" name="email"
                                                                    aria-describedby="emailHelp" placeholder="Email">
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

                                                        {{--  District  --}}
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control input py-2 px-4"
                                                                id="district" name="district" placeholder="District">
                                                        </div>

                                                        {{--  Hospital  --}}
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control input py-2 px-4"
                                                                id="workHospital" name="workHospital"
                                                                placeholder="Working Hospital">
                                                        </div>

                                                        {{--  experience  --}}
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control input py-2 px-4"
                                                                id="workExperience" name="workExperience"
                                                                placeholder="Working Experience (ex: 5 Years)">
                                                        </div>


                                                    </div>

                                                    {{--  single tab  --}}
                                                    <div class="tab">
                                                        <p class="text-main">Legal Infomation</p>


                                                        {{--  slmc reg  --}}
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control input py-2 px-4"
                                                                id="docRegNo" name="docRegNo"
                                                                placeholder="Sri Lanka Medical Council (SLMC) Registration Number">
                                                        </div>

                                                        {{--  medical licence  --}}
                                                        <div class="form-group mb-2">
                                                            <div class="file-upload-container">
                                                                <input type="file"
                                                                    class="form-control input file-input" id="file"
                                                                    name="file"
                                                                    onchange="displaySelectedFileName(this)" />
                                                                <label for="medical_licence" class="custom-file-upload">
                                                                    <span class="selected-file-name">Upload Medical
                                                                        Licence</span>
                                                                </label>
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

    <script>
        document
            .querySelector(".custom-file-upload")
            .addEventListener("click", function() {
                document.querySelector(".file-input").click();
            });

        // Function to display selected file name
        function displaySelectedFileName(input) {
            var fileName = input.files[0].name;
            var container = input.closest(".file-upload-container");
            container.querySelector(".selected-file-name").innerHTML = fileName;
        }
    </script>
@endsection
