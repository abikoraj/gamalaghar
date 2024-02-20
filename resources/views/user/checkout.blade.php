@include('layout.header')
@include('layout.nav')
@include('breadcrumb')
<!-- Ec checkout page -->
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-checkout-leftside col-lg-8 col-md-12 ">
                <!-- checkout content Start -->
                <div class="ec-checkout-content">
                    <div class="ec-checkout-inner">

                        <div class="ec-checkout-wrap margin-bottom-30 padding-bottom-3">
                            <div class="ec-checkout-block ec-check-bill">
                                <h3 class="ec-checkout-title">Billing Details</h3><br>
                                <div class="ec-bl-block-content">


                                    <div class="ec-check-bill-form">
                                        <form action="#" method="post">
                                            <span class="ec-bill-wrap ec-bill-half">
                                                <label>First Name*</label>
                                                <input type="text" name="firstname"
                                                    placeholder="Enter your first name" required />
                                            </span>
                                            <span class="ec-bill-wrap ec-bill-half">
                                                <label>Last Name*</label>
                                                <input type="text" name="lastname" placeholder="Enter your last name"
                                                    required />
                                            </span>
                                            <span class="ec-bill-wrap">
                                                <label>Address</label>
                                                <input type="text" name="address" placeholder="Address Line 1" />
                                            </span>
                                            <span class="ec-bill-wrap ec-bill-half">
                                                <label>City *</label>
                                                <span class="ec-bl-select-inner">
                                                    <select name="ec_select_city" id="ec-select-city"
                                                        class="ec-bill-select">
                                                        <option selected disabled>City</option>
                                                        <option value="1">City 1</option>
                                                        <option value="2">City 2</option>
                                                        <option value="3">City 3</option>
                                                        <option value="4">City 4</option>
                                                        <option value="5">City 5</option>
                                                    </select>
                                                </span>
                                            </span>
                                            <span class="ec-bill-wrap ec-bill-half">
                                                <label>Post Code</label>
                                                <input type="text" name="postalcode" placeholder="Post Code" />
                                            </span>
                                            <span class="ec-bill-wrap ec-bill-half">
                                                <label>Country *</label>
                                                <span class="ec-bl-select-inner">
                                                    <select name="ec_select_country" id="ec-select-country"
                                                        class="ec-bill-select">
                                                        <option selected disabled>Country</option>
                                                        <option value="1">Country 1</option>
                                                        <option value="2">Country 2</option>
                                                        <option value="3">Country 3</option>
                                                        <option value="4">Country 4</option>
                                                        <option value="5">Country 5</option>
                                                    </select>
                                                </span>
                                            </span>
                                            <span class="ec-bill-wrap ec-bill-half">
                                                <label>Region State</label>
                                                <span class="ec-bl-select-inner">
                                                    <select name="ec_select_state" id="ec-select-state"
                                                        class="ec-bill-select">
                                                        <option selected disabled>Region/State</option>
                                                        <option value="1">Region/State 1</option>
                                                        <option value="2">Region/State 2</option>
                                                        <option value="3">Region/State 3</option>
                                                        <option value="4">Region/State 4</option>
                                                        <option value="5">Region/State 5</option>
                                                    </select>
                                                </span>
                                            </span>
                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <span class="ec-check-order-btn">
                            <a class="btn btn-primary" href="#">Place Order</a>
                        </span>
                    </div>
                </div>
                <!--cart content End -->
            </div>
            <!-- Sidebar Area Start -->
            <div class="ec-checkout-rightside col-lg-4 col-md-12">
                <div class="ec-sidebar-wrap">
                    <!-- Sidebar Summary Block -->
                    <div class="ec-sidebar-block">
                        <div class="ec-sb-title">
                            <h3 class="ec-sidebar-title">Summary</h3>
                        </div>
                        <div class="ec-sb-block-content">
                            <div class="ec-checkout-summary">
                                <div>
                                    <span class="text-left">Sub-Total</span>
                                    <span class="text-right">Rs. {{ $selectedProducts->first()->price }}</span>
                                </div>
                                <div>
                                    <span class="text-left">Delivery Charges</span>
                                    <span class="text-right">$80.00</span>
                                </div>
                                <div>
                                    <span class="text-left">Coupan Discount</span>
                                    <span class="text-right"><a class="ec-checkout-coupan">Apply Coupan</a></span>
                                </div>
                                <div class="ec-checkout-coupan-content">
                                    <form class="ec-checkout-coupan-form" name="ec-checkout-coupan-form" method="post"
                                        action="#">
                                        <input class="ec-coupan" type="text" required=""
                                            placeholder="Enter Your Coupan Code" name="ec-coupan" value="">
                                        <button class="ec-coupan-btn button btn-primary" type="submit" name="subscribe"
                                            value="">Apply</button>
                                    </form>
                                </div>
                                <div class="ec-checkout-summary-total">
                                    <span class="text-left">Total Amount</span>
                                    <span class="text-right">$80.00</span>
                                </div>
                            </div>
                            <div class="ec-checkout-pro">
                                @foreach ($selectedProducts as $products)
                                    <div class="col-sm-12 mb-6">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">

                                                        @foreach ($cartproductImages as $cartproductImage)
                                                            @if ($cartproductImage->id == $products->id)
                                                                <img class="main-image" src="{{ $cartproductImage->getFirstMediaUrl('product_image') }}"
                                                                    alt="product">
                                                            @endif
                                                        @endforeach



                                                        
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title "><a
                                                        href="product-left-sidebar.html">{{ $products->product_name }}</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="new-price mx-4">Rs. {{ $products->price }}</span>
                                                </span>
                                                <div class="ec-pro-size mx-4">
                                                    <span class="ec-pro-opt-label">Size: {{ $products->size }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar Summary Block -->
                </div>

                <div class="ec-sidebar-wrap ec-checkout-pay-wrap">
                    <!-- Sidebar Payment Block -->
                    <div class="ec-sidebar-block">
                        <div class="ec-sb-title">
                            <h3 class="ec-sidebar-title">Payment Method</h3>
                        </div>
                        <div class="ec-sb-block-content">
                            <div class="ec-checkout-pay">
                                <div class="ec-pay-desc">Please select the preferred payment method to use on this
                                    order.</div>
                                <form action="#">
                                    <span class="ec-pay-option">
                                        <span>
                                            <input type="radio" id="pay1" name="radio-group" checked class="form-check-input">
                                            <label for="pay1">Cash On Delivery</label>
                                        </span>
                                    </span>
                                    <span class="ec-pay-commemt">
                                        <span class="ec-pay-opt-head">Add Comments About Your Order</span>
                                        <textarea name="your-commemt" placeholder="Comments"></textarea>
                                    </span>
                                   
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar Payment Block -->
                </div>
                
            </div>
        </div>
    </div>
</section>
@include('user.new_product')
@include('layout.footer')
