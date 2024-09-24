<!-- Footer Section Start -->
<footer class="section ec-footer-sec">
    <div class="footer-container ec-footer">
        <div class="footer-top section-space-footer">
            <div class="container">
                <div class="row">
                    <!-- Footer Logo and Description -->
                    <div class="col-md-8 ec-footer-cat">
                        <div class="ec-footer-widget">
                            <div class="footer-logo">
                                <a href="index.html">
                                    <img src="{{ url('assets/img/Logo.png') }}" alt="Site Logo" />
                                    <img class="dark-logo" src="{{ url('assets/img/logo-white.png') }}" alt="Site Logo"
                                        style="display: none;" />
                                </a>
                            </div>
                            <p>At Gamala Ghar, customers can explore a diverse array of indoor plants suitable for
                                various preferences and living spaces. Whether it's lush foliage plants like peace
                                lilies and snake plants, or flowering varieties like orchids and begonias, there's
                                something for every taste and style.</p>
                        </div>
                    </div>
                    <!-- Social Links -->
                    <div class="col-sm-12 col-lg-2 ec-footer-cat">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading">Socials</h4>
                            <div class="ec-footer-links ec-footer-dropdown">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link"><a href="https://www.facebook.com/gamala.gharnp"
                                            target="_blank">Facebook</a></li>
                                    <li class="ec-footer-link"><a href="https://www.instagram.com/gamala.gharnp/"
                                            target="_blank">Instagram</a></li>
                                    <li class="ec-footer-link"><a href="https://www.youtube.com/@gamalaghar3745"
                                            target="_blank">YouTube</a></li>
                                    <li class="ec-footer-link"><a href="https://www.tiktok.com/@gamalaghar"
                                        target="_blank">Tiktok</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Quick Links -->
                    <div class="col-sm-12 col-lg-2 ec-footer-cat">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading">Quick Links</h4>
                            <div class="ec-footer-links ec-footer-dropdown">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link"><a href="{{ url('about-us') }}">About Us</a></li>
                                    <li class="ec-footer-link"><a href="#">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Copyright Start -->
        <div class="container">
            <div class="footer-copy">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-bottom-copy">
                            <div class="ec-copy">
                                Copyright © <span id="copyright_year"></span>
                                <a style="color: #692c91 !important;" class="site-name"
                                    href="{{ url('/') }}">Gamala Ghar 2024 | www.gamalaghar.com</a>
                                All rights reserved
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="privacy">
                            <a class="green-text" href="{{ url('terms-condition') }}">Terms of Use</a>
                            <span><a href="{{ url('privacy-policy') }}">| Privacy Policy</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Copyright End -->
    </div>
</footer>
<!-- Footer Section End -->

<!-- Click To Call -->
<div class="ec-cc-style cc-right-bottom">
    <div class="cc-panel">
        <div class="cc-header">
            <img src="{{ url('assets/img/Logo.png') }}" alt="profile image" />
            <h2>John Mark</h2>
            <p>Technical Manager</p>
        </div>
        <div class="cc-body">
            <p><b>Hey there &#128515;</b></p>
            <p>Need help? Just give me a call.</p>
        </div>
        <div class="cc-footer">
            <a href="tel:+9779813371345" class="cc-call-button">
                <span>Call me</span>
            </a>
        </div>
    </div>
    <div class="cc-button cc-right-bottom">
        <i class="fi-rr-phone-call"></i>
    </div>
</div>
<!-- Click To Call End -->

<!-- Footer Navigation Panel for Responsive Display -->
<div class="ec-nav-toolbar">
    <div class="container">
        <div class="ec-nav-panel">
            <div class="ec-nav-panel-icons">
                <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><i
                        class="fi fi-rr-menu-burger"></i></a>
            </div>
            <div class="ec-nav-panel-icons">
                <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle">
                    <i class="fi-rr-shopping-basket"></i>
                    @if ($countCarts)
                        <span class="ec-cart-noti ec-header-count cart-count-label">{{ $countCarts }}</span>
                    @endif
                </a>
            </div>
            <div class="ec-nav-panel-icons">
                <a href="{{ url('/') }}" class="ec-header-btn"><i class="fi-rr-home"></i></a>
            </div>
            <div class="ec-nav-panel-icons">
                <a href="{{ url('wishlist') }}" class="ec-header-btn">
                    <i class="fi-rr-heart"></i>
                    @if ($countWishList)
                        <span class="ec-cart-noti">{{ $countWishList }}</span>
                    @endif
                </a>
            </div>
            <div class="ec-nav-panel-icons">
                @auth
                    <a href="{{ url('profile') }}" class="ec-header-btn"><i class="fi-rr-user"></i></a>
                @else
                    <a href="{{ url('/login') }}" class="ec-header-btn"><i class="fi-rr-user"></i></a>
                @endauth
            </div>
        </div>
    </div>
</div>
<!-- Footer Navigation Panel for Responsive Display End -->

<!-- Vendor JS -->
<script src="{{ url('assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ url('assets/js/popper.min.js') }}"></script>
<script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ url('assets/js/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{ url('assets/js/modernizr-3.11.2.min.js') }}"></script>
<script src="{{ url('assets/js/jquery.sticky-sidebar.js') }}"></script>
<script src="{{ url('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ url('assets/js/countdownTimer.min.js') }}"></script>
<script src="{{ url('assets/js/nouislider.js') }}"></script>
<script src="{{ url('assets/js/scrollup.js') }}"></script>
<script src="{{ url('assets/js/jquery.zoom.min.js') }}"></script>
<script src="{{ url('assets/js/slick.min.js') }}"></script>
<script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ url('assets/js/infiniteslidev2.js') }}"></script>
<script src="{{ url('assets/js/click-to-call.js') }}"></script>
<script src="{{ url('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ url('assets/js/index.js') }}"></script>
<script src="{{ url('assets/js/demo-11.js') }}"></script>
{{-- <script src="{{ url('assets/js/main.js') }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

@livewireScripts

<script>
    $(document).ready(function() {
        $('#cart').click(function() {
            $.ajax({
                url: 'cart',
                type: 'POST',
                data: {
                    product_id: 123,
                    quantity: 1
                },
                success: function(response) {
                    // Handle success response
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        function updateTotalPrice() {
            var total = 0;
            $("li").each(function() {
                var price = parseFloat($(this).find(".cart-price").text().replace('Rs. ', '').trim()) ||
                    0;
                var quantity = parseFloat($(this).find(".qty-input").text()) || 0;
                total += price * quantity;
            });
            $('#total-price').text('Rs. ' + total.toFixed(2));
        }

        updateTotalPrice();

        $(".qty-input").on('change', function() {
            updateTotalPrice();
        });

        function updateQuantityValue(newValue) {
            $(".qty-input").val(newValue).trigger('change');
        }
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/layui/2.9.8/layui.js"></script>
<script>
    layui.use(['rate'], function() {
        var rate = layui.rate;

        rate.render({
            elem: '#ID-rate-demo',
            half: true,
            choose: function(value) {
                console.log(value);
                $('#ratingInput').val(value);
            }
        });

        rate.render({
            elem: '.user_rating_data',
            readonly: true
        });
        rate.render({
            elem: '.average_user_rating',
            readonly: true
        });
    });
</script>

<script>
    $(document).ready(function() {
        // Automatically highlight the last option
        var $lastOption = $('.ec-pro-variation-content .size-option').last();
        $lastOption.addClass('active');

        $('.ec-pro-variation-content').on('click', 'li.size-option', function(e) {
            e.preventDefault();

            var sizeId = $(this).data('size-id');
            var productId = $('#product-id').val();

            // Remove 'active' class from all size options
            $('.ec-pro-variation-content .size-option').removeClass('active');

            // Add 'active' class to the clicked size option
            $(this).addClass('active');

            $.ajax({
                url: '{{ route('get.price') }}',
                method: 'GET',
                data: {
                    size_id: sizeId,
                    product_id: productId
                },
                success: function(response) {
                    if (response.error) {
                        alert(response.error);
                    } else {
                        $('#product-new-price').text('Rs. ' + response.price);
                        $('#product_size_price_id').val(response.productsizeid);
                        $('#product-stock-value').text(response.stock);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script>

</body>

</html>
