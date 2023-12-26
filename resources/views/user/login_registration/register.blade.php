@extends('layouts.master')

@section('content')
    <div class="container mt-5">

        <div class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block">
                                    <img src="assets/img/login-reg/login-img.jpeg" alt="login form" class="img-fluid"
                                        style="border-radius: 1rem 0 0 1rem;" />
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center justify-content-center">
                                    <div class="card-body p-4 p-lg-5 text-black">
                                        <div class="form-group pt-3 mb-5">
                                            <h3>Sign Up to Loop Care</h3>
                                        </div>

                                        <form action="">
                                            <div id="wizard">
                                                <!-- SECTION 1 -->
                                                <h4></h4>
                                                <section>
                                                    <div class="form-group pt-5">
                                                        <input type="email" class="form-control input py-2 px-4"
                                                        id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
                                                    </div>
                                                   
                                                </section>

                                                <!-- SECTION 2 -->
                                                <h4></h4>
                                                <section>
                                                    <div class="form-row">
                                                        <label for="">
                                                            County *
                                                        </label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="form-row">
                                                        <label for="">
                                                            Postcode / Zip *
                                                        </label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="form-row form-group">
                                                        <div class="form-holder">
                                                            <label for="">
                                                                Phone *
                                                            </label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-holder">
                                                            <label for="">
                                                                Email Address *
                                                            </label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-row" style="margin-bottom: 18px">
                                                        <label for="">
                                                            Order Notes
                                                        </label>
                                                        <textarea name="" id="" class="form-control"
                                                            placeholder="Note about your order, eg. special notes fordelivery." style="height: 149px"></textarea>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox"> Create an account?
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </section>

                                                <!-- SECTION 3 -->
                                                <h4></h4>
                                                <section>
                                                    <div class="product">
                                                        <div class="item">
                                                            <div class="left">
                                                                <a href="#" class="thumb">
                                                                    <img src="images/item-1.png" alt="">
                                                                </a>
                                                                <div class="purchase">
                                                                    <h6>
                                                                        <a href="#">Low Table/Stool</a>
                                                                    </h6>
                                                                    <span>x4</span>
                                                                </div>
                                                            </div>
                                                            <span class="price">$29</span>
                                                        </div>
                                                        <div class="item">
                                                            <div class="left">
                                                                <a href="#" class="thumb">
                                                                    <img src="images/item-2.png" alt="">
                                                                </a>
                                                                <div class="purchase">
                                                                    <h6>
                                                                        <a href="#">Set of 3 Porcelain</a>
                                                                    </h6>
                                                                    <span>x2</span>
                                                                </div>
                                                            </div>
                                                            <span class="price">$124</span>
                                                        </div>
                                                    </div>
                                                    <div class="checkout">
                                                        <div class="subtotal">
                                                            <span class="heading">Subtotal</span>
                                                            <span>$364</span>
                                                        </div>
                                                        <p class="shipping">
                                                            <span class="heading">Shipping</span>
                                                            there are no shipping methods available. please double check
                                                            your address, or contact us if
                                                            you need any help.
                                                        </p>
                                                        <div class="total">
                                                            <span class="heading">Subtotal</span>
                                                            <span class="total-price">$364</span>
                                                        </div>
                                                    </div>
                                                </section>

                                                <!-- SECTION 4 -->
                                                <h4></h4>
                                                <section>
                                                    <div class="checkbox-circle">
                                                        <label class="active">
                                                            <input type="radio" name="billing method"
                                                                value="Direct bank transfer" checked>Direct
                                                            bank transfer>
                                                            <span class="checkmark"></span>
                                                            <div class="tooltip">
                                                                Make your payment directly into our bank account. Please use
                                                                your Order ID as the
                                                                payment reference. Your order will not be shipped until the
                                                                funds have cleared in our
                                                                account.
                                                            </div>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="billing method"
                                                                value="Check payments">Check payments
                                                            <span class="checkmark"></span>
                                                            <div class="tooltip">
                                                                Please send a check to Store Name, Store Street, Store Town,
                                                                Store State / County, Store
                                                                Postcode.
                                                            </div>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="billing method"
                                                                value="Cash on delivery">Cash on delivery
                                                            <span class="checkmark"></span>
                                                            <div class="tooltip">
                                                                Pay with cash upon delivery.
                                                            </div>
                                                        </label>
                                                    </div>
                                                </section>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
