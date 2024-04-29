@include('layout.header')
@include('layout.nav')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/layui/2.9.8/css/layui.css" />
<!-- Sart Single product -->
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-pro-rightside ec-common-rightside col-lg-9 order-lg-last col-md-12 order-md-first">
                <!-- Single product content Start -->
                <div class="single-pro-block">
                    <div class="single-pro-inner">
                        <div class="row">
                            <div class="single-pro-img">
                                <div class="single-product-scroll">
                                    <div class="single-product-cover">
                                        <div class="single-slide zoom-image-hover">
                                            <img class="img-responsive"
                                                src="{{ $product->getFirstMediaUrl('product_image') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-pro-desc">
                                <div class="single-pro-content">
                                    <h5 class="ec-single-title">{{ $product->product_name }}</h5>
                                    <div class="ec-single-rating-wrap">
                                        <div class="ec-single-rating">
                                            <div class="ec-pro-rating">
                                                <div class="average_user_rating"
                                                                lay-options="{value: {{ $averageRatingValue }}, theme: '#FF8000'}">
                                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-single-desc">{{ strip_tags($product->short_description) }}</div>
                                    <div class="ec-single-price-stoke">
                                        <div class="ec-single-price">
                                            <span class="ec-single-ps-title">As low as</span>
                                            <span class="new-price" id="product-new-price">
                                                Rs.{{ $product->productsizeprice->first()->price }}</span>
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
                                                        <li data-size-id="{{ $sizeData->id }}">
                                                            <span>{{ $sizeData->size }}</span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-single-qty">
                                        <div class="qty-plus-minus">
                                            <form action="{{ url('cart') }}" method="POST">
                                                @csrf
                                                <input class="qty-input" type="text" name="quantity"
                                                    value="1" />
                                        </div>
                                        <div class="ec-single-cart ">
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="hidden" name="product_size_price_id"
                                                id="product_size_price_id"
                                                value="{{ $product->productsizeprice->first()->id }}">
                                            <button id="cart" class="btn btn-primary">Add To
                                                Cart <span class="cart-icon mx-2 mt-1"><i
                                                        class="fi-rr-shopping-basket"></i></button>
                                        </div>
                                        </form>
                                        <div class="ec-single-wishlist">
                                            <form action="{{ url('wishlist') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <button type="submit" class="ec-btn-group wishlist" title="Wishlist">
                                                    <i class="fi-rr-heart"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="ec-single-social">
                                        <ul class="mb-0">
                                            <li class="list-inline-item facebook"><a href="#"><i
                                                        class="ecicon eci-facebook"></i></a></li>
                                            <li class="list-inline-item twitter"><a href="#"><i
                                                        class="ecicon eci-twitter"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Single product content End -->
                <!-- Single product tab start -->
                <div class="ec-single-pro-tab">
                    <div class="ec-single-pro-tab-wrapper">
                        <div class="ec-single-pro-tab-nav">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-details"
                                        role="tab" aria-controls="ec-spt-nav-details"
                                        aria-selected="true">Detail</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-review"
                                        role="tab" aria-controls="ec-spt-nav-review"
                                        aria-selected="false">Reviews</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content  ec-single-pro-tab-content">
                            <div id="ec-spt-nav-details" class="tab-pane fade show active">
                                <div class="ec-single-pro-tab-desc">
                                    {{ strip_tags($product->description) }}
                                </div>
                            </div>
                            <div id="ec-spt-nav-review" class="tab-pane fade">
                                <div class="row">
                                    <div class="ec-t-review-wrapper">
                                        <div class="ec-t-review-item">
                                            <div class="ec-t-review-avtar">
                                                <img src="assets/images/review-image/1.jpg" alt="" />
                                            </div>
                                            <div class="ec-t-review-content">
                                                @forelse ($userReviews as $userReview)
                                                    <div class="ec-t-review-top">
                                                        <div class="ec-t-review-name">{{ $userReview->name }}</div>
                                                        <div class="ec-pro-rating">
                                                            <div class="user_rating_data"
                                                                lay-options="{value: {{ $userReview->user_rating }}, theme: '#FF8000'}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ec-t-review-bottom">
                                                        <p>{{ $userReview->user_review }}
                                                        </p>
                                                    </div>
                                                @empty
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
                                                    <div id="ID-rate-demo">


                                                    </div>
                                                </div>
                                                <input type="hidden" id="ratingInput" name="user_rating">
                                                <div class="ec-ratting-input form-submit">
                                                    <textarea name="user_review" id="comment" placeholder="Enter Your Comment"></textarea>
                                                    <input type="hidden" id="productid" name="product_id"
                                                        value="{{ $product->id }}">
                                                    <button class="btn btn-primary" id="submitReviewBtn"
                                                        type="submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product details description area end -->
            </div>
            <!-- Sidebar Area Start -->
            <div class="ec-pro-leftside ec-common-leftside col-lg-3 order-lg-first col-md-12 order-md-last">
                <div class="ec-sidebar-slider">
                    <h5 class="ec-sb-slider-title">Best Sellers</h5>
                    <div class="ec-sb-pro-sl">
                        @foreach ($bestSellingProducts as $bestSellingProduct)
                        @endforeach
                        <div>
                            <div class="ec-sb-pro-sl-item">
                                <a href="{{ url('product/' . $bestSellingProduct->slug) }}"
                                    class="sidekka_pro_img"><img
                                        src="{{ $bestSellingProduct->getFirstMediaUrl('product_image') }}"
                                        alt="product" /></a>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a
                                            href="{{ url('product/' . $bestSellingProduct->slug) }}">{{ $bestSellingProduct->product_name }}</a>
                                    </h5>
                                    <div class="ec-pro-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star"></i>
                                    </div>
                                    <span class="ec-price">
                                        @if ($bestSellingProduct->productsizeprice->isNotEmpty())
                                            <span class="new-price">Rs.
                                                {{ $bestSellingProduct->productsizeprice->first()->price }}</span>
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar Area Start -->
        </div>
    </div>
</section>
<!-- End Single product -->
<style>
    .ec-sb-slider-title {
        font-family: "Montserrat";
        text-decoration: none;
        color: #212121;
        display: block;
        font-size: 16px;
        line-height: 22px;
        letter-spacing: 0.8px;
        text-transform: uppercase;
        font-weight: 700;
        padding-bottom: 15px;
    }

    .ec-sidebar-slider .ec-sb-pro-sl .ec-sb-pro-sl-item {
        background: #f7f7f7;
        padding: 15px;
        border: none;
        margin-bottom: 15px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        overflow: hidden;
        border: 1px solid #eeeeee;
    }

    .ec-sidebar-slider .ec-sb-pro-sl .ec-sb-pro-sl-item .ec-pro-content {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin-top: 4px;
        overflow: hidden;
        padding-left: 12px;
    }

    .ec-sidebar-slider .ec-sb-pro-sl .ec-sb-pro-sl-item .ec-pro-content .ec-pro-title a {
        text-decoration: none;
        color: #444444;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: block;
        font-size: 14px;
        line-height: 1.5;
        letter-spacing: 0.5px;
        font-weight: 400;
        font-family: "Poppins, sans-serif";
    }

    .ec-sidebar-slider .ec-sb-pro-sl .ec-sb-pro-sl-item .ec-pro-content .ec-pro-rating {
        margin: 4px 0 6px;
    }

    .ec-sidebar-slider .ec-sb-pro-sl .ec-sb-pro-sl-item .ec-pro-content .ec-price {
        font-size: 16px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: left;
        -ms-flex-pack: left;
        justify-content: left;
        color: #777777;
    }

    .ec-sidebar-slider .ec-sb-pro-sl .ec-sb-pro-sl-item .ec-pro-content .ec-price span.new-price {
        color: #555;
        font-weight: 600;
        font-size: 16px;
    }

    .ec-sidebar-slider .ec-sb-pro-sl .ec-sb-pro-sl-item .ec-pro-content .ec-price span.old-price {
        font-size: 13px;
        margin-right: 15px;
        text-decoration: line-through;
        color: #777777;
        line-height: 14px;
    }

    .ec-sidebar-slider .ec-sb-pro-sl .ec-sb-pro-sl-item .sidekka_pro_img {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 36%;
        flex: 0 0 36%;
    }

    .ec-sidebar-slider .ec-sb-pro-sl .ec-sb-pro-sl-item .sidekka_pro_img img {
        max-width: 100%;
    }
</style>


<!-- 引入 layui.js -->

@include('shop.related_product')


<script src="https://cdnjs.cloudflare.com/ajax/libs/layui/2.9.8/layui.js"></script>

<script>
    layui.use(function() {
        var rate = layui.rate;
        // 渲染
        rate.render({
            elem: '#ID-rate-demo'
        });
    });
</script>


<script>
    layui.use(function() {
        var rate = layui.rate;
        // 批量渲染
        rate.render({
            elem: '.user_rating_data',
            readonly: true

        });
    });
</script>


<script>
    layui.use(function() {
        var rate = layui.rate;
        // 批量渲染
        rate.render({
            elem: '.average_user_rating',
            readonly: true

        });
    });
</script>



<script>
    layui.use(['rate'], function() {
        var rate = layui.rate;

        // Render layui rating component
        rate.render({
            elem: '#ID-rate-demo',
            half: true,
            choose: function(value) {
                console.log(value); // Output the selected rating value to console
                // Set the rating value to the hidden input field
                $('#ratingInput').val(value);
            }
        });
    });
</script>



@include('layout.footer')
<script>
    $(document).ready(function() {
        $('.ec-pro-variation-content').on('click', 'li', function(e) {
            e.preventDefault();
            var sizeId = $(this).data('size-id');

            $.ajax({
                url: '{{ route('get.price') }}',
                method: 'GET',
                data: {
                    size_id: sizeId
                },
                success: function(response) {
                    $('#product-new-price').text('Rs. ' + response.price);
                    $('#product_size_price_id').val(response.productsizeid);
                    $('#product-stock-status').text(response.stock);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script>


{{-- <script>
    $(document).ready(function() {
        $('.wishlist').click(function(e) {
            e.preventDefault();
            var formId = $(this).data('form-id');
            var formData = $('#' + formId).serialize();
            $.ajax({
                type: 'POST',
                url: $('#' + formId).attr('action'),
                data: formData,
                error: function(xhr, status, error) {
                    // Handle Ajax errors here
                    if (xhr.status == 401) {
                        // Redirect to the login page
                        window.location.href = 'login';
                    }
                }
            });
        });
    });
</script> --}}

</body>

</html>
