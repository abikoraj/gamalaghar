@forelse ($resultedProducts as $productData)
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
        <div class="ec-product-inner">
            <div class="ec-pro-image-outer">
                <div class="ec-pro-image">
                    <a href="{{ url('product/' . $productData->slug) }}" class="image">
                        <img class="main-image" src="{{ url('assets/img/8_1.jpg') }}" alt="Product" />
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
    <img src="{{ url('assets/img/Empty-rafiki.png') }}" alt="Wishlist image" class="img-fluid d-block mx-auto"
        style="width: 40%" />
@endforelse
