@extends('layouts.master')

@section('content')
    @include('layouts.userNav')

    {{--  banner image  --}}
    <div class="container-fluid px-0 hero-slider">
        <div class="workout-img">
            <img class="d-block w-100 hero-img" src="assets/img/workouts/1.jpg">
            <div class="workout-name">
                <h1 class="fw-bold">Flex and Flow</h1>
            </div>
        </div>
    </div>


    {{--  season 1 --}}
    <div class="slider-swiper-container mt-2 mt-md-5">
        {{--  Single slider  --}}
        <div class="container">
            <h4 class="sub-title">Season 01</h4>
            <div class="swiper sliderSwiper pt-0">
                <div class="swiper-wrapper py-0 py-md-2">

                    <div class="swiper-slide">
                        <a href="{{ url('singleVideo') }}">
                            <div class="card videoCard">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/workouts/1.jpg" alt="Card image cap">
                                </div>
                            </div>
                            <div class=" py-2 ">
                                <h4 class="text-dark py-0 my-0">Flex and Flow</h4>
                                <small class=" text-secondary py-0">20 min</small>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('singleVideo') }}">
                            <div class="card videoCard">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/workouts/1.jpg" alt="Card image cap">
                                </div>
                            </div>
                            <div class=" py-2 ">
                                <h4 class="text-dark py-0 my-0">Flex and Flow</h4>
                                <small class=" text-secondary py-0">20 min</small>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('singleVideo') }}">
                            <div class="card videoCard">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/workouts/1.jpg" alt="Card image cap">
                                </div>
                            </div>
                            <div class=" py-2 ">
                                <h4 class="text-dark py-0 my-0">Flex and Flow</h4>
                                <small class=" text-secondary py-0">20 min</small>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('singleVideo') }}">
                            <div class="card videoCard">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/workouts/1.jpg" alt="Card image cap">
                                </div>
                            </div>
                            <div class=" py-2 ">
                                <h4 class="text-dark py-0 my-0">Flex and Flow</h4>
                                <small class=" text-secondary py-0">20 min</small>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('singleVideo') }}">
                            <div class="card videoCard">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/workouts/1.jpg" alt="Card image cap">
                                </div>
                            </div>
                            <div class=" py-2 ">
                                <h4 class="text-dark py-0 my-0">Flex and Flow</h4>
                                <small class=" text-secondary py-0">20 min</small>
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
