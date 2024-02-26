@extends('layouts.master')

@section('styles')
    <style>
        body {
            background-image: url('assets/img/video-bg.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
@endsection

@section('content')
    @include('layouts.userNav')

    <div class="container-fluid px-0" style="margin-top: 4rem!important;">
        <div class="d-flex justify-content-center">
            <div class="video-container d-flex justify-content-center">
                <video id="my-video" class="video-js" controls preload="auto"
                    poster="https://img.youtube.com/vi/Osd4DLpMNp4/maxresdefault.jpg" data-setup='' loop>
                    <source src="{{ url('assets/img/workouts/video/sample.mp4') }}" type='video/mp4'>
                </video>
            </div>

        </div>
    </div>
    <div class="container px-5">
        <div class="mt-3">
            <h2 class="text-main fw-bold">NECK PAIN GONE! Daily Stretches For Neck Tightness And Pain</h2>
            <h5 class="text-muted">Playlist Name</h5>
            <p class="text-muted">Category/ Sub Category</p>
        </div>
        <div class="mt-3">
            {{--  ages  --}}
            <h5 class="text-main">Effective Ages</h5>
            <div class="d-flex gap-1">
                <p class="text-muted border rounded-xl px-3 py-1">10-20</p>
                <p class="text-muted border rounded-xl px-3 py-1">20-30</p>
                <p class="text-muted border rounded-xl px-3 py-1">30-40</p>
                <p class="text-muted border rounded-xl px-3 py-1">40-50</p>
            </div>
        </div>

        <div class="mt-2">
            {{--  restriced  --}}
            <h5 class="text-main">Restricted Diseases</h5>
            <div class="d-flex gap-1">
                <p class="text-muted border rounded-xl px-3 py-1">Cholesterol</p>
                <p class="text-muted border rounded-xl px-3 py-1">Low sugar</p>
                <p class="text-muted border rounded-xl px-3 py-1">High Sugar</p>
                <p class="text-muted border rounded-xl px-3 py-1">Low pressure</p>
            </div>
        </div>
    </div>
    <div class="container px-5">
        {{--  Pain Relief  --}}
        <div class="slider-swiper-container mt-3">

            <h5 class="sub-title">Related Workouts</h5>
            <div class="swiper relatedVideoCardSwiper pt-0">
                <div class="swiper-wrapper py-0 py-md-2">
                    <div class="swiper-slide">
                        <a href="{{ url('singleVideo') }}" class="text-decoration-none">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/categories/1.jpg" alt="Card image cap">
                                </div>
                            </div>
                            <div class="text-start">
                                <p class="text-main lh-1 mt-2 mb-0">Video Name</p>
                                <small class="text-muted lh-1 m-0">Playlist Name</small>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('singleVideo') }}" class="text-decoration-none">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/categories/1.jpg" alt="Card image cap">
                                </div>
                            </div>
                            <div class="text-start">
                                <p class="text-main lh-1 mt-2 mb-0">Video Name</p>
                                <small class="text-muted lh-1 m-0">Playlist Name</small>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('singleVideo') }}" class="text-decoration-none">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/categories/1.jpg" alt="Card image cap">
                                </div>
                            </div>
                            <div class="text-start">
                                <p class="text-main lh-1 mt-2 mb-0">Video Name</p>
                                <small class="text-muted lh-1 m-0">Playlist Name</small>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('singleVideo') }}" class="text-decoration-none">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/categories/1.jpg" alt="Card image cap">
                                </div>
                            </div>
                            <div class="text-start">
                                <p class="text-main lh-1 mt-2 mb-0">Video Name</p>
                                <small class="text-muted lh-1 m-0">Playlist Name</small>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('singleVideo') }}" class="text-decoration-none">
                            <div class="card">
                                <div class="image-container">
                                    <img class="card-img-top" src="assets/img/categories/1.jpg" alt="Card image cap">
                                </div>
                            </div>
                            <div class="text-start">
                                <p class="text-main lh-1 mt-2 mb-0">Video Name</p>
                                <small class="text-muted lh-1 m-0">Playlist Name</small>
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
