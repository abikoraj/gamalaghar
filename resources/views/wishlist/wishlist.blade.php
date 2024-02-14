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

                            @foreach ($wishLists as $wishList)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    @foreach ($productImages as $productImage)
                                                       
                                                            <img src="{{ $productImage->getFirstMediaUrl('product_image') }}"
                                                                alt="{{ $wishList->product_name }}">
                                                       
                                                    @endforeach
                                                    {{-- <img class="hover-image" src="{{ url('assets/img/7_2.jpg') }}"
                                                    alt="Product" /> --}}
                                                </a>

                                                <span class="percentage">20%</span>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a
                                                    href="product-left-sidebar.html">{{ $wishList->product_name }}</a>
                                            </h5>
                                            <div class="ec-pro-rating px-3">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the
                                                printing and typesetting industry. Lorem Ipsum is simply dutmmy text
                                                ever since the 1500s, when an unknown printer took a galley.</div>
                                            <span class="ec-price px-3">

                                                <span class="new-price">${{ $wishList->price }}</span>
                                            </span>
                                            <div class="ec-spe-pro-btn">
                                                <a href="#" class="btn btn-lg btn-primary">Add To Cart<span
                                                        class="cart-icon"><i class="fi-rr-shopping-basket"></i></a>
                                                <span class="social-btn">
                                                    <a class="wishlist"><i class="fi-rr-heart"></i></a>

                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <!--compare content End -->
            </div>
            <!-- Compare Content end -->
        </div>
    </div>
</section>



@include('layout.footer')
