@include('layout.header')
@include('layout.nav')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                                                <label>Full Name*</label>
                                                <input type="text" name="firstname"
                                                    value="{{ $userDetails->name??null }}" />
                                            </span>

                                            <span class="ec-bill-wrap ec-bill-half">
                                                <label>Address</label>
                                                <input type="text" name="address" placeholder="Address Line 1"
                                                    value="{{ $userDetails->address??null }}" />
                                            </span>



                                            <span class="ec-bill-wrap ec-bill-half">
                                                <label>Country *</label>
                                                <span class="ec-bl-select-inner">
                                                    <select name="ec_select_country" id="ec-select-country"
                                                        class="ec-bill-select">
                                                        <option selected disabled>Country</option>
                                                        <option value="Nepal">Nepal</option>
                                                    </select>
                                                </span>
                                            </span>
                                            <span class="ec-bill-wrap ec-bill-half">
                                                <label>Province *</label>
                                                <span class="ec-bl-select-inner">
                                                    <select class="select2" name="province_id" id="provinceOption">
                                                        <option value=""></option>
                                                        @foreach ($provinces as $province)
                                                            <option value="{{ $province->id }}">
                                                                {{ $province->province }}</option>
                                                        @endforeach
                                                    </select>
                                                </span>
                                            </span>
                                            <span class="ec-bill-wrap ec-bill-half">
                                                <label>City *</label>
                                                <span class="ec-bl-select-inner">
                                                    <select class="select2" name="city_id" id="cityOption">
                                                        <option value=""></option>
                                                    </select>
                                                </span>
                                            </span>
                                            <span class="ec-bill-wrap ec-bill-half">
                                                <label>Area</label>
                                                <span class="ec-bl-select-inner">
                                                    <select class="select2" name="area_id" id="areaOption">
                                                        <option value=""></option>
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
                                    <span class="text-right"><span id="subTotal">0.00</span></span>
                                </div>
                                <div>
                                    <span class="text-left">Delivery Charges</span>
                                    <span class="text-right" id="delivery_charge">Rs. </span>
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
                                    <span class="text-right"><span id="totalAmount">0.00</span></span>
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
                                                                <img class="main-image"
                                                                    src="{{ $cartproductImage->getFirstMediaUrl('product_image') }}"
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
                                            <input type="radio" id="pay1" name="radio-group" checked
                                                class="form-check-input">
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

<script>
    $(document).ready(function() {
        $('#provinceOption').on('change', function() {
            var selectedOption = $(this).val();
            if (selectedOption !== "") {
                // Retrieve the data based on the selected option's value
                $.ajax({
                    url: '/user/checkout/cities/' + selectedOption,
                    method: 'GET',
                    success: function(response) {
                        // Clear previous options
                        $('#cityOption').empty();

                        // Append new options based on retrieved data
                        for (var i = 0; i < response.length; i++) {
                            var option = $('<option>');
                            option.val(response[i].id);
                            option.text(response[i].city);
                            $('#cityOption').append(option);
                        }
                    }
                });
            } else {
                // Clear the second field if no option is selected
                $('#cityOption').empty();
            }
        });
    });

    $(document).ready(function() {
        $('#cityOption').on('change', function() {
            var selectedOption = $(this).val();
            if (selectedOption !== "") {
                // Retrieve the data based on the selected option's value
                $.ajax({
                    url: '/user/checkout/areas/' + selectedOption,
                    method: 'GET',
                    success: function(response) {
                        // Clear previous options
                        $('#areaOption').empty();

                        // Append new options based on retrieved data
                        for (var i = 0; i < response.length; i++) {
                            var option = $('<option>');
                            option.val(response[i].id);
                            option.text(response[i].area);
                            $('#areaOption').append(option);
                        }
                        $('#delivery_charge').text(response.delivery_charge)
                    }
                });
            } else {
                // Clear the second field if no option is selected
                $('#areaOption').empty();
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: 'Select an option'
        });
    });
</script>


<script>
    $(document).ready(function() {
        // Function to update total price
        function updateTotalPrice() {
            var total = 0; // Initialize total price to zero

            // Loop through each item in the cart
            $(".ec-pro-content").each(function() {
                var price = parseFloat($(this).find(".new-price").text().replace('Rs. ', '').trim()) ||
                    0;

                total += price; // Multiply price by quantity and add to total
            });

            // Update the total price on the page
            $('#totalAmount').text('Rs. ' + total.toFixed(2));
            $('#subTotal').text('Rs. ' + total.toFixed(2));
        }

        // Call the function when the page is loaded
        updateTotalPrice();


    });
</script>
