@include('layout.header')
@include('layout.nav')

<!-- Start Single Product Section -->
<section class="ec-page-content section-space-p">
    <div class="container">
            <!-- Product Details Section -->
            <div class="ec-pro-rightside ec-common-rightside order-md-first">
                <div class="single-pro-block">
                    <div class="single-pro-inner">
                        <div class="row">
                            <!-- Product Images -->
                            <div class="single-pro-img">
                                <div class="single-product-scroll">
                                    <div class="single-product-cover">
                                        <div class="single-slide zoom-image-hover">
                                            <img class="img-responsive" src="{{ $product->getFirstMediaUrl('product_image') }}" alt="{{ $product->product_name }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="single-pro-desc">
                                <div class="single-pro-content">
                                    <h5 class="ec-single-title">{{ $product->product_name }}</h5>
                                    <div class="ec-single-rating-wrap">
                                        <div class="ec-single-rating">
                                            <div class="ec-pro-rating">
                                                <div class="average_user_rating" lay-options="{value: {{ $averageRatingValue }}, theme: '#FF8000'}"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-single-desc">{{ strip_tags($product->short_description) }}</div>
                                    <div class="ec-single-price-stoke">
                                        <div class="ec-single-price">
                                            <span class="ec-single-ps-title">As low as</span>
                                            <span class="new-price" id="product-new-price">Rs. {{ $product->productsizeprice->first()->price }}</span>
                                        </div>
                                        <div class="ec-single-stoke">
                                            <span id="product-stock-status" class="ec-single-ps-title">IN STOCK</span>
                                            {{ $product->productsizeprice->first()->product_stock }}
                                        </div>
                                    </div>
                                    <div class="ec-pro-variation">
                                        <div class="ec-pro-variation-inner ec-pro-variation-size">
                                            <span>SIZE</span>
                                            <div class="ec-pro-variation-content">
                                                <ul>
                                                    @foreach ($size as $sizeData)
                                                        <li data-size-id="{{ $sizeData->id }}"><span>{{ $sizeData->size }}</span></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-single-qty">
                                        <div class="qty-plus-minus">
                                            <form action="{{ url('cart') }}" method="POST">
                                                @csrf
                                                <input class="qty-input" type="text" name="quantity" value="1" />
                                                <div class="ec-single-cart">
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                    <input type="hidden" name="product_size_price_id" id="product_size_price_id" value="{{ $product->productsizeprice->first()->id }}">
                                                    <button id="cart" class="btn btn-primary">Add To Cart <span class="cart-icon mx-2 mt-1"><i class="fi-rr-shopping-basket"></i></span></button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="ec-single-wishlist">
                                            <form action="{{ url('wishlist') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <button type="submit" class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="ec-single-qty">
                                        <form action="{{url('cart')}}" method="POST" class="unique-cart-form">
                                            @csrf
                                            <div class="qty-plus-minus">
                                                    <input class="qty-input" type="text" name="quantity" value="1" />
                                            </div>
                                            <div class="ec-single-cart">
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <input type="hidden" name="product_size_price_id" id="product_size_price_id" value="{{ $product->productsizeprice->first()->id }}">
                                                <button id="cart" class="btn btn-primary">Add To Cart <span class="cart-icon mx-2 mt-1"><i class="fi-rr-shopping-basket"></i></span></button>
                                            </div>
                                        </form>
                                        <div class="ec-single-wishlist">
                                            <form action="{{ url('wishlist') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <button type="submit" class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="ec-single-social">
                                        <ul class="mb-0">
                                            <li class="list-inline-item facebook"><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank"><i class="ecicon eci-facebook"></i></a></li>
                                            <li class="list-inline-item twitter"><a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&media={{ $product->getFirstMediaUrl('product_image') }}" target="_blank"><i class="ecicon eci-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Product Tabs -->
                <div class="ec-single-pro-tab">
                    <div class="ec-single-pro-tab-wrapper">
                        <div class="ec-single-pro-tab-nav">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-details" role="tab" aria-controls="ec-spt-nav-details" aria-selected="true">Detail</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-review" role="tab" aria-controls="ec-spt-nav-review" aria-selected="false">Reviews</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content ec-single-pro-tab-content">
                            <div id="ec-spt-nav-details" class="tab-pane fade show active">
                                <div class="ec-single-pro-tab-desc">{{ strip_tags($product->description) }}</div>
                            </div>
                            <div id="ec-spt-nav-review" class="tab-pane fade">
                                <div class="row">
                                    <div class="ec-t-review-wrapper">
                                        <div class="ec-t-review-item">
                                            <div class="ec-t-review-avtar">
                                                <img src="assets/images/review-image/1.jpg" alt="User Avatar" />
                                            </div>
                                            <div class="ec-t-review-content">
                                                @forelse ($userReviews as $userReview)
                                                    <div class="ec-t-review-top">
                                                        <div class="ec-t-review-name">{{ $userReview->name }}</div>
                                                        <div class="ec-pro-rating">
                                                            <div class="user_rating_data" lay-options="{value: {{ $userReview->user_rating }}, theme: '#FF8000'}"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ec-t-review-bottom">
                                                        <p>{{ $userReview->user_review }}</p>
                                                    </div>
                                                @empty
                                                    <p>No reviews yet.</p>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-ratting-content">
                                        <h3>Add a Review</h3>
                                        <div class="ec-ratting-form">
                                            <form action="{{ url('user-review') }}" method="POST">
                                                @csrf
                                                <div class="ec-ratting-star">
                                                    <span>Your rating:</span>
                                                    <div id="ID-rate-demo"></div>
                                                </div>
                                                <input type="hidden" id="ratingInput" name="user_rating">
                                                <div class="ec-ratting-input form-submit">
                                                    <textarea name="user_review" id="comment" placeholder="Enter Your Comment"></textarea>
                                                    <input type="hidden" id="productid" name="product_id" value="{{ $product->id }}">
                                                    <button class="btn btn-primary" id="submitReviewBtn" type="submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Details Description Area End -->
            </div>
            <!-- Sidebar Area Start -->
            {{-- <div class="ec-pro-leftside ec-common-leftside col-lg-3 order-lg-first col-md-12 order-md-last">
                <div class="ec-sidebar-slider">
                    <h5 class="ec-sb-slider-title">Best Sellers</h5>
                    <div class="ec-sb-pro-sl">
                        @foreach ($bestSellingProducts as $bestSellingProduct)
                            <div>
                                <div class="ec-sb-pro-sl-item">
                                    <a href="{{ url('product/' . $bestSellingProduct->slug) }}" class="sidekka_pro_img"><img src="{{ $bestSellingProduct->getFirstMediaUrl('product_image') }}" alt="{{ $bestSellingProduct->product_name }}" /></a>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="{{ url('product/' . $bestSellingProduct->slug) }}">{{ $bestSellingProduct->product_name }}</a></h5>
                                        <div class="ec-pro-rating">
                                            <div class="average_user_rating" lay-options="{value: {{ $averageRatingValue }}, theme: '#FF8000'}"></div>
                                        </div>
                                        <span class="ec-price">
                                            @if ($bestSellingProduct->productsizeprice->isNotEmpty())
                                                <span class="new-price">Rs. {{ $bestSellingProduct->productsizeprice->first()->price }}</span>
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div> --}}
            <!-- Sidebar Area End -->
    </div>
</section>
<!-- End Single Product Section -->

@include('shop.related_product')
@include('layout.footer')
