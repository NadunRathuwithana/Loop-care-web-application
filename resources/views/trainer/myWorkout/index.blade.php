@extends('layouts.master')

@section('content')
    @include('layouts.trainerNav')
    @include('trainer.myWorkout.patials.create')

    {{--  Add workout  --}}
    <div class="container px-md-5 hero-slider mt-3">
        <div class="d-flex gap-2 justify-content-end ">
            <button type="button" class="btn btn-main-sq btn-ui px-4" data-bs-target="#newWorkout" data-bs-toggle="modal"
                data-bs-dismiss="modal">
                <i class="fa-solid fa-plus me-2"></i> Create
                Workout</button>
        </div>

        {{--  season 1 --}}
        <div class="slider-swiper-container  mt-5">
            {{--  Single slider  --}}
            <div class="container">
                <h4 class="sub-title">Playlist Name</h4>
                <div class="swiper sliderSwiper pt-0">
                    <div class="swiper-wrapper py-0 py-md-2">

                        <div class="swiper-slide">
                            <a href="{{ url('singleVideo') }}">
                                <div class="card videoCard">
                                    <div class="image-container">
                                        <img class="card-img-top" src="{{ url('assets/img/workouts/1.jpg') }}"
                                            alt="Card image cap">
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
                                        <img class="card-img-top" src="{{ url('assets/img/workouts/1.jpg') }}"
                                            alt="Card image cap">
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
                                        <img class="card-img-top" src="{{ url('assets/img/workouts/1.jpg') }}"
                                            alt="Card image cap">
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
                                        <img class="card-img-top" src="{{ url('assets/img/workouts/1.jpg') }}"
                                            alt="Card image cap">
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
                                        <img class="card-img-top" src="{{ url('assets/img/workouts/1.jpg') }}"
                                            alt="Card image cap">
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
    </div>
@endsection
