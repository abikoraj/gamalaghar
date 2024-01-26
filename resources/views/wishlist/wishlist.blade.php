@include('layout.header')
@include('layout.nav')
@include('breadcrumb')
<!-- Ec Wishlist page -->
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <!-- Compare Content Start -->
            <div class="ec-wish-rightside col-lg-12 col-md-12">
                <!-- Compare content Start -->
                <div class="ec-compare-content">
                    <div class="ec-compare-inner">
                        <div class="row margin-minus-b-30">

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image" src="{{ url('assets/img/7_1.jpg') }}"
                                                    alt="Product" />
                                                <img class="hover-image" src="{{ url('assets/img/7_2.jpg') }}"
                                                    alt="Product" />
                                            </a>
                                            <span class="ec-com-remove ec-remove-wish"><a
                                                    href="javascript:void(0)">×</a></span>
                                            <span class="percentage">20%</span>
                                            <a href="#" class="quickview" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                            <div class="ec-pro-actions">
                                                <a href="compare.html" class="ec-btn-group compare"
                                                    title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                <button title="Add To Cart" class="add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                        class="fi-rr-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve
                                                Shirt</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry. Lorem Ipsum is simply dutmmy text
                                            ever since the 1500s, when an unknown printer took a galley.</div>
                                        <span class="ec-price">
                                            <span class="old-price">$12.00</span>
                                            <span class="new-price">$10.00</span>
                                        </span>
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-color">
                                                <span class="ec-pro-opt-label">Color</span>
                                                <ul class="ec-opt-swatch ec-change-img">
                                                    <li class="active"><a href="#" class="ec-opt-clr-img"
                                                            data-src="{{ url('assets/img/7_1.jpg') }}"
                                                            data-src-hover="{{ url('assets/img/7_1.jpg') }}"
                                                            data-tooltip="Gray"><span
                                                                style="background-color:#01f1f1;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img"
                                                            data-src="{{ url('assets/img/7_2.jpg') }}"
                                                            data-src-hover="{{ url('assets/img/7_2.jpg') }}"
                                                            data-tooltip="Orange"><span
                                                                style="background-color:#b89df8;"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="ec-pro-size">
                                                <span class="ec-pro-opt-label">Size</span>
                                                <ul class="ec-opt-size">
                                                    <li class="active"><a href="#" class="ec-opt-sz"
                                                            data-old="$12.00" data-new="$10.00"
                                                            data-tooltip="Small">S</a></li>
                                                    <li><a href="#" class="ec-opt-sz" data-old="$15.00"
                                                            data-new="$12.00" data-tooltip="Medium">M</a></li>
                                                    <li><a href="#" class="ec-opt-sz" data-old="$20.00"
                                                            data-new="$17.00" data-tooltip="Extra Large">XL</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image" src="{{ url('assets/img/1_1.jpg') }}"
                                                    alt="Product" />
                                                <img class="hover-image" src="{{ url('assets/img/1_2.jpg') }}"
                                                    alt="Product" />
                                            </a>
                                            <span class="ec-com-remove ec-remove-wish"><a
                                                    href="javascript:void(0)">×</a></span>
                                            <span class="percentage">20%</span>
                                            <a href="#" class="quickview" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                            <div class="ec-pro-actions">
                                                <a href="compare.html" class="ec-btn-group compare"
                                                    title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                <button title="Add To Cart" class="add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                        class="fi-rr-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Cute Baby
                                                Toy's</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry. Lorem Ipsum is simply dutmmy text
                                            ever since the 1500s, when an unknown printer took a galley.</div>
                                        <span class="ec-price">
                                            <span class="old-price">$40.00</span>
                                            <span class="new-price">$30.00</span>
                                        </span>
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-color">
                                                <span class="ec-pro-opt-label">Color</span>
                                                <ul class="ec-opt-swatch ec-change-img">
                                                    <li class="active"><a href="#" class="ec-opt-clr-img"
                                                            data-src="{{ url('assets/img/1_1.jpg') }}"
                                                            data-src-hover="{{ url('assets/img/1_1.jpg') }}"
                                                            data-tooltip="Gray"><span
                                                                style="background-color:#90cdf7;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img"
                                                            data-src="{{ url('assets/img/1_2.jpg') }}"
                                                            data-src-hover="{{ url('assets/img/1_2.jpg') }}"
                                                            data-tooltip="Orange"><span
                                                                style="background-color:#ff3b66;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img"
                                                            data-src="assets/images/product-image/1_3.jpg"
                                                            data-src-hover="assets/images/product-image/1_3.jpg"
                                                            data-tooltip="Green"><span
                                                                style="background-color:#ffc476;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img"
                                                            data-src="assets/images/product-image/1_4.jpg"
                                                            data-src-hover="assets/images/product-image/1_4.jpg"
                                                            data-tooltip="Sky Blue"><span
                                                                style="background-color:#1af0ba;"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="ec-pro-size">
                                                <span class="ec-pro-opt-label">Size</span>
                                                <ul class="ec-opt-size">
                                                    <li class="active"><a href="#" class="ec-opt-sz"
                                                            data-old="$40.00" data-new="$30.00"
                                                            data-tooltip="Small">S</a></li>
                                                    <li><a href="#" class="ec-opt-sz" data-old="$50.00"
                                                            data-new="$40.00" data-tooltip="Medium">M</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image" src="{{ url('assets/img/2_1.jpg') }}"
                                                    alt="Product" />
                                                <img class="hover-image" src="{{ url('assets/img/2_2.jpg') }}"
                                                    alt="Product" />
                                            </a>
                                            <span class="ec-com-remove ec-remove-wish"><a
                                                    href="javascript:void(0)">×</a></span>
                                            <span class="percentage">20%</span>
                                            <a href="#" class="quickview" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                            <div class="ec-pro-actions">
                                                <a href="compare.html" class="ec-btn-group compare"
                                                    title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                <button title="Add To Cart" class="add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                        class="fi-rr-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Jumbo Carry
                                                Bag</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry. Lorem Ipsum is simply dutmmy text
                                            ever since the 1500s, when an unknown printer took a galley.</div>
                                        <span class="ec-price">
                                            <span class="old-price">$50.00</span>
                                            <span class="new-price">$40.00</span>
                                        </span>
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-color">
                                                <span class="ec-pro-opt-label">Color</span>
                                                <ul class="ec-opt-swatch ec-change-img">
                                                    <li class="active"><a href="#" class="ec-opt-clr-img"
                                                            data-src="{{ url('assets/img/2_1.jpg') }}"
                                                            data-src-hover="{{ url('assets/img/2_2.jpg') }}"
                                                            data-tooltip="Gray"><span
                                                                style="background-color:#fdbf04;"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image" src="{{ url('assets/img/8_1.jpg') }}"
                                                    alt="Product" />
                                                <img class="hover-image" src="{{ url('assets/img/8_2.jpg') }}"
                                                    alt="Product" />
                                            </a>
                                            <span class="ec-com-remove ec-remove-wish"><a
                                                    href="javascript:void(0)">×</a></span>
                                            <span class="percentage">20%</span>
                                            <a href="#" class="quickview" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                            <div class="ec-pro-actions">
                                                <a href="compare.html" class="ec-btn-group compare"
                                                    title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                <button title="Add To Cart" class="add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                        class="fi-rr-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">I smart watch
                                                6gb</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry. Lorem Ipsum is simply dutmmy text
                                            ever since the 1500s, when an unknown printer took a galley.</div>
                                        <span class="ec-price">
                                            <span class="old-price">$12.00</span>
                                            <span class="new-price">$10.00</span>
                                        </span>
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-color">
                                                <span class="ec-pro-opt-label">Color</span>
                                                <ul class="ec-opt-swatch ec-change-img">
                                                    <li class="active"><a href="#" class="ec-opt-clr-img"
                                                            data-src="{{ url('assets/img/8_1.jpg') }}"
                                                            data-src-hover="{{ url('assets/img/8_1.jpg') }}"
                                                            data-tooltip="Gray"><span
                                                                style="background-color:#e2e2e2;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img"
                                                            data-src="{{ url('assets/img/8_2.jpg') }}"
                                                            data-src-hover="{{ url('assets/img/8_2.jpg') }}"
                                                            data-tooltip="Orange"><span
                                                                style="background-color:#ffcef7;"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="ec-pro-size">
                                                <span class="ec-pro-opt-label">Size</span>
                                                <ul class="ec-opt-size">
                                                    <li class="active"><a href="#" class="ec-opt-sz"
                                                            data-old="$12.00" data-new="$10.00"
                                                            data-tooltip="Small">S</a></li>
                                                    <li><a href="#" class="ec-opt-sz" data-old="$15.00"
                                                            data-new="$12.00" data-tooltip="Medium">M</a></li>
                                                    <li><a href="#" class="ec-opt-sz" data-old="$20.00"
                                                            data-new="$17.00" data-tooltip="Extra Large">XL</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--compare content End -->
            </div>
            <!-- Compare Content end -->
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="ec_quickview_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <!-- Swiper -->
                        <div class="qty-product-cover">
                            <div class="qty-slide">
                                <img class="img-responsive" src="{{ url('assets/img/3_1.jpg') }}" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="{{ url('assets/img/3_2.jpg') }}" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="{{ url('assets/img/3_3.jpg') }}" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="{{ url('assets/img/3_4.jpg') }}" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="{{ url('assets/img/3_5.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="qty-nav-thumb">
                            <div class="qty-slide">
                                <img class="img-responsive" src="{{ url('assets/img/3_1.jpg') }}" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="{{ url('assets/img/3_2.jpg') }}" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="{{ url('assets/img/3_3.jpg') }}" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="{{ url('assets/img/3_4.jpg') }}" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="{{ url('assets/img/3_5.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="quickview-pro-content">
                            <h5 class="ec-quick-title"><a href="product-left-sidebar.html">Handbag leather purse for
                                    women</a>
                            </h5>
                            <div class="ec-quickview-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>

                            <div class="ec-quickview-desc">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                since the 1500s,</div>
                            <div class="ec-quickview-price">
                                <span class="old-price">$100.00</span>
                                <span class="new-price">$80.00</span>
                            </div>

                            <div class="ec-pro-variation">
                                <div class="ec-pro-variation-inner ec-pro-variation-color">
                                    <span>Color</span>
                                    <div class="ec-pro-color">
                                        <ul class="ec-opt-swatch">
                                            <li><span style="background-color:#696d62;"></span></li>
                                            <li><span style="background-color:#d73808;"></span></li>
                                            <li><span style="background-color:#577023;"></span></li>
                                            <li><span style="background-color:#2ea1cd;"></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ec-pro-variation-inner ec-pro-variation-size ec-pro-size">
                                    <span>Size</span>
                                    <div class="ec-pro-variation-content">
                                        <ul class="ec-opt-size">
                                            <li class="active"><a href="#" class="ec-opt-sz"
                                                    data-tooltip="Small">S</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-tooltip="Medium">M</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-tooltip="Large">X</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-tooltip="Extra Large">XL</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-quickview-qty">
                                <div class="qty-plus-minus">
                                    <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                </div>
                                <div class="ec-quickview-cart ">
                                    <button class="btn btn-primary"><i class="fi-rr-shopping-basket"></i> Add To
                                        Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->

@extends('layout.footer')
