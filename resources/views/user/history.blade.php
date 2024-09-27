@include('layout.header')
@include('layout.nav')
<!-- User history section -->
<section class="ec-page-content ec-vendor-uploads ec-user-account section-space-p">
    <div class="container">
        <div class="row">
            <!-- Sidebar Area Start -->
            <div class="ec-shop-leftside ec-vendor-sidebar col-lg-3 col-md-12">
                <div class="ec-sidebar-wrap ec-border-box">
                    <!-- Sidebar Category Block -->
                    <div class="ec-sidebar-block">
                        <div class="ec-vendor-block">
                            <div class="ec-vendor-block-items">
                                <ul>
                                    <li><a href="{{ url('profile') }}">User Profile</a></li>
                                    <li><a href="{{ url('user/history') }}">Order History</a></li>
                                    <li><a href="{{ url('wishlist') }}">Wishlist</a></li>
                                    <li><a href="{{ url('cart') }}">Cart</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ec-shop-rightside col-lg-9 col-md-12">
                <div class="ec-vendor-dashboard-card">
                    <div class="ec-vendor-card-header">
                        <h5>Order History</h5>
                        <div class="ec-header-btn">
                            <a class="btn btn-lg btn-primary" href="#">Shop Now</a>
                        </div>
                    </div>
                    <div class="ec-vendor-card-body">
                        <div class="ec-vendor-card-table">
                            <table class="table ec-table">
                                <thead>
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Size</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                @forelse ($order_histories as $order_id => $orderItems)
                                    <tbody>
                                        <tr>
                                            <th colspan="5">Order ID: {{ $orderItems->order_number }}</th> <!-- Optionally show order ID or timestamp -->
                                        </tr>
                                        @foreach ($orderItems as $order_history)
                                            <tr>
                                                <td>
                                                    @foreach ($orderproductImages as $orderproductImage)
                                                        @if ($orderproductImage->id == $order_history->product_id)
                                                            <img class="prod-img"
                                                                src="{{ $orderproductImage->getFirstMediaUrl('product_image') }}"
                                                                alt="product image">
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td><span>{{ $order_history->product_name }}</span></td>
                                                <td><span>{{ $order_history->size }}</span></td>
                                                <td><span>Rs. {{ $order_history->price }}</span></td>
                                                <td><span class="tbl-btn"><a class="btn btn-lg btn-primary" href="#">View</a></span></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <br>
                                @empty
                                    <tr>
                                        <td colspan="5">No order history found.</td>
                                    </tr>
                                @endforelse
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End User history section -->

@include('layout.footer')
