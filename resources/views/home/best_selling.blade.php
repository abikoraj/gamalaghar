<!-- Best Selling section start -->
<section class="section ec-grocery-sec section-space-ptb-80 section-space-m">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2 class="ec-title">BEST SELLING PRODUCTS</h2>
                    <p class="sub-title">Browse The Collection of Top Products</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Compare Content Start -->
            <div class="ec-wish-rightside col-lg-12 col-md-12">
                <!-- Compare content Start -->
                <div class="ec-compare-content">
                    <div class="ec-compare-inner">
                        <div class="row margin-minus-b-30">

                            @foreach ($product as $productData)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ $productData->getFirstMediaUrl('product_image') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="percentage">{{ $productData->discount }}</span>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a
                                                    href="{{ url('product/' . $productData->slug) }}">{{ $productData->product_name }}</a>
                                            </h5>
                                            <div class="ec-pro-rating px-3">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>

                                            <span class="ec-price px-3">
                                                <span class="old-price">$12.00</span>
                                                <span class="new-price">$10.00</span>
                                            </span>

                                            <div class="ec-spe-pro-btn">
                                                <form action="{{ url('cart') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $productData->id }}">
                                                    <input type="hidden" name="quantity" value="1">
                                                    <button id="cart" class="btn btn-lg btn-primary">Add To
                                                        Cart<span class="cart-icon"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                </form>
                                                <form id="wishlistForm_{{ $productData->id }}"
                                                    action="{{ url('wishlist') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id"
                                                        value="{{ $productData->id }}">
                                                    <span class="social-btn">
                                                        <button class="wishlist" type="button"
                                                            data-form-id="wishlistForm_{{ $productData->id }}"><i
                                                                class="fi-rr-heart"></i></button>
                                                    </span>
                                                </form>
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
<!-- Grocery section End -->

