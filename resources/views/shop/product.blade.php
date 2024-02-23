@include('layout.header')
@include('layout.nav')
<!-- Ec Shop page -->
<section class="ec-page-content ">
    <div class="container">
        <div class="row">
            <!-- Sidebar Area Start -->
            <div class="ec-shop-leftside col-lg-3 order-lg-first col-md-12 order-md-last">
                <div class="ec-sidebar-wrap">
                    <div class="ec-sidebar-heading">
                        <h1>Filter Products By</h1>
                    </div>
                    <!-- Sidebar Price Block -->
                    <div class="ec-sidebar-block">
                        <div class="ec-sb-title">
                            <h3 class="ec-sidebar-title">Price</h3>
                        </div>
                        <div class="ec-sb-block-content es-price-slider">
                            <div class="ec-price-filter">
                                <div id="ec-sliderPrice" class="filter__slider-price" data-min="0" data-max="250"
                                    data-step="10"></div>
                                <div class="ec-price-input">
                                    <label class="filter__label"><input type="text" class="filter__input"></label>
                                    <span class="ec-price-divider"></span>
                                    <label class="filter__label"><input type="text" class="filter__input"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ec-shop-rightside col-lg-9 order-lg-last col-md-12 order-md-first margin-b-30">
                <!-- Shop Top Start -->
                <div class="ec-pro-list-top d-flex">
                    <div class="col-md-6 ec-grid-list">
                        <div class="ec-gl-btn">
                            <button class="btn btn-grid active"><i class="fi-rr-apps"></i></button>
                            <button class="btn btn-list"><i class="fi-rr-list"></i></button>
                        </div>
                    </div>
                    <div class="col-md-6 ec-sort-select">
                        <span class="sort-by">Sort by</span>
                        <div class="ec-select-inner">
                            <select name="ec-select" id="ec-select">
                                <option selected disabled>Position</option>
                                <option value="1">Relevance</option>
                                <option value="2">Name, A to Z</option>
                                <option value="3">Name, Z to A</option>
                                <option value="4">Price, low to high</option>
                                <option value="5">Price, high to low</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- Shop Top End -->

                <!-- Shop content Start -->
                <div class="shop-pro-content">
                    <div class="shop-pro-inner">
                        <div class="row">
                            @forelse ($product as $productData)
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ url('product/' . $productData->slug) }}" class="image">
                                                    <img class="main-image" src="{{ url('assets/img/8_1.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <div class="ec-pro-title"><a
                                                    href="{{ url('product/' . $productData->slug) }}">{{ $productData->product_name }}</a>
                                            </div>
                                            <div class="ec-pro-rating px-3">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <div class="ec-pro-list-desc px-3">
                                                {{ strip_tags($productData->short_description) }}</div>
                                            <span class="ec-price px-3">
                                                <span class="old-price">$27.00</span>
                                                <span class="new-price">$22.00</span>
                                            </span>
                                            {{-- <div class="ec-spe-pro-btn">
                                                <form action="{{ url('cart') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id"
                                                        value="{{ $productData->id }}">
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
                                            </div> --}}
                                        </div>

                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>
                        <div>
                            <!-- Ec Pagination Start -->
                            <div class="ec-pro-pagination">
                                <span>Showing 1-12 of 21 item(s)</span>
                                <ul class="ec-pro-pagination-inner">
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a class="next" href="#">Next <i class="ecicon eci-angle-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Ec Pagination End -->
                        </div>
                        <!--Shop content End -->
                    </div>
                </div>
            </div>
</section>
<!-- End Shop page -->

@include('layout.footer')
