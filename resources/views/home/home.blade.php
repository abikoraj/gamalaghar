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
    @include('layout.header')



</head>

<body>


    @include('layout.nav')

    @include('home.mycart')

    @include('mobile_category')

    @include('home.main_banner')

    @include('home.category')

    @include('home.about_banner')

    @include('home.best_selling')

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
    @include('home.faq')



    @include('home.get_in_touch')



    @include('layout.footer')
</body>

</html>
