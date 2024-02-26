@extends('layouts.master')

@section('content')
    @include('layouts.userNav')

    <div class="container hero-slider mt-3">

        <div class="row">
            <div class="col-lg-4">
                <div class="card rounded-xl shadow mb-4 " style="background-color: #93e2bb;">
                    <div class="card-body text-center mt-3">
                        <img src="https://mighty.tools/mockmind-api/content/human/57.jpg" alt="avatar"
                            class="rounded-circle img-fluid border border-3 border-dark" style="width: 150px;">
                        <h5 class="my-3 text-main">Nadun Rathuwithana</h5>
                        <p class="mb-1">30 July 1998 (26 Years)</p>
                        <p class="mb-4">Male</p>
                        <div class="d-flex justify-content-center mb-2">
                            <div class="d-flex justify-content-between w-50">
                                <div>
                                    <p class="m-0">Height</p>
                                    <p class="fw-bold">5.7 ft</p>
                                </div>
                                <div>
                                    <p class="m-0">Weight</p>
                                    <p class="fw-bold">51-60 kg</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--  single question  --}}
                <div class="card rounded-xl shadow p-3 mb-4">
                    <div class="">
                        <div class="d-flex justify-content-between">
                            <p class="fw-bold">Do you have any pain?</p>
                        </div>
                        <div class="d-flex gap-1">
                            <p class="m-0 px-3 border rounded-pill">Back Pain</p>
                            <p class="m-0 px-3 border rounded-pill">Neck Pain</p>
                            <p class="m-0 px-3 border rounded-pill">Knee Pain</p>
                        </div>
                    </div>
                </div>
                {{--  single question  --}}
                <div class="card rounded-xl shadow p-3 mb-4">
                    <div class="">
                        <div class="d-flex justify-content-between">
                            <p class="fw-bold">Do you have any pain?</p>
                        </div>
                        <div class="d-flex gap-1">
                            <p class="m-0 px-3 border rounded-pill">Back Pain</p>
                            <p class="m-0 px-3 border rounded-pill">Neck Pain</p>
                            <p class="m-0 px-3 border rounded-pill">Knee Pain</p>
                        </div>
                    </div>
                </div>
            </div>

            {{--  edit info  --}}
            <div class="col-lg-8">
                <div class="card rounded-xl shadow mb-4">
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST" onsubmit="return false">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input class="form-control" type="text" id="firstName" name="firstName"
                                        value="John" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input class="form-control" type="text" name="lastName" id="lastName"
                                        value="Doe" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input class="form-control" type="text" id="email" name="email"
                                        value="02/26/2024" placeholder="john.doe@example.com" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">Birthday</label>
                                    <input class="form-control" type="date" id="email" name="email"
                                        value="1998-07-30" placeholder="1998-07-30" />
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-default-company">Weight</label>
                                    <select class="form-select" aria-label="Default select example">
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
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-default-company">Height</label>
                                    <select class="form-select" aria-label="Default select example">
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
                                <div class="col-md-12 mb-3">
                                    <label for="formFile" class="form-label">Profile Image</label>
                                    <input class="form-control" type="file" id="formFile">
                                  </div>


                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-main-sq me-2">Save changes</button>
                                <button type="reset" class="btn btn-gray-sq">Cancel</button>
                            </div>


                        </form>
                    </div>
                </div>
                <div class="card rounded-xl shadow mt-3">
                    <div class="card-body">
                        <form id="password_reset" onsubmit="return false">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="recent_password" class="form-label">Recent Password</label>
                                    <input class="form-control" type="password" id="recent_password"
                                        name="recent_password" value="12345678" autofocus />
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="new_password" class="form-label">New Password</label>
                                    <input class="form-control" type="password" placeholder="Enter new password"
                                        id="new_password" name="new_password" minlength="6" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="confirm_password" class="form-label">Confirm Password</label>
                                    <input class="form-control" type="password" placeholder="Confirm password"
                                        id="confirm_password" name="confirm_password" minlength="6" />
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-main-sq me-2">Save changes</button>
                                <button type="reset" class="btn btn-gray-sq">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
