<!-- Header start  -->
<header class="ec-header">
    <!--Ec Header Top Start -->
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Top Message Start -->
                <div class="col text-center header-top-center">
                    <div class="header-top-message">
                        100% secure delivery without contacting the courier
                    </div>
                </div>
                <!-- Header Top Message End -->
                <!-- Header Top Language Currency -->
                <div class="col header-top-right d-none d-lg-block">
                    <div class="header-top-lan-curr d-flex justify-content-end">
                        <!-- Phone Number   -->
                        <div class="header-top-message"><i class='bx bxs-phone' style='color:#692c91'></i> 9810907768
                        </div>
                    </div>
                </div>
                <!-- Header Top Language Currency -->
                <!-- Header Top responsive Action -->
                <div class="col d-lg-none ">
                    <div class="ec-header-bottons">
                        <!-- Header User Start -->
                        <div class="ec-header-user dropdown">
                            @auth
                                <button class="dropdown-toggle" data-bs-toggle="dropdown"><i
                                        class="fi-rr-user"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="{{ url('profile') }}">My Account</a></li>
                                    <li>
                                        <form action="{{ url('logout') }}" method="POST">
                                            @csrf
                                            <button class="dropdown-item">Logout</button>
                                    </li>
                                </ul>
                            @else
                                <button class="dropdown-toggle" data-bs-toggle="dropdown"><i
                                        class="fi-rr-user"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="{{ url('register') }}">Register</a></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ url('/login') }}">Login</a>
                                    </li>
                                </ul>                                                                                                                      
                            @endauth


                        </div>
                        <!-- Header User End -->
                        <!-- Header Cart Start -->
                        <a href="{{ url('wishlist') }}" class="ec-header-btn ec-header-wishlist">
                            <div class="header-icon"><i class="fi-rr-heart"></i></div>
                            <span class="ec-header-count">4</span>
                        </a>
                        <!-- Header Cart End -->
                        <!-- Header Cart Start -->
                        <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                            <div class="header-icon"><i class="fi-rr-shopping-basket"></i></div>
                            <span class="ec-header-count ec-cart-count cart-count-lable">3</span>
                        </a>
                        <!-- Header Cart End -->
                        <!-- Header menu Start -->
                        <a href="#ec-mobile-menu" class="ec-header-btn ec-side-toggle d-lg-none">
                            <i class="fi-rr-menu-burger"></i>
                        </a>
                        <!-- Header menu End -->
                    </div>
                </div>
                <!-- Header Top responsive Action -->
            </div>
        </div>
    </div>
    <!-- Ec Header Top  End -->
    <!-- Ec Header Bottom  Start -->
    <div class="ec-header-bottom d-none d-lg-block">
        <div class="container position-relative">
            <div class="row">
                <div class="ec-flex">
                    <!-- Ec Header Logo Start -->
                    <div class="align-self-center">
                        <div class="header-logo">
                            <a href="{{ url('/') }}"><img src="{{ url('assets/img/Logo.png') }}"
                                    alt="Site Logo" /><img class="dark-logo"
                                    src="{{ url('assets/img/logo-white.png') }}" alt="Site Logo"
                                    style="display: none;" /></a>
                        </div>
                    </div>
                    <!-- Ec Header Logo End -->

                    <!-- EC Main Menu Start -->
                    <div id="ec-main-menu-desk" class="d-none d-lg-block sticky-nav">
                        <div class="container position-relative">
                            <div class="row">
                                <div class="col-md-12 align-self-center">
                                    <div class="ec-main-menu">
                                        <ul>
                                            <li><a href="{{ url('/') }}">Home</a></li>
                                            @forelse ($mainCategory as $data)
                                                <li class="dropdown"><a
                                                        href="javascript:void(0)">{{ $data->main_category }}</a>
                                                    @if ($data->subcategories->isNotEmpty())
                                                        <ul class="sub-menu">
                                                            @foreach ($data->subcategories as $subCategory)
                                                                <li><a
                                                                        href="{{ url('products/' . $subCategory->slug) }}">{{ $subCategory->sub_category }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @empty
                                            @endforelse

                                            <li class="dropdown"><a href="{{ url('/blog') }}">Blog</a>
                                            </li>
                                            <li class="dropdown"><a href="javascript:void(0)">Elements</a>
                                                <ul class="sub-menu">
                                                    <li><a href="elemets-products.html">Products</a></li>
                                                    <li><a href="elemets-typography.html">Typography</a></li>
                                                    <li><a href="elemets-title.html">Titles</a></li>
                                                    <li><a href="elemets-categories.html">Categories</a></li>
                                                    <li><a href="elemets-buttons.html">Buttons</a></li>
                                                    <li><a href="elemets-tabs.html">Tabs</a></li>
                                                    <li><a href="elemets-accordions.html">Accordions</a></li>
                                                    <li><a href="elemets-blog.html">Blogs</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ url('/hot-offer') }}">Hot Offers</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ec Main Menu End -->

                    <!-- Ec Header Button Start -->
                    <div class="align-self-center">
                        <div class="ec-header-bottons">
                            <!-- Header User Start -->
                            <div class="ec-header-user dropdown">
                                @auth
                                    <button class="dropdown-toggle button" data-bs-toggle="dropdown"><span>My
                                            Account</span><i class="fi fi-rr-angle-small-down"></i></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a class="dropdown-item" href="{{ url('profile') }}">My Account</a>
                                        </li>
                                        <li>
                                            <form action="{{ url('logout') }}" method="POST">
                                                @csrf
                                                <button class="dropdown-item">Logout</button>
                                            </form>
                                        </li>
                                    </ul>
                                @else
                                    <button class="dropdown-toggle button" data-bs-toggle="dropdown"><span>Login/Sign
                                            up</span><i class="fi fi-rr-angle-small-down"></i></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a class="dropdown-item" href="{{ url('register') }}">Register</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ url('/login') }}">Login</a></li>
                                    </ul>
                                @endauth

                            </div>
                            <!-- Header User End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec Header Button End -->
    <!-- Ec Header Bottom  Start -->
    <div class="ec-header-bottom d-none d-lg-block">
        <div class="container position-relative">
            <div class="row">
                <div class="ec-flex">
                    <!-- Header cat Start -->
                    <div class="header-cat-btn ec-dropdown">
                        <button class="dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fi fi-rr-menu-burger"></i><span>Shop By Catagories</span><i
                                class="fi fi-rr-angle-small-down"></i></button>
                        <ul class="sub-menu">
                            @forelse ($mainCategory as $data)
                                <li><a class="dropdown-item" href="#">{{ $data->main_category }}</a></li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                    <!-- Header cat End -->

                    <!-- Ec Header Search Start -->
                    <div class="align-self-center">
                        <div class="header-search">
                            <form class="ec-btn-group-form" action="#">
                                <input class="form-control" placeholder="Search Product Here..." type="text">
                                <button class="submit" type="submit"><i class="fi-rr-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Ec Header Search End -->

                    <!-- Ec Header Button Start -->
                    <div class="align-self-center">
                        <div class="ec-header-bottons">
                            <!-- Header wishlist Start -->
                            <a href="{{ url('/wishlist') }}" class="ec-header-btn ec-header-wishlist">
                                <div class="header-icon"><i class="fi-rr-heart"></i></div>
                                <span class="ec-header-count">4</span>
                            </a>
                            <!-- Header wishlist End -->
                            <!-- Header Cart Start -->
                            <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                                <div class="header-icon"><i class="fi-rr-shopping-basket"></i></div>
                                <span class="ec-header-count ec-cart-count cart-count-lable">3</span>
                            </a>
                            <!-- Header Cart End -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Ec Header Button End -->


    <!-- Header responsive Bottom  Start -->
    <div class="ec-header-bottom d-lg-none">
        <div class="container position-relative">
            <div class="row ">

                <!-- Ec Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="index.html"><img src="{{ url('assets/img/Logo.png') }}" alt="Site Logo" /><img
                                class="dark-logo" src="{{ url('assets/img/logo-white.png') }}" alt="Site Logo"
                                style="display: none;" /></a>
                    </div>
                </div>
                <!-- Ec Header Logo End -->
                <!-- Ec Header Search Start -->
                <div class="col">
                    <div class="header-search">
                        <form class="ec-btn-group-form" action="#">
                            <input class="form-control" placeholder="Enter Your Product Name..." type="text">
                            <button class="submit" type="submit"><i class="fi-rr-search"></i></button>
                        </form>
                    </div>
                </div>
                <!-- Ec Header Search End -->
            </div>
        </div>
    </div>
    <!-- Header responsive Bottom  End -->

    <!-- ekka Mobile Menu Start -->
    <div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
        <div class="ec-menu-title">
            <span class="menu_title">My Menu</span>
            <button class="ec-close">×</button>
        </div>
        <div class="ec-menu-inner">
            <div class="ec-menu-content">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    @forelse ($mainCategory as $data)
                        <li><a href="javascript:void(0)">{{ $data->main_category }}</a>
                            @if ($data->subcategories->isNotEmpty())
                                <ul class="sub-menu">
                                    @foreach ($data->subcategories as $subCategory)
                                        <li><a
                                                href="{{ url('products/' . $subCategory->slug) }} ">{{ $subCategory->sub_category }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>

                    @empty

                    @endforelse

                    <li class="dropdown"><a href="javascript:void(0)">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                            <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                            <li><a href="blog-detail-left-sidebar.html">Blog detail left sidebar</a></li>
                            <li><a href="blog-detail-right-sidebar.html">Blog detail right sidebar</a></li>
                            <li><a href="blog-full-width.html">Blog full width</a></li>
                            <li><a href="blog-detail-full-width.html">Blog detail full width</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/hot-offer') }}">Hot Offers</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- ekka mobile Menu End -->
</header>
<!-- Header End  -->
