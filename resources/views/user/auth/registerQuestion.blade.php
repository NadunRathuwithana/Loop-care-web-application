@extends('layouts.master')

<link href="{{ url('assets/css/wizard.css') }}" rel="stylesheet">

@section('content')
    <div class="container-fluid login-screen">
        <video autoplay muted loop class="bg-video">
            <source src="{{ url('assets/img/login-reg/bg-video.mp4') }}" type="video/mp4">
            <!-- Add additional source elements for different video formats (webm, ogg) if necessary -->
            Your browser does not support the video tag.
        </video>

        <div class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="loader">
                            <div class="d-flex justify-content-center align-items-center mb-3">

                                <div class="spinner">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <p class="text-white m-0 blink-text">Creating questions for you...</p>
                            </div>
                        </div>

                        <div class="card login-card  questionForm" style="border-radius: 1rem; display: none;">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block">
                                    <img src="assets/img/login-reg/reg_patient.jpg" alt="login form"
                                        class="img-fluid login-img" />
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center text-center justify-content-center">
                                    <div class="card-body p-4 p-lg-5 text-black">
                                        <div class="form-group pt-3 mb-5">
                                            <h2 class="fw-bold">Welcome to Loop Care</h2>
                                            <p class="text-secondary">Collecting Information</p>
                                        </div>

                                        {{-- <form action="{{ url('') }}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }} --}}
                                        <div class="row d-flex justify-content-center align-items-top"
                                            style="height: 400px;">
                                            <div class="col-12">

                                                <div class="all-steps d-none" id="all-steps">
                                                    @if (!empty($questions))
                                                        @foreach ($questions as $data)
                                                            <span class="step"></span>
                                                        @endforeach
                                                    @endif
                                                </div>


                                                @if (!empty($questions))
                                                    @foreach ($questions as $data)
                                                        {{--  single tab  --}}
                                                        <div class="tab">
                                                            <p>{{ $data->questionName }}</p>

                                                            @if (!empty($answers))
                                                                @foreach ($answers as $item)
                                                                    @if ($data->id == $item->quetion_id)
                                                                        <div class="checkbox-wrapper p-0 pe-1 mb-2 question"
                                                                            id="{{ $data->questionName }}">
                                                                            <label class="checkbox-wrapper">
                                                                                <input class="checkbox-input answer"
                                                                                    type="checkbox"
                                                                                    id="{{ $item->answer }}">
                                                                                <span class="checkbox-tile">
                                                                                    <span
                                                                                        class="checkbox-label">{{ $item->answer }}</span>
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                            @endif

                                                        </div>
                                                    @endforeach
                                                @endif





                                            </div>
                                            <div style="overflow:auto;" id="nextprevious"
                                                class="justify-content-between w-100 mt-auto">

                                                <div class="d-flex justify-content-between">
                                                    <button type="button" class="btn btn-main" id="prevBtn"
                                                        onclick="nextPrev(-1)" style="width:160px;">Previous</button>

                                                    <button type="button" class="btn btn-main p-2" id="nextBtn"
                                                        onclick="nextPrev(1)" style="width:160px;">Next</button>


                                                    <a href="{{ url('/answerFinal') }}"
                                                    class="btn btn-main p-2" id="submitBtn"
                                                    style="width:160px;">Submit
                                                    </a>
                                                 
                                                </div>
                                            </div>
                                        </div>
                                        {{-- </form> --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('input[type=checkbox]').on('change', function() {

                let answerId = $(this).attr('id');
                let questionId = $(this).closest('.question').attr('id');

                console.log(answerId, questionId);
                $.ajax({
                    method: 'POST',
                    url: '/saveUserAnswer',
                    data: {
                        '_token': '{{ csrf_token() }}',
                        answer: answerId,
                        question: questionId,
                    },
                    success: function(res) {
                        console.log(res);

                    }
                });

            });
        });
    </script>

@endsection
