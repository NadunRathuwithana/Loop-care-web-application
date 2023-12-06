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
            <h4 class="sub-title">Workouts for You</h4>
            <div class="swiper sliderSwiper pt-0">
                <div class="swiper-wrapper py-0 py-md-2">

                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/workouts/1.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body py-2">
                                    <h4 class="card-text py-0">Flex and Flow</h4>
                                    <small class="card-text text-secondary py-0">20 min</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/workouts/2.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body py-2">
                                    <h4 class="card-text py-0">Total Body Stretch</h4>
                                    <small class="card-text text-secondary py-0">08 min</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/workouts/3.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body py-2">
                                    <h4 class="card-text py-0">Deep Tissue Stretch</h4>
                                    <small class="card-text text-secondary py-0">15 min</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/workouts/4.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body py-2">
                                    <h4 class="card-text py-0">Stretch and Relax</h4>
                                    <small class="card-text text-secondary py-0">16 min</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/workouts/5.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body py-2">
                                    <h4 class="card-text py-0">Stretch for Serenity</h4>
                                    <small class="card-text text-secondary py-0">22 min</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/workouts/6.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body py-2">
                                    <h4 class="card-text py-0">Sunrise Stretch</h4>
                                    <small class="card-text text-secondary py-0">10 min</small>
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

    {{--  season 1 --}}
    <div class="slider-swiper-container mt-2 mt-md-5">
        {{--  Single slider  --}}
        <div class="container">
            <h4 class="sub-title">Workouts for You</h4>
            <div class="swiper sliderSwiper pt-0">
                <div class="swiper-wrapper py-0 py-md-2">

                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/workouts/1.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body py-2">
                                    <h4 class="card-text py-0">Flex and Flow</h4>
                                    <small class="card-text text-secondary py-0">20 min</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/workouts/2.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body py-2">
                                    <h4 class="card-text py-0">Total Body Stretch</h4>
                                    <small class="card-text text-secondary py-0">08 min</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/workouts/3.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body py-2">
                                    <h4 class="card-text py-0">Deep Tissue Stretch</h4>
                                    <small class="card-text text-secondary py-0">15 min</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/workouts/4.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body py-2">
                                    <h4 class="card-text py-0">Stretch and Relax</h4>
                                    <small class="card-text text-secondary py-0">16 min</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/workouts/5.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body py-2">
                                    <h4 class="card-text py-0">Stretch for Serenity</h4>
                                    <small class="card-text text-secondary py-0">22 min</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/workouts/6.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body py-2">
                                    <h4 class="card-text py-0">Sunrise Stretch</h4>
                                    <small class="card-text text-secondary py-0">10 min</small>
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
