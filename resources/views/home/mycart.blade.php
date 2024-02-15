<!-- Ekka Cart Start -->
<div class="ec-side-cart-overlay"></div>
<div id="ec-side-cart" class="ec-side-cart">
    <div class="ec-cart-inner">
        <div class="ec-cart-top">
            <div class="ec-cart-title">
                <span class="cart_title">My Cart</span>
                <button class="ec-close">×</button>
            </div>
            <ul class="eccart-pro-items">
                @forelse ($cart as $cartData)
                    <li>
                        <a href="product-left-sidebar.html" class="sidecart_pro_img">
                            @foreach ($productImages as $productImage)
                                <img src="{{ $productImage->getFirstMediaUrl('product_image') }}" alt="product">
                            @endforeach
                        </a>

                        <div class="ec-pro-content">
                            <a href="single-product-left-sidebar.html"
                                class="cart_pro_title">{{ $cartData->product_name }}</a>
                            <span class="cart-price"><span>Rs. {{ $cartData->price }}</span> x
                                {{ $cartData->quantity }}</span>
                            <div class="ec-pro-variation-inner ec-pro-variation-size">
                                <span>SIZE: {{ $cartData->size }}</span>
                            </div>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="quantity" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                @empty
                @endforelse

            </ul>
        </div>
        <div class="ec-cart-bottom">
            <div class="cart-sub-total">
                <table class="table cart-table">
                    <tbody>
                        <tr>
                            <td class="text-left">Sub-Total :</td>
                            <td class="text-right">$300.00</td>
                        </tr>
                        <tr>
                            <td class="text-left">VAT (20%) :</td>
                            <td class="text-right">$60.00</td>
                        </tr>
                        <tr>
                            <td class="text-left">Total :</td>
                            <td class="text-right primary-color">$360.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cart_btn">
                <a href="cart.html" class="btn btn-primary">View Cart</a>
                <a href="checkout.html" class="btn btn-secondary">Checkout</a>
            </div>
        </div>
    </div>
</div>
<!-- Ekka Cart End -->
