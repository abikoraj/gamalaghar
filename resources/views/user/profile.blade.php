@include('layout.header')
@include('layout.nav')
@include('breadcrumb')

<!-- User profile section -->
<section class="ec-page-content ec-vendor-uploads ec-user-account section-space-p">
    <div class="container">
        <div class="row">
            <!-- Sidebar Area Start -->
            <div class="ec-shop-leftside ec-vendor-sidebar col-lg-3 col-md-12">
                <div class="ec-sidebar-wrap ec-border-box">
                    <!-- Sidebar Category Block -->
                    <div class="ec-sidebar-block">
                        <div class="ec-vendor-block">
                            <!-- <div class="ec-vendor-block-bg"></div>
                            <div class="ec-vendor-block-detail">
                                <img class="v-img" src="assets/images/user/1.jpg" alt="vendor image">
                                <h5>Mariana Johns</h5>
                            </div> -->
                            <div class="ec-vendor-block-items">
                                <ul>
                                    <li><a href="user-profile.html">User Profile</a></li>
                                    <li><a href="user-history.html">History</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="track-order.html">Track Order</a></li>
                                    <li><a href="user-invoice.html">Invoice</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ec-shop-rightside col-lg-9 col-md-12">
                <div class="ec-vendor-dashboard-card ec-vendor-setting-card">
                    <div class="ec-vendor-card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="ec-vendor-block-profile">
                                    <div class="ec-vendor-block-img space-bottom-30">
                                        <div class="ec-vendor-block-bg">
                                            <a href="#" class="btn btn-lg btn-primary"
                                                data-link-action="editmodal" title="Edit Detail" data-bs-toggle="modal"
                                                data-bs-target="#edit_modal">Edit Detail</a>
                                        </div>
                                        <div class="ec-vendor-block-detail">
                                            <img class="v-img" src="assets/images/user/1.jpg" alt="vendor image">
                                            <h5 class="name">{{ $user->name }}</h5>
                                        </div>
                                        <p>Hello <span class="user-profile">{{ $user->name }}!</span></p>
                                        <p>From your account you can easily view and track orders. You can manage and
                                            change your account information like address, contact information and
                                            history of orders.</p>
                                    </div>
                                    <h5>Account Information</h5>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="ec-vendor-detail-block ec-vendor-block-email space-bottom-30">
                                                <h6>E-mail address <a href="javasript:void(0)"
                                                        data-link-action="editmodal" title="Edit Detail"
                                                        data-bs-toggle="modal" data-bs-target="#edit_modal"><i
                                                            class="fi-rr-edit"></i></a></h6>
                                                <ul>
                                                    <li><strong class="user-profile">Email: </strong>{{ $user->email }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="ec-vendor-detail-block ec-vendor-block-contact space-bottom-30">
                                                <h6>Contact nubmer<a href="javasript:void(0)"
                                                        data-link-action="editmodal" title="Edit Detail"
                                                        data-bs-toggle="modal" data-bs-target="#edit_modal"><i
                                                            class="fi-rr-edit"></i></a></h6>
                                                <ul>
                                                    @if ($user->userDetail)
                                                        @if (is_null($user->userDetail->secondary_phone))
                                                            <li><strong class="user-profile">Phone Number:
                                                                </strong>{{ $user->phone }}</li>
                                                        @else
                                                            <li><strong class="user-profile">Phone Number 1:
                                                                </strong>{{ $user->phone }}
                                                            </li>
                                                            <li><strong class="user-profile">Phone Number 2:
                                                                </strong>{{ $user->userDetail->secondary_phone }}</li>
                                                        @endif
                                                    @else
                                                        <li><strong class="user-profile">Phone Number:
                                                            </strong>{{ $user->phone }}</li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="ec-vendor-detail-block ec-vendor-block-address mar-b-30">
                                                <h6>Address<a href="javasript:void(0)" data-link-action="editmodal"
                                                        title="Edit Detail" data-bs-toggle="modal"
                                                        data-bs-target="#edit_modal"><i class="fi-rr-edit"></i></a></h6>
                                                <ul>
                                                    <li><strong class="user-profile">Home : </strong>
                                                        @if ($user->userDetail)
                                                            {{ $user->userDetail->address }}
                                                        @else
                                                            No Address Added
                                                        @endif
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="ec-vendor-detail-block ec-vendor-block-address">
                                                <h6>Shipping Address<a href="javasript:void(0)"
                                                        data-link-action="editmodal" title="Edit Detail"
                                                        data-bs-toggle="modal" data-bs-target="#edit_modal"><i
                                                            class="fi-rr-edit"></i></a></h6>
                                                <ul>
                                                    <li><strong class="user-profile">Shipping : </strong>
                                                        @if ($user->userDetail)
                                                            {{ $user->userDetail->shipping_address }}
                                                        @else
                                                            No Address Added
                                                        @endif
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End User profile section -->

@include('user.edit_details')

@include('layout.footer')
