@extends('layouts.master')

@section('content')
    @include('layouts.userNav')

    {{--  Challenges  --}}
    <div class="slider-swiper-container hero-slider mt-3 mt-md-5">

        {{--  Single slider  --}}
        <div class="container">
            <h4 class="sub-title">Categories</h4>
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
                                    <h2>Pain Relief</h2>
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
                                    <h2>Waight Gain</h2>
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
                                    <h2>Waight Loss</h2>
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
                                    <h2>Stretching</h2>
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
