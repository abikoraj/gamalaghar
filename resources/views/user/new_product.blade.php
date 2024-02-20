<!-- Sidebar Area Start -->
<div class="ec-pro-leftside ec-common-leftside col-lg-3 order-lg-first col-md-12 order-md-last">
    <div class="ec-sidebar-slider">
        <h5 class="ec-sb-slider-title">Best Sellers</h5>
        <div class="ec-sb-pro-sl">
            @foreach ($bestSellingProducts as $bestSellingProduct)
            @endforeach
            <div>
                <div class="ec-sb-pro-sl-item">
                    <a href="{{ url('product/' . $bestSellingProduct->slug) }}" class="sidekka_pro_img"><img
                            src="{{ $bestSellingProduct->getFirstMediaUrl('product_image') }}" alt="product" /></a>
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
                            <span class="old-price">$100.00</span>
                            <span class="new-price">$80.00</span>
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Sidebar Area Start -->
