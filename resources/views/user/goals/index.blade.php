@extends('layouts.master')

@section('content')
    @include('layouts.userNav')
    @include('user.goals.patials.create')
    @include('user.goals.patials.view')

    <div class="container px-md-5 hero-slider mt-3">

        {{--  create activity  --}}
        <div class="d-flex gap-2 justify-content-end ">
            <button type="button" class="btn btn-main-sq btn-ui px-4" data-bs-target="#newActivity" data-bs-toggle="modal"
                data-bs-dismiss="modal">
                <i class="fa-solid fa-plus me-2"></i> Add Activity</button>
        </div>

        {{--  meals for you  --}}
        <div class="slider-swiper-container mt-2 mt-md-5">
            <div class="container pb-3 mb-4 border-bottom">
                <h4 class="sub-title">Goals For You</h4>
                <div class="swiper boxCardSwiper pt-0">
                    <div class="swiper-wrapper py-0 py-md-2">

                        <div class="swiper-slide">
                            <a href="#running">
                                <div class="card">
                                    <div class="image-container">
                                        <img class="card-img-top"
                                            src="https://www.mensjournal.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:good%2Cw_1200/MTk2MTM3Mzg1MTM1Nzc2OTEz/running-street-1280.jpg"
                                            alt="Card image cap">
                                        <div class="gradient-overlay"></div>
                                    </div>
                                    <div class="text-overlay image-card-sq">
                                        <h2 class="text-white">Running Goals</h2>
                                        <small class="text-warning">
                                            5 Goals</small>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#walking">
                                <div class="card">
                                    <div class="image-container">
                                        <img class="card-img-top"
                                            src="https://images.news18.com/ibnlive/uploads/2022/09/shutterstock_1127358806.jpg"
                                            alt="Card image cap">
                                        <div class="gradient-overlay"></div>
                                    </div>
                                    <div class="text-overlay image-card-sq">
                                        <h2 class="text-white">Walking Goals</h2>
                                        <small class="text-warning">5 Goals</small>
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

        {{--  Breakfast  --}}
        <div class="slider-swiper-container mt-2 mt-md-5">

            {{--  Single slider  --}}
            <div class="container" id="running">
                <h4 class="sub-title">Running Goals</h4>
                <div class="swiper categoryCardSwiper pt-0">
                    <div class="swiper-wrapper py-0 py-md-2">

                        <div class="swiper-slide bg-transparent">
                            <button type="button" class="bg-transparent border-0 p-0" data-bs-target="#viewGoal"
                                data-bs-toggle="modal" data-bs-dismiss="modal">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main text-start m-0">Sprinter Starter</h4>
                                    <div class="d-flex justify-content-between">
                                        <small class="text-secondary">Beginner</small>
                                        <small class="text-secondary">40% Completed</small>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <div class="swiper-slide bg-transparent">
                            <button type="button" class="bg-transparent border-0 p-0" data-bs-target="#viewGoal"
                                data-bs-toggle="modal" data-bs-dismiss="modal">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main text-start m-0">Sprinter Starter</h4>
                                    <div class="d-flex justify-content-between">
                                        <small class="text-secondary">Beginner</small>
                                        <small class="text-secondary">40% Completed</small>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <div class="swiper-slide bg-transparent">
                            <button type="button" class="bg-transparent border-0 p-0" data-bs-target="#viewGoal"
                                data-bs-toggle="modal" data-bs-dismiss="modal">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main text-start m-0">Sprinter Starter</h4>
                                    <div class="d-flex justify-content-between">
                                        <small class="text-secondary">Beginner</small>
                                        <small class="text-secondary">40% Completed</small>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <div class="swiper-slide bg-transparent">
                            <button type="button" class="bg-transparent border-0 p-0" data-bs-target="#viewGoal"
                                data-bs-toggle="modal" data-bs-dismiss="modal">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main text-start m-0">Sprinter Starter</h4>
                                    <div class="d-flex justify-content-between">
                                        <small class="text-secondary">Beginner</small>
                                        <small class="text-secondary">40% Completed</small>
                                    </div>
                                </div>
                            </button>
                        </div>

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>

        {{--  lunch  --}}
        <div class="slider-swiper-container mt-2 mt-md-5">

            {{--  Single slider  --}}
            <div class="container" id="walking">
                <h4 class="sub-title">Lunch</h4>
                <div class="swiper categoryCardSwiper pt-0">
                    <div class="swiper-wrapper py-0 py-md-2">

                        <div class="swiper-slide bg-transparent">
                            <button type="button" class="bg-transparent border-0 p-0" data-bs-target="#viewGoal"
                                data-bs-toggle="modal" data-bs-dismiss="modal">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main text-start m-0">Sprinter Starter</h4>
                                    <div class="d-flex justify-content-between">
                                        <small class="text-secondary">Beginner</small>
                                        <small class="text-secondary">40% Completed</small>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <div class="swiper-slide bg-transparent">
                            <button type="button" class="bg-transparent border-0 p-0" data-bs-target="#viewGoal"
                                data-bs-toggle="modal" data-bs-dismiss="modal">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main text-start m-0">Sprinter Starter</h4>
                                    <div class="d-flex justify-content-between">
                                        <small class="text-secondary">Beginner</small>
                                        <small class="text-secondary">40% Completed</small>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <div class="swiper-slide bg-transparent">
                            <button type="button" class="bg-transparent border-0 p-0" data-bs-target="#viewGoal"
                                data-bs-toggle="modal" data-bs-dismiss="modal">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main text-start m-0">Sprinter Starter</h4>
                                    <div class="d-flex justify-content-between">
                                        <small class="text-secondary">Beginner</small>
                                        <small class="text-secondary">40% Completed</small>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <div class="swiper-slide bg-transparent">
                            <button type="button" class="bg-transparent border-0 p-0" data-bs-target="#viewGoal"
                                data-bs-toggle="modal" data-bs-dismiss="modal">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main text-start m-0">Sprinter Starter</h4>
                                    <div class="d-flex justify-content-between">
                                        <small class="text-secondary">Beginner</small>
                                        <small class="text-secondary">40% Completed</small>
                                    </div>
                                </div>
                            </button>
                        </div>

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>

        {{--  dinner  --}}
        <div class="slider-swiper-container mt-2 mt-md-5">

            {{--  Single slider  --}}
            <div class="container">
                <h4 class="sub-title">Dinner</h4>
                <div class="swiper categoryCardSwiper pt-0">
                    <div class="swiper-wrapper py-0 py-md-2">

                        <div class="swiper-slide bg-transparent">
                            <button type="button" class="bg-transparent border-0 p-0" data-bs-target="#viewGoal"
                                data-bs-toggle="modal" data-bs-dismiss="modal">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main text-start m-0">Sprinter Starter</h4>
                                    <div class="d-flex justify-content-between">
                                        <small class="text-secondary">Beginner</small>
                                        <small class="text-secondary">40% Completed</small>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <div class="swiper-slide bg-transparent">
                            <button type="button" class="bg-transparent border-0 p-0" data-bs-target="#viewGoal"
                                data-bs-toggle="modal" data-bs-dismiss="modal">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main text-start m-0">Sprinter Starter</h4>
                                    <div class="d-flex justify-content-between">
                                        <small class="text-secondary">Beginner</small>
                                        <small class="text-secondary">40% Completed</small>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <div class="swiper-slide bg-transparent">
                            <button type="button" class="bg-transparent border-0 p-0" data-bs-target="#viewGoal"
                                data-bs-toggle="modal" data-bs-dismiss="modal">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main text-start m-0">Sprinter Starter</h4>
                                    <div class="d-flex justify-content-between">
                                        <small class="text-secondary">Beginner</small>
                                        <small class="text-secondary">40% Completed</small>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <div class="swiper-slide bg-transparent">
                            <button type="button" class="bg-transparent border-0 p-0" data-bs-target="#viewGoal"
                                data-bs-toggle="modal" data-bs-dismiss="modal">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main text-start m-0">Sprinter Starter</h4>
                                    <div class="d-flex justify-content-between">
                                        <small class="text-secondary">Beginner</small>
                                        <small class="text-secondary">40% Completed</small>
                                    </div>
                                </div>
                            </button>
                        </div>

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>

        {{--  snack  --}}
        <div class="slider-swiper-container mt-2 mt-md-5">

            {{--  Single slider  --}}
            <div class="container">
                <h4 class="sub-title">Snack</h4>
                <div class="swiper categoryCardSwiper pt-0">
                    <div class="swiper-wrapper py-0 py-md-2">

                        <div class="swiper-slide bg-transparent">
                            <button type="button" class="bg-transparent border-0 p-0" data-bs-target="#viewGoal"
                                data-bs-toggle="modal" data-bs-dismiss="modal">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main text-start m-0">Sprinter Starter</h4>
                                    <div class="d-flex justify-content-between">
                                        <small class="text-secondary">Beginner</small>
                                        <small class="text-secondary">40% Completed</small>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <div class="swiper-slide bg-transparent">
                            <button type="button" class="bg-transparent border-0 p-0" data-bs-target="#viewGoal"
                                data-bs-toggle="modal" data-bs-dismiss="modal">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main text-start m-0">Sprinter Starter</h4>
                                    <div class="d-flex justify-content-between">
                                        <small class="text-secondary">Beginner</small>
                                        <small class="text-secondary">40% Completed</small>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <div class="swiper-slide bg-transparent">
                            <button type="button" class="bg-transparent border-0 p-0" data-bs-target="#viewGoal"
                                data-bs-toggle="modal" data-bs-dismiss="modal">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main text-start m-0">Sprinter Starter</h4>
                                    <div class="d-flex justify-content-between">
                                        <small class="text-secondary">Beginner</small>
                                        <small class="text-secondary">40% Completed</small>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <div class="swiper-slide bg-transparent">
                            <button type="button" class="bg-transparent border-0 p-0" data-bs-target="#viewGoal"
                                data-bs-toggle="modal" data-bs-dismiss="modal">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main text-start m-0">Sprinter Starter</h4>
                                    <div class="d-flex justify-content-between">
                                        <small class="text-secondary">Beginner</small>
                                        <small class="text-secondary">40% Completed</small>
                                    </div>
                                </div>
                            </button>
                        </div>

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
