@include('layout.header')
@include('layout.nav')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Ec checkout page -->
<section class="ec-page-content section-space-p">
    <div class="container">
        <form action="{{ url('user/order') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="ec-checkout-leftside col-lg-8 col-md-12">
                    <!-- Checkout content Start -->
                    <div class="ec-checkout-content">
                        <div class="ec-checkout-inner">
                            <div class="ec-checkout-wrap margin-bottom-30 padding-bottom-3">
                                <div class="ec-checkout-block ec-check-bill">
                                    <h3 class="ec-checkout-title">Billing Details</h3><br>
                                    <div class="ec-bl-block-content">
                                        <div class="ec-check-bill-form">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label>Full Name*</label>
                                                    <input type="text" name="fullname"
                                                        value="{{ $userDetails->name ?? null }}" />
                                                    @error('fullname')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-6">
                                                    <label>Address</label>
                                                    <input type="text" name="address" placeholder="Address Line 1"
                                                        value="{{ $userDetails->address ?? null }}" />
                                                    @error('address')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label>Province *</label>
                                                    <span class="ec-bl-select-inner">
                                                        <select class="select2" name="province_id" id="provinceOption">
                                                            <option value=""></option>
                                                            @foreach ($provinces as $province)
                                                                <option value="{{ $province->id }}">
                                                                    {{ $province->province }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('province_id')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label>City *</label>
                                                    <span class="ec-bl-select-inner">
                                                        <select class="select2" name="city_id" id="cityOption">
                                                            <option value=""></option>
                                                        </select>
                                                        @error('city_id')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label>Area</label>
                                                    <span class="ec-bl-select-inner">
                                                        <select class="select2" name="area_id" id="areaOption">
                                                            <option value=""></option>
                                                        </select>
                                                        @error('area_id')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-check-order-btn">
                                <input type="hidden" id="subTotal" name="sub_total" value="{{ $sub_total }}">
                                <input type="hidden" id="delivery_Charge" name="delivery_charge" value="100">
                                <input type="hidden" name="total_amount" value="{{ $sub_total + 100 }}">
                                <button type="submit" class="btn btn-primary">Place Order</button>
                            </div>
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
                                        <span class="text-right"><span id="sub_Total">{{ $sub_total }}</span></span>
                                    </div>
                                    <div>
                                        <span class="text-left">Delivery Charges</span>
                                        <span class="text-right" id="delivery_charge"></span>
                                    </div>
                                    <div class="ec-checkout-summary-total">
                                        <span class="text-left">Total Amount</span>
                                        <span class="text-right"><span
                                                id="total_Amount">{{ $sub_total + 100 }}</span></span>
                                    </div>
                                </div>
                                <div class="ec-checkout-pro">
                                    @foreach ($selectedProducts as $products)
                                        <div class="col-sm-12 mb-6">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer mb-2">
                                                    <div class="ec-pro-image p-2">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            @foreach ($cartproductImages as $cartproductImage)
                                                                @if ($cartproductImage->id == $products->id)
                                                                    @if ($cartproductImage->productImages->isNotEmpty())
                                                                        @php
                                                                            $firstImage = $cartproductImage->productImages->first();
                                                                            $firstMedia = $firstImage
                                                                                ->getMedia('product_image')
                                                                                ->first();
                                                                        @endphp

                                                                        @if ($firstMedia)
                                                                            <img src="{{ $firstMedia->getUrl() }}"
                                                                                class="main-image">
                                                                        @endif
                                                                    @else
                                                                        <img class="main-image"
                                                                            src="{{ $cartproductImage->getFirstMediaUrl('product_image') }}"
                                                                            alt="Product" />
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content mt-3">
                                                    <h5 class="ec-pro-title "><a
                                                            href="product-left-sidebar.html">{{ $products->product_name }}</a>
                                                    </h5>
                                                    <span class="ec-price">
                                                        <span class="new-price mx-4">Rs. {{ $products->price }}x
                                                            <span>{{ $products->quantity }}</span></span>
                                                    </span>
                                                    <div class="ec-pro-size mx-4">
                                                        <span class="ec-pro-opt-label">Size:
                                                            {{ $products->size }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" value="{{ $products->id }}" name="product_id[]">
                                        <input type="hidden" value="{{ $products->product_name }}"
                                            name="product_name[]">
                                        <input type="hidden" value="{{ $products->size }}" name="size[]">
                                        <input type="hidden" value="{{ $products->price }}" name="price[]">
                                        <input type="hidden" value="{{ $products->quantity }}" name="quantity[]">
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
                                            @forelse ($paymentOptions as $paymentOption)
                                                <span>
                                                    <input type="radio" id="pay1" name="payment_option"
                                                        class="form-check-input" value="{{ $paymentOption->id }}">
                                                    <label for="pay1">{{ $paymentOption->payment_name }}</label>
                                                </span>
                                                @error('payment_option')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            @empty
                                            @endforelse
                                        </span>
                                        <span class="ec-pay-commemt">
                                            <span class="ec-pay-opt-head">Add Comments About Your Order</span>
                                            <textarea name="comment" placeholder="Comments"></textarea>
                                        </span>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Payment Block -->
                    </div>
                </div>
            </div>
        </form>
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

    $(document).ready(function() {
        $('#areaOption').on('change', function() {
            var selectedOption = $(this).val();
            if (selectedOption !== "") {
                // Retrieve the data based on the selected option's value
                $.ajax({
                    url: '/user/checkout/areas/deliveryCharge/' + selectedOption,
                    method: 'GET',
                    success: function(response) {
                        var deliveryCharge = response.delivery_charge;
                        $('#delivery_charge').text('Rs. ' + deliveryCharge);
                        $('#deliveryCharge').val(deliveryCharge);

                        // Calculate the new total amount
                        var subTotal = parseFloat('{{ $sub_total }}');
                        var totalAmount = subTotal + parseFloat(deliveryCharge);

                        // Update the total amount in the UI
                        $('#total_Amount').text('Rs. ' + totalAmount);
                    }
                });
            } else {
                $('#delivery_charge').text('N/A');
                // Reset total amount to subTotal since delivery charge is not applicable
                $('#total_Amount').text('Rs. {{ $sub_total }}');
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


<style>
    .select2-container--default .select2-selection--single {
        height: 48px;
        outline: none;
        font-size: 16px;
        padding: 10px;
    }

    .select2-search__field {

        height: 30px !important;
        /* Adjust height as needed */
        font-size: 16px;
        /* Adjust font size as needed */
    }

    .select2-selection__arrow {
        display: none !important;
        /* Hide the arrow */
    }
</style>
