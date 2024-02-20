<!-- Related Product Start -->
<section class="section ec-releted-product section-space-p">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2 class="ec-bg-title">Related products</h2>
                    <h2 class="ec-title">Related products</h2>
                    <p class="sub-title">Browse The Collection of Top Products</p>
                </div>
            </div>
        </div>
        <div class="row margin-minus-b-30">
            <!-- Related Product Content -->
            @foreach ($relatedProducts as $relatedProduct)
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="{{ url('product/' . $relatedProduct->slug) }}" class="image">
                                    <img class="main-image"
                                        src="{{ $relatedProduct->getFirstMediaUrl('product_image') }}" alt="Product" />
                                </a>
                                <span class="percentage">20%</span>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <div class="ec-pro-title"><a
                                    href="{{ url('product/' . $relatedProduct->slug) }}">{{ $relatedProduct->product_name }}</a>
                            </div>
                            <div class="ec-pro-rating px-3">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <div class="ec-pro-list-desc px-3">
                                {{ strip_tags($relatedProduct->short_description) }}</div>
                            <span class="ec-price px-3">
                                <span class="old-price">$27.00</span>
                                <span class="new-price">$22.00</span>
                            </span>
                            <div class="ec-spe-pro-btn">
                                <a href="#" class="btn btn-lg btn-primary">Add To Cart<span class="cart-icon"><i
                                            class="fi-rr-shopping-basket"></i></a>
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
</section>
<!-- Related Product end -->
