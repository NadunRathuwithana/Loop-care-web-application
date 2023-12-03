@extends('layouts.master')

@section('content')

@include('layouts.userNav')

    <!-- carousel -->
    <div class="container-fluid px-md-5 hero-slider mt-3">
        <div class="swiper heroSwiper">
            <div class="swiper-wrapper hero-wrapper">
                <div class="swiper-slide swiper-hero-img">
                    <img class="d-block w-100 hero-img" src="assets/img/banners/banner-1.jpg">
                </div>
                <div class="swiper-slide swiper-hero-img">
                    <img class="d-block w-100 hero-img" src="assets/img/banners/banner-1.jpg">
                </div>
                <div class="swiper-slide swiper-hero-img">
                    <img class="d-block w-100 hero-img" src="assets/img/banners/banner-1.jpg">
                </div>
                <div class="swiper-slide swiper-hero-img">
                    <img class="d-block w-100 hero-img" src="assets/img/banners/banner-1.jpg">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    {{--  Challenges  --}}
    <div class="slider-swiper-container mt-2 mt-md-5">

        {{--  Single slider  --}}
        <div class="container">
            <h4 class="sub-title">Challenges</h4>
            <div class="swiper boxCardSwiper pt-0">
                <div class="swiper-wrapper py-0 py-md-2">

                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/challenge/1.jpg" alt="Card image cap">
                                    <div class="gradient-overlay"></div>
                                </div>
                                <div class="text-overlay">
                                    <h2>Morning Energizer</h2>
                                    <small class="text-secondary">6 Workouts</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/challenge/2.jpg" alt="Card image cap">
                                    <div class="gradient-overlay"></div>
                                </div>
                                <div class="text-overlay">
                                    <h2>Lunchtime Power Break</h2>
                                    <small class="text-secondary">10 Workouts</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/challenge/3.jpg" alt="Card image cap">
                                    <div class="gradient-overlay"></div>
                                </div>
                                <div class="text-overlay">
                                    <h2>Stairway to Fitness</h2>
                                    <small class="text-secondary">10 Workouts</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/challenge/4.jpg" alt="Card image cap">
                                    <div class="gradient-overlay"></div>
                                </div>
                                <div class="text-overlay">
                                    <h2>Flexibility Fiesta</h2>
                                    <small class="text-secondary">10 Workouts</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/challenge/5.jpg" alt="Card image cap">
                                    <div class="gradient-overlay"></div>
                                </div>
                                <div class="text-overlay">
                                    <h2>Warrior Workouts</h2>
                                    <small class="text-secondary">10 Workouts</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/challenge/6.jpg" alt="Card image cap">
                                    <div class="gradient-overlay"></div>
                                </div>
                                <div class="text-overlay">
                                    <h2>Water Warrior</h2>
                                    <small class="text-secondary">10 Workouts</small>
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

    {{--  Pain Relief  --}}
    <div class="slider-swiper-container mt-2 mt-md-5">

        {{--  Single slider  --}}
        <div class="container">
            <h4 class="sub-title">Pain Relief</h4>
            <div class="swiper categoryCardSwiper pt-0">
                <div class="swiper-wrapper py-0 py-md-2">

                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/categories/1.jpg" alt="Card image cap">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/categories/2.jpg" alt="Card image cap">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/categories/3.jpg" alt="Card image cap">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/categories/4.jpg" alt="Card image cap">
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

    {{--  Workouts for You  --}}
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

    {{--  trainerCardSwiper  --}}
    <div class="slider-swiper-container mt-2 mt-md-5">

        {{--  Single slider  --}}
        <div class="container">
            <h4 class="sub-title">Trainers</h4>
            <div class="swiper trainerCardSwiper pt-0">
                <div class="swiper-wrapper py-0 py-md-2">

                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/trainers/1.jpg" alt="Card image cap">
                                    <div class="gradient-overlay"></div>
                                </div>
                                <div class="text-overlay mt-2">
                                    <small class="text-secondary">Physiotherapist</small>
                                    <h4>Caroline Girvan</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/trainers/1.jpg" alt="Card image cap">
                                    <div class="gradient-overlay"></div>
                                </div>
                                <div class="text-overlay mt-2">
                                    <small class="text-secondary">Physiotherapist</small>
                                    <h4>Caroline Girvan</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/trainers/1.jpg" alt="Card image cap">
                                    <div class="gradient-overlay"></div>
                                </div>
                                <div class="text-overlay mt-2">
                                    <small class="text-secondary">Physiotherapist</small>
                                    <h4>Caroline Girvan</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/trainers/1.jpg" alt="Card image cap">
                                    <div class="gradient-overlay"></div>
                                </div>
                                <div class="text-overlay mt-2">
                                    <small class="text-secondary">Physiotherapist</small>
                                    <h4>Caroline Girvan</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/trainers/1.jpg" alt="Card image cap">
                                    <div class="gradient-overlay"></div>
                                </div>
                                <div class="text-overlay mt-2">
                                    <small class="text-secondary">Physiotherapist</small>
                                    <h4>Caroline Girvan</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/trainers/1.jpg" alt="Card image cap">
                                    <div class="gradient-overlay"></div>
                                </div>
                                <div class="text-overlay mt-2">
                                    <small class="text-secondary">Physiotherapist</small>
                                    <h4>Caroline Girvan</h4>
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
