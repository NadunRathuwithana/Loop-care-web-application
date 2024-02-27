@extends('layouts.master')

@section('content')
    @include('layouts.trainerNav')


    <div class=" mt-3 hero-slider">

    </div>

    {{--  Pain Relief  --}}
    <div class="slider-swiper-container mt-2 mt-md-5">

        {{--  Single slider  --}}
        <div class="container">
            <h4 class="sub-title">Upcoming Appointments</h4>
            <div class="swiper appointmentCardSwiper pt-0">
                <div class="swiper-wrapper py-0 py-md-2">

                    <div class="swiper-slide">
                        <a href="" class="text-decoration-none">
                            <div class="card rounded-xl p-2">
                                <div class="d-flex gap-3 align-items-center">
                                    <img class="rounded" src="https://mighty.tools/mockmind-api/content/human/78.jpg"
                                        alt="" style="width: 150px; height: 150px; object-fit:cover">
                                    <div>
                                        <h4 class="text-dark fw-bold">Tharindu Silva</h4>
                                        <p class="text-muted mb-5"><span>28 years old</span> | <span>Male</span></p>
                                        <p class="m-0"><span class="h4 text-dark fw-bold">6.00PM</span> <span
                                                class="text-muted">5
                                                December</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="text-decoration-none">
                            <div class="card rounded-xl p-2">
                                <div class="d-flex gap-3 align-items-center">
                                    <img class="rounded" src="https://mighty.tools/mockmind-api/content/human/76.jpg"
                                        alt="" style="width: 150px; height: 150px; object-fit:cover">
                                    <div>
                                        <h4 class="text-dark fw-bold">Tharindu Silva</h4>
                                        <p class="text-muted mb-5"><span>28 years old</span> | <span>Male</span></p>
                                        <p class="m-0"><span class="h4 text-dark fw-bold">6.00PM</span> <span
                                                class="text-muted">5
                                                December</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="text-decoration-none">
                            <div class="card rounded-xl p-2">
                                <div class="d-flex gap-3 align-items-center">
                                    <img class="rounded" src="https://mighty.tools/mockmind-api/content/human/62.jpg"
                                        alt="" style="width: 150px; height: 150px; object-fit:cover">
                                    <div>
                                        <h4 class="text-dark fw-bold">Tharindu Silva</h4>
                                        <p class="text-muted mb-5"><span>28 years old</span> | <span>Male</span></p>
                                        <p class="m-0"><span class="h4 text-dark fw-bold">6.00PM</span> <span
                                                class="text-muted">5
                                                December</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="text-decoration-none">
                            <div class="card rounded-xl p-2">
                                <div class="d-flex gap-3 align-items-center">
                                    <img class="rounded" src="https://mighty.tools/mockmind-api/content/human/67.jpg"
                                        alt="" style="width: 150px; height: 150px; object-fit:cover">
                                    <div>
                                        <h4 class="text-dark fw-bold">Tharindu Silva</h4>
                                        <p class="text-muted mb-5"><span>28 years old</span> | <span>Male</span></p>
                                        <p class="m-0"><span class="h4 text-dark fw-bold">6.00PM</span> <span
                                                class="text-muted">5
                                                December</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
@endsection
