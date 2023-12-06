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

    <div class="container-fluid px-0 hero-slider">
        <h1 class="text-center mt-5">Video name goes here</h1>
        <div class="d-flex justify-content-center mt-5">
            <div class="video-container">
                <video id="my-video" class="video-js" controls preload="auto"
                    poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" data-setup='' loop>
                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type='video/mp4'>
                </video>
            </div>
        </div>
    </div>
@endsection



