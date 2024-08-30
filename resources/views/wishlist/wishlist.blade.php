@include('layout.header')
@include('layout.nav')
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
                            @auth
                                @forelse ($wishLists as $wishList)
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        @foreach ($productImages as $productImage)
                                                        @if($productImage->id == $wishList->id)
                                                            <img src="{{ $productImage->getFirstMediaUrl('product_image') }}"
                                                                alt="{{ $wishList->product_name }}">
                                                                @endif
                                                        @endforeach
                                                    </a>
                                                    <span class="percentage">20%</span>
                                                    <span class="ec-com-remove ec-remove-wish">
                                                        <a href="#">x</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a
                                                        href="{{ url('product/' . $wishList->slug) }}">{{ $wishList->product_name }}</a>
                                                </h5>
                                                <div class="ec-pro-rating px-3">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </div>
                                                <span class="ec-price px-3">
                                                    <span class="new-price">${{ $wishList->price }}</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                <img src="{{url('assets/img/Empty-rafiki.png')}}" alt="Wishlist image" class="img-fluid d-block mx-auto" style="max-width: 300px;"/>
                                @endforelse
                            @else
                                <h2 class="text-center m-5">Kindly proceed with logging in to access the wishlist.</h2>
                            @endauth
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
