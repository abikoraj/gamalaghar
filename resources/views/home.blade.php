<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Ekka - Ecommerce HTML Template.</title>
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

    @include('mycart')

    <!-- Category Sidebar start -->
    <div class="ec-side-cat-overlay"></div>
    <div class="col-lg-3 category-sidebar" data-animation="fadeIn">
        <div class="cat-sidebar">
            <div class="cat-sidebar-box">
                <div class="ec-sidebar-wrap">
                    <!-- Sidebar Category Block -->
                    <div class="ec-sidebar-block">
                        <div class="ec-sb-title">
                            <h3 class="ec-sidebar-title">Category<button class="ec-close">×</button></h3>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item"><img src="assets/images/icons/dress-8.png"
                                            class="svg_img" alt="drink" />Clothes</div>
                                    <ul style="display: block;">
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">Shirt <span
                                                        title="Available Stock">- 25</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">shorts & jeans <span
                                                        title="Available Stock">- 52</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">jacket<span
                                                        title="Available Stock">- 500</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">dress & frock <span
                                                        title="Available Stock">- 35</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item"><img src="assets/images/icons/shoes-8.png"
                                            class="svg_img" alt="drink" />Footwear</div>
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">Sports <span
                                                        title="Available Stock">- 25</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">Formal <span
                                                        title="Available Stock">- 52</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">Casual <span
                                                        title="Available Stock">- 40</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">safety shoes <span
                                                        title="Available Stock">- 35</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item"><img src="assets/images/icons/jewelry-8.png"
                                            class="svg_img" alt="drink" />jewelry</div>
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">Earrings <span
                                                        title="Available Stock">- 50</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">Couple Rings <span
                                                        title="Available Stock">- 35</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">Necklace <span
                                                        title="Available Stock">- 40</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item"><img src="assets/images/icons/perfume-8.png"
                                            class="svg_img" alt="drink" />perfume</div>
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">Clothes perfume<span
                                                        title="Available Stock">- 4 pcs</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">deodorant <span
                                                        title="Available Stock">- 52 pcs</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">Flower fragrance <span
                                                        title="Available Stock">- 10 pack</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">Air
                                                    Freshener<span title="Available Stock">- 35 pack</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item"><img src="assets/images/icons/cosmetics-8.png"
                                            class="svg_img" alt="drink" />cosmetics</div>
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">shampoo<span
                                                        title="Available Stock"></span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">Sunscreen<span
                                                        title="Available Stock"></span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">body
                                                    wash<span title="Available Stock"></span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">makeup kit<span
                                                        title="Available Stock"></span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item"><img src="assets/images/icons/glasses-8.png"
                                            class="svg_img" alt="drink" />glasses</div>
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">Sunglasses <span
                                                        title="Available Stock">- 20</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">Lenses <span
                                                        title="Available Stock">- 52</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item"><img src="assets/images/icons/bag-8.png"
                                            class="svg_img" alt="drink" />bags</div>
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">shopping bag <span
                                                        title="Available Stock">- 25</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">Gym
                                                    backpack <span title="Available Stock">- 52</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">purse <span
                                                        title="Available Stock">- 40</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">wallet <span
                                                        title="Available Stock">- 35</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar Category Block -->
                </div>
            </div>
            <div class="ec-sidebar-slider-cat">
                <div class="ec-sb-slider-title">Best Sellers</div>
                <div class="ec-sb-pro-sl">
                    <div>
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                    src="assets/images/product-image/1.jpg" alt="product" /></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">baby fabric shoes</a>
                                </h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$5.00</span>
                                    <span class="new-price">$4.00</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                    src="assets/images/product-image/2.jpg" alt="product" /></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Men's hoodies t-shirt</a>
                                </h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$10.00</span>
                                    <span class="new-price">$7.00</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                    src="assets/images/product-image/3.jpg" alt="product" /></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Girls t-shirt</a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$5.00</span>
                                    <span class="new-price">$3.00</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                    src="assets/images/product-image/4.jpg" alt="product" /></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">woolen hat for men</a>
                                </h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$15.00</span>
                                    <span class="new-price">$12.00</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                    src="assets/images/product-image/5.jpg" alt="product" /></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Womens purse</a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$15.00</span>
                                    <span class="new-price">$12.00</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                    src="assets/images/product-image/6.jpg" alt="product" /></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Baby toy doctor kit</a>
                                </h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                    <i class="ecicon eci-star"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$50.00</span>
                                    <span class="new-price">$45.00</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                    src="assets/images/product-image/7.jpg" alt="product" /></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">teddy bear baby toy</a>
                                </h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$35.00</span>
                                    <span class="new-price">$25.00</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                    src="assets/images/product-image/2.jpg" alt="product" /></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Mens hoodies blue</a>
                                </h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$15.00</span>
                                    <span class="new-price">$13.00</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Slider Start -->
    <div class="ec-main-slider section section-space-pb">
        <div class="ec-slider">
            <div class="ec-slide-item d-flex slide-1">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-sm-12 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h2 class="ec-slide-stitle">healthy vegetables</h2>
                                <h1 class="ec-slide-title">Perfect<span class="outline-txt">Breakfast</span></h1>
                                <div class="ec-slide-disc">
                                    <p>Best weekly prices</p>
                                    <a href="#" class="btn btn-lg btn-primary"><span>Shop Now</span><i
                                            class="fi-rr-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ec-slide-item d-flex slide-2">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-sm-12 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h2 class="ec-slide-stitle">healthy Fruits</h2>
                                <h1 class="ec-slide-title">Healthy<span class="outline-txt">Organic</span></h1>
                                <div class="ec-slide-disc">
                                    <p>Food Everyday</p>
                                    <a href="#" class="btn btn-lg btn-primary"><span>Shop Now</span><i
                                            class="fi-rr-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ec-slide-item d-flex slide-3">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-sm-12 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h2 class="ec-slide-stitle">All You Need</h2>
                                <h1 class="ec-slide-title">Fresh<span class="outline-txt">Grocery</span></h1>
                                <div class="ec-slide-disc">
                                    <p>Deserve To Eat Fresh</p>
                                    <a href="#" class="btn btn-lg btn-primary"><span>Shop Now</span><i
                                            class="fi-rr-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  category Section Start -->
    <section class="section ec-category-section section-space-p">
        <div class="container">
            <div class="row margin-minus-b-15 margin-minus-t-15">
                <div id="ec-cat-slider" class="ec-cat-slider owl-carousel">
                    <div class="ec_cat_content ec_cat_content_2">
                        <div class="ec_cat_inner ec_cat_inner-2">
                            <div class="ec-category-image">
                                <img src="assets/images/icons/vegetable.png" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <span>Vegetables & Fruits</span>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content ec_cat_content_2">
                        <div class="ec_cat_inner ec_cat_inner-2">
                            <div class="ec-category-image">
                                <img src="assets/images/icons/groceries.png" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <span>Grocery & Staples</span>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content ec_cat_content_3">
                        <div class="ec_cat_inner ec_cat_inner-3">
                            <div class="ec-category-image">
                                <img src="assets/images/icons/dairy-products.png" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <p>Dairy & Eggs</p>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content ec_cat_content_4">
                        <div class="ec_cat_inner ec_cat_inner-4">
                            <div class="ec-category-image">
                                <img src="assets/images/icons/beverage.png" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <p>Beverage</p>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content ec_cat_content_5">
                        <div class="ec_cat_inner ec_cat_inner-5">
                            <div class="ec-category-image">
                                <img src="assets/images/icons/salad.png" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <p>Salad</p>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content ec_cat_content_6">
                        <div class="ec_cat_inner ec_cat_inner-6">
                            <div class="ec-category-image">
                                <img src="assets/images/icons/cake.png" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <p>Bakery</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--category Section End -->

    <!-- About Start -->
    <section class="section ec-about-sec section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="ec-about-img">
                        <img src="assets/images/about/about2.png" alt="about-image">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ec-about-detail">
                        <h4>We Are Healthy Food</h4>
                        <p class="detail-txt m-b-20">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                            Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.</p>
                        <div class="ec-detail-list m-b-15">
                            <div class="detail-list-img"><img src="assets/images/about/vegan.png" alt="plant-img">
                            </div>
                            <div>
                                <h3 class="about-detail-text">Biological Benefits</h3>
                                <p class="detail-txt">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem
                                    Ipsum
                                    has been the industry's .</p>
                            </div>
                        </div>
                        <div class="ec-detail-list">
                            <div class="detail-list-img"><img src="assets/images/about/plant.png" alt="plant-img">
                            </div>
                            <div>
                                <h3 class="about-detail-text">Speciality Product</h3>
                                <p class="detail-txt">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem
                                    Ipsum
                                    has been the industry's .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

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

    <!-- Achievement sec Start -->
    <section class="ec-achievement-sec section-space-p section-space-mt">
        <div class="container section-space-mt">
            <div class="shape"></div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-title">Our Achievements</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="ec-ach-slider" class="owl-carousel">
                    <div class="main-card card-1">
                        <div class="inner-card">
                            <img src="assets/images/achievement/1.png" alt="">
                            <h3>1570+</h3>
                            <p>Total Products</p>
                        </div>
                    </div>

                    <div class="main-card card-2">
                        <div class="">
                            <div class="inner-card">
                                <img src="assets/images/achievement/2.png" alt="">
                                <h3>3540+</h3>
                                <p>Satisfied Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="main-card card-3">
                        <div class="">
                            <div class="inner-card">
                                <img src="assets/images/achievement/3.png" alt="">
                                <h3>4512+</h3>
                                <p>Project Completed</p>
                            </div>
                        </div>
                    </div>
                    <div class="main-card card-4">
                        <div class="">
                            <div class="inner-card">
                                <img src="assets/images/achievement/4.png" alt="">
                                <h3>120+</h3>
                                <p>Awards Winning</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Achievement sec End -->

    <!-- Special Offer Start -->
    <section class="ec-offer-sec section-space-p">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="offer-section-title">
                        <h2><span class="black-text">Special Offers</span><span class="green-text"> Of The
                                Week!</span>
                        </h2>
                        <p>Lorem ipsum is simply dummy text of the printing and typesetting industry lorem ipsum when
                            for scrembled it to make a type spicemen book.</p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-lg-6 section-timer">
                    <div class="timer">
                        <div id="countdown">
                            <div id='tiles'></div>
                            <div class="labels">
                                <li>Days</li>
                                <li>Hours</li>
                                <li>Mins</li>
                                <li>Secs</li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row margin-top">
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
    </section>
    <!-- Special Offer Start -->

    <!-- bottom banner sec Start -->
    <div class="ec-bottom-banner-sec section section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12">
                    <div class="bottom-banner-img">
                        <div class="bottom-banner-txt">
                            <h2 class="inner-txt">Tasty, yeah? <br>Buy now!</h2>
                            <div class="ec-purchase-btn">
                                <a href="#" class="shop-btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bottom banner sec end -->

    <!-- faq sec Start -->
    <section class="ec-faq-sec section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="faq-detail">
                        <div class="faq-title">
                            <h3>Find frequently asked questions and
                                important information about us</h3>
                        </div>
                        <div class="accordion" id="accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        There are many variations of passages of Lorem Ipsum available,
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a
                                        piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        There are many variations of passages of Lorem Ipsum available,
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a
                                        piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        There are many variations of passages of Lorem Ipsum available,
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a
                                        piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="faq-img">
                        <img src="assets/images/faq/faq.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- faq sec End -->

    <!-- get in touch sec Start -->
    <section class="ec-get-in-touch section section-space-p">
        <div class="container">
            <div class="contact-map">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="ec-contact-map">
                            <div class="ec-content-left">
                                <div class="ec_contact_map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119066.41709476661!2d72.73989540440776!3d21.159340298484807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e59411d1563%3A0xfe4558290938b042!2sSurat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1686215917436!5m2!1sen!2sin"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 ec-content-right">
                        <div class="ec-content-right">
                            <div class="ec-contact-form">
                                <form id="main-form">
                                    <div class="table-heading">
                                        <h3>Get In Touch</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="name" id="name"
                                                    placeholder="Enter your name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" name="email" id="email"
                                                    placeholder="Enter your email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="tel" name="number" id="number"
                                                    placeholder="Phone Number" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <input type="text" name="subject" id="subject"
                                                        placeholder="Subject" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea id="comments" name="comment" placeholder="Enter your comment here..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-lg-4">
                                            <a href="#" class="submit-btn">Submit Now<span
                                                    class="cart-icon"></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- get in touch sec end -->

    <!-- footer sec start -->
    <footer class="section ec-footer-sec">
        <div class="footer-container ec-footer">
            <div class="footer-top section-space-footer-p">
                <div class="container">
                    <div class="social-links">
                        <a href="" class="social-btn">Facebook</a>
                        <a href="" class="social-btn">Twitter</a>
                        <a href="" class="social-btn">Instagram</a>
                        <a href="" class="social-btn">Linkedin</a>
                        <a href="" class="social-btn">Google</a>
                        <a href="" class="social-btn">Youtube</a>
                    </div>

                    <div class="row">
                        <div class="col-md-4 ec-footer-cat">
                            <div class="ec-footer-widget">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/images/logo/logo-11.png"
                                            alt="Site Logo" /><img class="dark-logo"
                                            src="assets/images/logo/dark-logo-11.png" alt="Site Logo"
                                            style="display: none;" /></a>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-cat">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">About</h4>
                                <div class="ec-footer-links ec-footer-dropdown">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="#">About Grocery</a></li>
                                        <li class="ec-footer-link"><a href="#">Plans & Pricing</a></li>
                                        <li class="ec-footer-link"><a href="#">Services</a></li>
                                        <li class="ec-footer-link"><a href="#">Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-cat">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Quick Links</h4>
                                <div class="ec-footer-links ec-footer-dropdown">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="#">Home</a></li>
                                        <li class="ec-footer-link"><a href="#">About Us</a></li>
                                        <li class="ec-footer-link"><a href="#">Testimonial</a></li>
                                        <li class="ec-footer-link"><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-cat">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Our Products</h4>
                                <div class="ec-footer-links ec-footer-dropdown">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="#">Dry Fruits</a></li>
                                        <li class="ec-footer-link"><a href="#">Backery</a></li>
                                        <li class="ec-footer-link"><a href="#">Grocery & Staples</a></li>
                                        <li class="ec-footer-link"><a href="#">Fresh Oil</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-cat">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Resources</h4>
                                <div class="ec-footer-links ec-footer-dropdown">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="#">Support center</a></li>
                                        <li class="ec-footer-link"><a href="#">Documentation</a></li>
                                        <li class="ec-footer-link"><a href="#">Newsletter</a></li>
                                        <li class="ec-footer-link"><a href="#">Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <!-- Footer payment -->
                        <div class="footer-bottom-right">
                            <div class="footer-bottom-payment d-flex justify-content-center">
                                <div class="payment-link">
                                    <img src="assets/images/icons/payment.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- Footer payment -->
                    </div>
                </div>
            </div>
            <!-- Footer Copyright Start -->
            <div class="container">
                <div class="footer-copy">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-bottom-copy">
                                <div class="ec-copy">Copyright © <span id="copyright_year"></span> <a
                                        class="site-name" href="index.html">Ekka</a>
                                    all
                                    rights reserved
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer">
                                <div class="float-right">
                                    <div class="privacy">
                                        <span class="green-text"><a href="">Terms of Use</a></span>
                                        <span><a href="">| Privacy Policy</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Copyright End -->
            </div>
    </footer>
    <!-- footer sec End -->

    <!-- Click To Call -->
    <div class="ec-cc-style cc-right-bottom">
        <!-- Start Floating Panel Container -->
        <div class="cc-panel">
            <!-- Panel Content -->
            <div class="cc-header">
                <img src="assets/images/whatsapp/profile_01.jpg" alt="profile image" />
                <h2>John Mark</h2>
                <p>Tachnical Manager</p>
            </div>
            <div class="cc-body">
                <p><b>Hey there &#128515;</b></p>
                <p>Need help ? just give me a call.</p>
            </div>
            <div class="cc-footer">
                <a href="tel:+919099153528" class="cc-call-button">
                    <span>Call me</span>
                    <svg width="13px" height="10px" viewBox="0 0 13 10">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </div>
        </div>
        <!--/ End Floating Panel Container -->

        <!-- Start Right Floating Button-->
        <div class="cc-button cc-right-bottom">
            <i class="fi-rr-phone-call"></i>
        </div>
        <!--/ End Right Floating Button-->

    </div>
    <!-- Click To Call end -->
    <!-- Newsletter Modal Start -->
    <div id="ec-popnews-bg"></div>
    <div id="ec-popnews-box">
        <div id="ec-popnews-close"><i class="ecicon eci-close"></i></div>
        <div class="row">
            <div class="col-md-7 disp-no-767">
                <img src="assets/images/banner/newsletter-8.png" alt="newsletter">
            </div>
            <div class="col-md-5">
                <div id="ec-popnews-box-content">
                    <h2>Subscribe Newsletter.</h2>
                    <p>Subscribe the ekka ecommerce to get in touch and get the future update. </p>
                    <form id="ec-popnews-form" action="#" method="post">
                        <input type="email" name="newsemail" placeholder="Email Address" required />
                        <button type="button" class="btn btn-primary" name="subscribe">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Modal end -->

    <!-- Footer navigation panel for responsive display -->
    <div class="ec-nav-toolbar">
        <div class="container">
            <div class="ec-nav-panel">
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><i
                            class="fi fi-rr-menu-burger"></i></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><i
                            class="fi-rr-shopping-basket"></i><span
                            class="ec-cart-noti ec-header-count cart-count-lable">3</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="index.html" class="ec-header-btn"><i class="fi-rr-home"></i></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="wishlist.html" class="ec-header-btn"><i class="fi-rr-heart"></i><span
                            class="ec-cart-noti">4</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="login.html" class="ec-header-btn"><i class="fi-rr-user"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer navigation panel for responsive display end -->

    <!-- Recent Purchase Popup  -->
    <div class="recent-purchase">
        <img src="assets/images/product-image/111_1.jpg" alt="payment image">
        <div class="detail">
            <p>Someone in new just bought</p>
            <h6>Rose Gold Earrings</h6>
            <p>2 Minutes ago</p>
        </div>
        <a href="javascript:void(0)" class="icon-btn recent-close">×</a>
    </div>
    <!-- Recent Purchase Popup end -->

    <!-- Add to Cart successfully toast Start -->
    <div id="addtocart_toast" class="addtocart_toast">
        <div class="desc">You Have Add To Cart Successfully</div>
    </div>
    <div id="wishlist_toast" class="wishlist_toast">
        <div class="desc">You Have Add To Wishlist Successfully</div>
    </div>
    <!-- Add to Cart successfully toast end -->

    <!-- Vendor JS -->
    <script src="{{ url('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ url('assets/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ url('assets/js/modernizr-3.11.2.min.js') }}"></script>

    <!--Plugins JS-->

    <script src="{{ url('assets/js/jquery.sticky-sidebar.js') }}"></script>
    <script src="{{ url('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('assets/js/countdownTimer.min.js') }}"></script>
    <script src="{{ url('assets/js/nouislider.js') }}"></script>
    <script src="{{ url('assets/js/scrollup.js') }}"></script>
    <script src="{{ url('assets/js/jquery.zoom.min.js') }}"></script>
    <script src="{{ url('assets/js/slick.min.js') }}"></script>
    <script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('assets/js/infiniteslidev2.js') }}"></script>
    <script src="{{ url('assets/js/click-to-call.js') }}"></script>

    <!-- Main Js -->
    <script src="{{ url('assets/js/index.js') }}"></script>
    <script src="{{ url('assets/js/demo-11.js') }}"></script>
</body>

</html>
