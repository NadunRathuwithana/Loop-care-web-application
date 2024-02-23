@extends('layouts.master')

@section('content')
    @include('layouts.userNav')

    <div class="container px-md-5 hero-slider mt-3">

        <div class="d-flex gap-2 justify-content-end ">
            <button type="button" class="btn btn-main-sq btn-ui px-4" data-bs-toggle="offcanvas"
                data-bs-target="#activityCanvas" aria-controls="offcanvasRight"><i class="fa-solid fa-plus me-2"></i> Add
                Activity</button>
        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="activityCanvas" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel">Add Activity</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                ...
            </div>
        </div>
        {{--  meals for you  --}}
        <div class="slider-swiper-container mt-2 mt-md-5">
            <div class="container pb-3 mb-4 border-bottom">
                <h4 class="sub-title">Goals For You</h4>
                <div class="swiper boxCardSwiper pt-0">
                    <div class="swiper-wrapper py-0 py-md-2">

                        <div class="swiper-slide">
                            <a href="">
                                <div class="card">
                                    <div class="image-container">
                                        <img class="card-img-top"
                                            src="https://www.thecookierookie.com/wp-content/uploads/2023/05/featured-grilled-salmon-recipe.jpg"
                                            alt="Card image cap">
                                        <div class="gradient-overlay"></div>
                                    </div>
                                    <div class="text-overlay image-card-sq">
                                        <h2>1000M Runner</h2>
                                        <small class="text-warning">Burn 110kCal</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                                <div class="card">
                                    <div class="image-container">
                                        <img class="card-img-top image-card-sq"
                                            src="https://thecozycook.com/wp-content/uploads/2019/08/Bolognese-Sauce-500x500.jpg"
                                            alt="Card image cap">
                                        <div class="gradient-overlay"></div>
                                    </div>
                                    <div class="text-overlay">
                                        <h2>Spaghetti Bolognese</h2>
                                        <small class="text-warning">Dinner</small>
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
            <div class="container">
                <h4 class="sub-title">Breakfast</h4>
                <div class="swiper categoryCardSwiper pt-0">
                    <div class="swiper-wrapper py-0 py-md-2">

                        <div class="swiper-slide">
                            <a href="{{ url('single-meal') }}" class="text-decoration-none">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main m-0">Chopped Tuna Salad</h4>
                                    <small class="text-secondary">Weight Gain</small>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="" class="text-decoration-none">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main m-0">Chopped Tuna Salad</h4>
                                    <small class="text-secondary">Weight Gain</small>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="" class="text-decoration-none">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main m-0">Chopped Tuna Salad</h4>
                                    <small class="text-secondary">Weight Gain</small>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="" class="text-decoration-none">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main m-0">Chopped Tuna Salad</h4>
                                    <small class="text-secondary">Weight Gain</small>
                                </div>
                            </a>
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
            <div class="container">
                <h4 class="sub-title">Lunch</h4>
                <div class="swiper categoryCardSwiper pt-0">
                    <div class="swiper-wrapper py-0 py-md-2">

                        <div class="swiper-slide">
                            <a href="" class="text-decoration-none">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main m-0">Chopped Tuna Salad</h4>
                                    <small class="text-secondary">Weight Gain</small>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="" class="text-decoration-none">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main m-0">Chopped Tuna Salad</h4>
                                    <small class="text-secondary">Weight Gain</small>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="" class="text-decoration-none">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main m-0">Chopped Tuna Salad</h4>
                                    <small class="text-secondary">Weight Gain</small>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="" class="text-decoration-none">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main m-0">Chopped Tuna Salad</h4>
                                    <small class="text-secondary">Weight Gain</small>
                                </div>
                            </a>
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

                        <div class="swiper-slide">
                            <a href="" class="text-decoration-none">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main m-0">Chopped Tuna Salad</h4>
                                    <small class="text-secondary">Weight Gain</small>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="" class="text-decoration-none">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main m-0">Chopped Tuna Salad</h4>
                                    <small class="text-secondary">Weight Gain</small>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="" class="text-decoration-none">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main m-0">Chopped Tuna Salad</h4>
                                    <small class="text-secondary">Weight Gain</small>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="" class="text-decoration-none">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main m-0">Chopped Tuna Salad</h4>
                                    <small class="text-secondary">Weight Gain</small>
                                </div>
                            </a>
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

                        <div class="swiper-slide">
                            <a href="" class="text-decoration-none">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main m-0">Chopped Tuna Salad</h4>
                                    <small class="text-secondary">Weight Gain</small>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="" class="text-decoration-none">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main m-0">Chopped Tuna Salad</h4>
                                    <small class="text-secondary">Weight Gain</small>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="" class="text-decoration-none">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main m-0">Chopped Tuna Salad</h4>
                                    <small class="text-secondary">Weight Gain</small>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="" class="text-decoration-none">
                                <div class="card mb-2">
                                    <div class="image-container">
                                        <img class="card-img-top meal-card"
                                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-main m-0">Chopped Tuna Salad</h4>
                                    <small class="text-secondary">Weight Gain</small>
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
