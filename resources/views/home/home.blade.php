<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>GamalaGhar</title>
    <meta name="keywords"
        content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
    <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
    <meta name="author" content="ashishmaraviya">

    <!-- site Favicon -->
    <link rel="icon" href="{{ url('assets/img/favicon-11.png') }}" sizes="32x32" />
    <link rel="apple-touch-icon" href="{{ url('assets/img/favicon-11.png') }}" />
    <meta name="msapplication-TileImage" content="{{ url('assets/img/favicon-11.png') }}" />

    <!-- css Icon Font -->
    <link rel="stylesheet" href="{{ url('assets/css/ecicons.min.css') }}" />

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="{{ url('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/jquery-ui.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/countdownTimer.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/nouislider.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/slick.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.css') }}" />

    <!-- Main Style -->
    <link rel="stylesheet" href="{{ url('assets/css/demo11.css') }}" />

</head>

<body>


    @include('layout.header')

    @include('home.mycart')

    @include('mobile_category')

    @include('home.main_banner')

    @include('home.category')

    @include('home.about_banner')

    <!-- Grocery section start -->
    <section class="section ec-grocery-sec section-space-ptb-80 section-space-m">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-title">Featured Grocery Item</h2>
                        <p class="sub-title">Browse The Collection of Top Products</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="tab-pane fade show active" id="all">
                    <div class="ec-product-slider owl-carousel">
                        <div class="ec-product-content">
                            <div class="ec-product-inner">
                                <div class="ec-pro-image-outer">
                                    <div class="ec-pro-image">
                                        <img class="main-image" src="assets/images/product-image/141.jpg"
                                            alt="Product" />
                                        <span class="flags">
                                            <span class="sale">Sale</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h6 class="ec-pro-stitle">Grain, Breakfast, Fresh</h6>

                                    <h5 class="ec-pro-title">Egg</a></h5>
                                    <div class="ec-pro-rat-price">
                                        <span class="ec-price">
                                            <span class="old-price">$30.00</span>
                                            <span class="new-price">$20.00</span>
                                            <span class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="ec-spe-pro-btn">
                                    <a href="#" class="btn btn-lg btn-primary">Add To Cart<span
                                            class="cart-icon"><i class="fi-rr-shopping-basket"></i></a>
                                    <span class="social-btn">
                                        <a class="wishlist"><i class="fi-rr-heart"></i></a>
                                        <a class="quick-view"><i class="fi-rr-eye"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="ec-product-content">
                            <div class="ec-product-inner">
                                <div class="ec-pro-image-outer">
                                    <div class="ec-pro-image">
                                        <img class="main-image" src="assets/images/product-image/142.jpg"
                                            alt="Product" />
                                        <span class="flags">
                                            <span class="hot">Hot</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h6 class="ec-pro-stitle">Grain, Breakfast, Fresh</h6>
                                    <h5 class="ec-pro-title">Dry Fruits</a></h5>
                                    <div class="ec-pro-rat-price">
                                        <span class="ec-price">
                                            <span class="old-price">$65.00</span>
                                            <span class="new-price">$58.00</span>
                                            <span class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="ec-spe-pro-btn">
                                    <a href="#" class="btn btn-lg btn-primary">Add To Cart<span
                                            class="cart-icon"><i class="fi-rr-shopping-basket"></i></a>
                                    <span class="social-btn">
                                        <a class="wishlist"><i class="fi-rr-heart"></i></a>
                                        <a class="quick-view"><i class="fi-rr-eye"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="ec-product-content">
                            <div class="ec-product-inner">
                                <div class="ec-pro-image-outer">
                                    <div class="ec-pro-image">
                                        <img class="main-image" src="assets/images/product-image/143.jpg"
                                            alt="Product" />
                                        <span class="flags">
                                            <span class="sale">Sale</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h6 class="ec-pro-stitle">Grain, Breakfast, Fresh</h6>

                                    <h5 class="ec-pro-title"> Organic Pickle </a></h5>
                                    <div class="ec-pro-rat-price">
                                        <span class="ec-price">
                                            <span class="old-price">$65.00</span>
                                            <span class="new-price">$58.00</span>
                                            <span class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="ec-spe-pro-btn">
                                    <a href="#" class="btn btn-lg btn-primary">Add To Cart<span
                                            class="cart-icon"><i class="fi-rr-shopping-basket"></i></a>
                                    <span class="social-btn">
                                        <a class="wishlist"><i class="fi-rr-heart"></i></a>
                                        <a class="quick-view"><i class="fi-rr-eye"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="ec-product-content">
                            <div class="ec-product-inner">
                                <div class="ec-pro-image-outer">
                                    <div class="ec-pro-image">
                                        <img class="main-image" src="assets/images/product-image/140.jpg"
                                            alt="Product" />
                                        <span class="flags">
                                            <span class="new">New</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h6 class="ec-pro-stitle">Grain, Breakfast, Fresh</h6>

                                    <h5 class="ec-pro-title">Soft Drinks</a></h5>
                                    <div class="ec-pro-rat-price">
                                        <span class="ec-price">
                                            <span class="old-price">$65.00</span>
                                            <span class="new-price">$58.00</span>
                                            <span class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="ec-spe-pro-btn">
                                    <a href="#" class="btn btn-lg btn-primary">Add To Cart<span
                                            class="cart-icon"><i class="fi-rr-shopping-basket"></i></a>
                                    <span class="social-btn">
                                        <a class="wishlist"><i class="fi-rr-heart"></i></a>
                                        <a class="quick-view"><i class="fi-rr-eye"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Grocery section End -->

    <!-- Service section start -->
    <section class="section ec-service-sec section-space-p">
        <div class="container align-self-center">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="main-content-detail">
                        <div class="main-content left">
                            <div class="detail-content ">
                                <h6 class="ec-service-title">Fast Shipping</h6>
                                <p class="ec-service-detail">We are available for fast shipping in every season 24X7
                                    deliver in the world. The printing and
                                    typesetting industry.</p>
                            </div>
                            <img class="service-img" src="assets/images/service/shipping.png" alt="shipping-img">
                        </div>
                        <div class="main-content left">
                            <div class="detail-content">
                                <h6 class="ec-service-title">Trust Gurantee</h6>
                                <p class="ec-service-detail">The printing and
                                    typesetting industry. We are available for fast shipping in every season 24X7
                                    deliver in the world.</p>
                            </div>
                            <img class="service-img" src="assets/images/service/trust.png" alt="shipping-img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="ec-ser-mid-image">
                        <img class="ser-background" src="assets/images/service/man.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="main-content-detail">
                        <div class="main-content right">
                            <img class="service-img" src="assets/images/service/support.png" alt="shipping-img">
                            <div class="detail-content">
                                <h6 class="ec-service-title">24x7 Free Support</h6>
                                <p class="ec-service-detail">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <div class="main-content right">
                            <img class="service-img" src="assets/images/service/discount.png" alt="shipping-img">
                            <div class="detail-content">
                                <h6 class="ec-service-title">Daily Discounts</h6>
                                <p class="ec-service-detail">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service section End -->

    @include('home.bottom_banner')



    @include('home.get_in_touch')



    @include('layout.footer')
</body>

</html>
