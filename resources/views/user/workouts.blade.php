@extends('layouts.master')

@section('content')
    @include('layouts.userNav')

    <div class="container-fluid px-md-5 hero-slider mt-3">
        <div class="swiper heroSwiper">
            <div class="swiper-wrapper hero-wrapper">
                <div class="swiper-slide swiper-hero-img">
                    <img class="d-block w-100 hero-img" src="assets/img/banners/banner-1.jpg">
                </div>
                <div class="swiper-slide swiper-hero-img">
                    <img class="d-block w-100 hero-img" src="assets/img/banners/banner-2.jpg">
                </div>
                <div class="swiper-slide swiper-hero-img">
                    <img class="d-block w-100 hero-img" src="assets/img/banners/banner-3.jpg">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    {{--  season 1 --}}
    <div class="slider-swiper-container mt-2 mt-md-5">
        {{--  Single slider  --}}
        <div class="container">
            <h4 class="sub-title">Season 01</h4>
            <div class="swiper sliderSwiper workoutCard pt-0">
                <div class="swiper-wrapper py-0 py-md-2">

                    <div class="swiper-slide">
                        <a href="{{ url('single-workout') }}">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/workouts/1.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body py-2">
                                    <h4 class="card-text py-0">Flex and Flow</h4>
                                    <small class="card-text text-secondary py-0">10 Videos</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('single-workout') }}">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/workouts/2.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body py-2">
                                    <h4 class="card-text py-0">Total Body Stretch</h4>
                                    <small class="card-text text-secondary py-0">10 Videos</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('single-workout') }}">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/workouts/3.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body py-2">
                                    <h4 class="card-text py-0">Deep Tissue Stretch</h4>
                                    <small class="card-text text-secondary py-0">10 Videos</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('single-workout') }}">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/workouts/4.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body py-2">
                                    <h4 class="card-text py-0">Stretch and Relax</h4>
                                    <small class="card-text text-secondary py-0">10 Videos</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('single-workout') }}">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/workouts/5.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body py-2">
                                    <h4 class="card-text py-0">Stretch for Serenity</h4>
                                    <small class="card-text text-secondary py-0">10 Videos</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('single-workout') }}">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/workouts/6.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body py-2">
                                    <h4 class="card-text py-0">Sunrise Stretch</h4>
                                    <small class="card-text text-secondary py-0">10 Videos</small>
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
