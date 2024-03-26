<div class="top-navbar bg-white z-1035 h-35px h-sm-auto">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col">
            </div>
            <div class="col-6 text-right d-none d-lg-block">


                @if (!Auth::check())
    <ul class="list-inline mb-0 h-100 d-flex justify-content-end align-items-center">
        <li class="list-inline-item mr-0 pl-0 py-2">
            <a href="" class="text-secondary fs-12 pr-3 d-inline-block border-width-2 border-right">
                Become a Seller!
            </a>
        </li>
        <li class="list-inline-item mr-0 pl-0 py-2">
            <a href="" class="text-secondary fs-12 pl-3 d-inline-block">Login to Seller</a>
        </li>
        <li class="list-inline-item ml-3 pl-3 mr-0 pr-0">
            <a href="" class="text-secondary fs-12 d-inline-block py-2">
                <span>Helpline</span>
                <span>+11 555 555 555</span>
            </a>
        </li>
    </ul>
@endif

            </div>
        </div>
    </div>
</div>

<header class=" sticky-top  z-1020 bg-white">
    <!-- Search Bar -->
    <div class="position-relative logo-bar-area border-bottom border-md-nonea z-1025">
        <div class="container">
            <div class="d-flex align-items-center">
                <!-- top menu sidebar button -->
                <button type="button" class="btn d-lg-none mr-3 mr-sm-4 p-0 active" data-toggle="class-toggle"
                        data-target=".aiz-top-menu-sidebar">
                    <img src="./images/icons/menu.png" alt="" width="18" />
                </button>
                <div class="col-auto pl-0 pr-1 d-flex align-items-center">
                    <a class="d-block py-20px mr-3 ml-0" href="/">
                        <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/9HqWWq2GdVeMm2UKONxeNB4Yyffn7r8MuMoe37RR.svg"
                             alt="" class="mw-50 h-30px h-md-40px" height="40">
                    </a>
                </div>
                <div class="d-lg-none ml-auto mr-0">
                    <div class="p-2 d-block text-reset" data-toggle="class-toggle"
                         data-target=".front-header-search">
                        <i class="fa fa-search text-secondary la-flip-horizontal la-2x"></i>
                    </div>
                </div>
                <div class="flex-grow-1 front-header-search d-flex align-items-center bg-white mx-xl-2">
                    <div class="position-relative flex-grow-1 px-3 px-lg-0">
                        <form action="" method="GET" class="stop-propagation">
                            <div class="d-flex position-relative align-items-center">
                                <div class="d-lg-none" data-toggle="class-toggle"
                                     data-target=".front-header-search">
                                    <button class="btn px-2" type="button">
                                        <i class="fa fa-long-arrow-left la-2x text-secondary"></i>
                                    </button>
                                </div>
                                <div class="search-input-box">
                                    <input type="text"
                                           class="border border-soft-light form-control fs-14 hov-animate-outline"
                                           id="search" name="keyword" placeholder="I am shopping for..."
                                           autocomplete="off">
                                    <svg id="Group_723" data-name="Group 723" xmlns="http://www.w3.org/2000/svg"
                                         width="20.001" height="20" viewBox="0 0 20.001 20">
                                        <path id="Path_3090" data-name="Path 3090"
                                              d="M9.847,17.839a7.993,7.993,0,1,1,7.993-7.993A8,8,0,0,1,9.847,17.839Zm0-14.387a6.394,6.394,0,1,0,6.394,6.394A6.4,6.4,0,0,0,9.847,3.453Z"
                                              transform="translate(-1.854 -1.854)" fill="#b5b5bf" />
                                        <path id="Path_3091" data-name="Path 3091"
                                              d="M24.4,25.2a.8.8,0,0,1-.565-.234l-6.15-6.15a.8.8,0,0,1,1.13-1.13l6.15,6.15A.8.8,0,0,1,24.4,25.2Z"
                                              transform="translate(-5.2 -5.2)" fill="#b5b5bf" />
                                    </svg>
                                </div>
                            </div>
                        </form>
                        <div class="typed-search-box stop-propagation document-click-d-none d-none bg-white rounded shadow-lg position-absolute left-0 top-100 w-100"
                             style="min-height: 200px">
                            <div class="search-preloader absolute-top-center">
                                <div class="dot-loader">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="search-nothing d-none p-3 text-center fs-16">
                            </div>
                            <div id="search-content" class="text-left">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-none ml-3 mr-0">
                    <div class="nav-search-box">
                        <a href="#" class="nav-box-link">
                            <i class="la la-search la-flip-horizontal d-inline-block nav-box-icon"></i>
                        </a>
                    </div>
                </div>
                <div class="d-none d-lg-block ml-3 mr-0">
                    <div class="" id="compare">
                        <a href="" class="d-flex align-items-center text-dark" data-toggle="tooltip"
                           data-title="Compare" data-placement="top">
                                <span class="position-relative d-inline-block">
                                    <img width="18" height="18" src="./images/icons/sync.png" alt="">
                                </span>
                        </a>
                    </div>
                </div>
                <div class="d-none d-lg-block mr-3" style="margin-left: 36px;">
                    <div class="" id="wishlist">
                        <a href="" class="d-flex align-items-center text-dark" data-toggle="tooltip"
                           data-title="Wishlist" data-placement="top">
                                <span class="position-relative d-inline-block">
                                    <img width="18" height="18" src="./images/icons/heart.png" alt="">
                                </span>
                        </a>
                    </div>
                </div>
                <ul class="list-inline mb-0 h-100 d-none d-xl-flex justify-content-end align-items-center">
                    <li class="list-inline-item ml-3 mr-3 pr-3 pl-0 dropdown">
                        <a class="dropdown-toggle no-arrow text-secondary fs-12" data-toggle="dropdown" href=""
                           role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="position-relative d-inline-block">
                                    <img width="18" height="18" src="./images/icons/bell-ring.png" alt="">
                                </span>
                        </a>
                    </li>
                    <li class="list-inline-item ml-1 mr-1 pr-1 pl-0 dropdown">
                        <a class="dropdown-toggle no-arrow text-secondary fs-12" data-toggle="dropdown" href="#"
                           role="button" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="size-40px overflow-hidden d-flex align-items-center justify-content-center">
                                    <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/flags/en.png"
                                         class="mr-1 lazyload" alt="" width="20">
                                </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            <li>
                                <a href="" data-flag="en" class="dropdown-item  active ">
                                    <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/flags/en.png"
                                         class="mr-1 lazyload" alt="" height="11">
                                    <span class="language">English</span>
                                </a>
                            </li>
                            <li>
                                <a href="" data-flag="en" class="dropdown-item">
                                    <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/flags/en.png"
                                         class="mr-1 lazyload" alt="" height="11">
                                    <span class="language">English</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="list-inline-item ml-1 mr-1 pr-1 pl-0 dropdown">
                        <a class="dropdown-toggle no-arrow text-secondary fs-12" data-toggle="dropdown" href="#"
                           role="button" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="size-40px rounded-circle overflow-hidden border d-flex align-items-center justify-content-center">
                                    LKR
                                </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            <li>
                                <a class="dropdown-item active" href="" data-currency="AUD">
                                    Australian Dollar
                                    ($)
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="" data-currency="AUD">
                                    Australian Dollar
                                    ($)
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                {{-- <div class="d-none d-xl-block ml-auto mr-0">
                    <!--Login & Registration -->
                    <span class="d-flex align-items-center nav-user-info ml-3">
                            <span
                                class="size-40px rounded-circle overflow-hidden border d-flex align-items-center justify-content-center nav-user-img">
                                <img width="20" height="20" src="./images/icons/account.png" alt="">
                            </span>
                            <a href="{{ route('login') }}"
                            class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block border-right border-soft-light border-width-2 pr-2 ml-3">Login</a>
                            <a href="{{ route('register') }}"
                               class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block py-2 pl-2">Registration</a>
                        </span>
                </div> --}}

                <div class="d-none d-xl-block ml-auto mr-0">
                    <!--Login & Registration -->
                    <span class="d-flex align-items-center nav-user-info ml-3">
                        @auth
                           
                        <span
                            class="size-40px rounded-circle overflow-hidden border d-flex align-items-center justify-content-center nav-user-img">
                            <img width="20" height="20" src="./images/icons/account.png" alt="">
                        </span>
                            <!-- Display Link to Dashboard-->

                        <a class="btn btn-icon btn-circle btn-light ml-2" href="{{ route('home') }}" target="_blank" title="POS">
                            <i class="las la-home"></i>
                        </a>
                            <!-- Display logged-in user's name -->
                            <span class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block ml-3">
                                {{ Auth::user()->name }}
                            </span>


                           
                        @else
                            <!-- Display login and register buttons if user is not logged in -->
                            <a href="{{ route('login') }}"
                               class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block border-right border-soft-light border-width-2 pr-2 ml-3">Login</a>
                            <a href="{{ route('register') }}"
                               class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block py-2 pl-2">Registration</a>
                        @endauth
                    </span>
                </div>
                
            </div>
        </div>

        <!-- Loged in user Menus -->
        <div class="hover-user-top-menu position-absolute top-100 left-0 right-0 z-3">
            <div class="container">
                <div class="position-static float-right">
                    <div class="aiz-user-top-menu bg-white rounded-0 border-top shadow-sm" style="width:220px;">
                        <ul class="list-unstyled no-scrollbar mb-0 text-left">
                            <li class="user-top-nav-element border border-top-0" data-id="1">
                                <a href=""
                                   class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">

                                    <span class="user-top-menu-name has-transition ml-3">Dashboard</span>
                                </a>
                            </li>

                            <li class="user-top-nav-element border border-top-0" data-id="1">
                                <a href=""
                                   class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">

                                    <span class="user-top-menu-name text-primary has-transition ml-3">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu Bar -->
    <div class="d-none d-lg-block position-relative bg-primary h-50px">
        <div class="container h-100">
            <div class="d-flex h-100">
                <div class="d-none d-xl-block all-category has-transition bg-black-10" id="category-menu-bar">
                    <div class="px-3 h-100"
                         style="padding-top: 12px;padding-bottom: 12px; width:270px; cursor: pointer;">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <span class="fw-700 fs-16 text-white mr-3">Categories</span>
                                <a href="" class="text-reset">
                                        <span class="d-none d-lg-inline-block text-white hov-opacity-80">
                                            (See
                                            All)
                                        </span>
                                </a>

                            </div>
                            <i class="fa fa-chevron-down text-white has-transition" id="category-menu-bar-icon"
                               style="font-size: 1.2rem !important"></i>
                        </div>
                    </div>
                </div>
                <div class="ml-xl-4 w-100 overflow-hidden">
                    <div class="d-flex align-items-center justify-content-center justify-content-xl-start h-100">
                        <ul class="list-inline mb-0 pl-0 hor-swipe c-scrollbar-light">
                            <li class="list-inline-item mx-1 animate-underline-white">
                                <a href="" class="fs-13 px-3 py-3 d-inline-block fw-700 text-white header_menu_links hov-bg-black-10
                                            ">
                                    Home
                                </a>
                            </li>
                            <li class="list-inline-item mx-1 animate-underline-white">
                                <a href="" class="fs-13 px-3 py-3 d-inline-block fw-700 text-white header_menu_links hov-bg-black-10
                                            ">
                                    Flash Sale
                                </a>
                            </li>
                            <li class="list-inline-item mx-1 animate-underline-white">
                                <a href="" class="fs-13 px-3 py-3 d-inline-block fw-700 text-white header_menu_links hov-bg-black-10
                                            ">
                                    Blogs
                                </a>
                            </li>
                            <li class="list-inline-item mx-1 animate-underline-white">
                                <a href="" class="fs-13 px-3 py-3 d-inline-block fw-700 text-white header_menu_links hov-bg-black-10
                                            ">
                                    All Brands
                                </a>
                            </li>
                            <li class="list-inline-item mx-1 animate-underline-white">
                                <a href="" class="fs-13 px-3 py-3 d-inline-block fw-700 text-white header_menu_links hov-bg-black-10
                                            ">
                                    All Categories
                                </a>
                            </li>
                            <li class="list-inline-item mx-1 animate-underline-white">
                                <a href="" class="fs-13 px-3 py-3 d-inline-block fw-700 text-white header_menu_links hov-bg-black-10
                                            ">
                                    All Sellers
                                </a>
                            </li>
                            <li class="list-inline-item mx-1 animate-underline-white">
                                <a href="" class="fs-13 px-3 py-3 d-inline-block fw-700 text-white header_menu_links hov-bg-black-10
                                            ">
                                    Coupons
                                </a>
                            </li>
                            <li class="list-inline-item mx- animate-underline-white">
                                <a href="" class="fs-13 px-3 py-3 d-inline-block fw-700 text-white header_menu_links hov-bg-black-10
                                            ">
                                    Todays Deal
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="d-none d-xl-block align-self-stretch ml-5 mr-0 has-transition bg-black-10"
                     data-hover="dropdown">
                    <div class="nav-cart-box dropdown h-100" id="cart_items" style="width: max-content;">
                        <a href="" class="d-flex align-items-center text-dark px-3 h-100" data-toggle="dropdown"
                           data-display="static" title="Cart">
                                <span class="mr-2">
                                    <img src="./images/icons/cart.png" width="20" height="20" alt="">
                                </span>
                            <span class="d-none d-xl-block ml-2 fs-14 fw-700 text-white">$0.000</span>
                            <span class="nav-box-text d-none d-xl-block ml-2 text-white fs-12">

                                    (<span class="cart-count">0</span> Items)

                                </span>
                        </a>

                        <div
                            class="dropdown-menu dropdown-menu-right dropdown-menu-lg p-0 stop-propagation rounded-0">
                            <div class="text-center p-3">
                                <i class="las la-frown la-3x opacity-60 mb-3"></i>
                                <h3 class="h6 fw-700">Your Cart is empty</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hover-category-menu position-absolute w-100 top-100 left-0 right-0 z-3 d-none"
             id="click-category-menu">
            <div class="container">
                <div class="d-flex position-relative">
                    <div class="position-static">
                        <div class="aiz-category-menu bg-white rounded-0 border-top" id="category-sidebar"
                             style="width:270px;">
                            <ul class="list-unstyled categories no-scrollbar mb-0 text-left">
                                <li class="category-nav-element border border-top-0" data-id="1">
                                    <a href="" class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                        <img class="cat-image lazyload mr-2 opacity-60"
                                             src="https://demo.activeitzone.com/ecommerce/public/uploads/all/46v0RI8PXlQa4Yy0IftaGaK9rZUQdLOAFkpnjRXT.webp"
                                             width="16" alt="Women Clothing &amp; Fashion">
                                        <span class="cat-name has-transition">
                                                Women Clothing & Fashion
                                            </span>
                                    </a>
                                    <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                        <div class="c-preloader text-center absolute-center">
                                            gggg
                                        </div>
                                    </div>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Top Menu Sidebar -->
<div class="aiz-top-menu-sidebar collapse-sidebar-wrap sidebar-xl sidebar-left d-lg-none z-1035">
    <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle" data-target=".aiz-top-menu-sidebar"
         data-same=".hide-top-menu-bar"></div>
    <div class="collapse-sidebar c-scrollbar-light text-left">
        <button type="button" class="btn btn-sm p-4 hide-top-menu-bar" data-toggle="class-toggle"
                data-target=".aiz-top-menu-sidebar">
            <i class="fa fa-times la-2x text-primary"></i>
        </button>
        <span class="d-flex align-items-center nav-user-info pl-4">
                <span
                    class="size-40px rounded-circle overflow-hidden border d-flex align-items-center justify-content-center nav-user-img">
                    <img width="20" height="20" src="./images/icons/account.png" alt="">
                </span>
                <a href="./login.php"
                   class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block border-right border-soft-light border-width-2 pr-2 ml-3">Login</a>
                <a href="./register.php"
                   class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block py-2 pl-2">Registration</a>
            </span>
        <hr>
        <ul class="mb-0 pl-3 pb-3 h-100">
            <li class="mr-0">
                <a href="" class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                            ">
                    Home
                </a>
            </li>
            <li class="mr-0">
                <a href="" class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                            ">
                    Flash Sale
                </a>
            </li>
            <li class="mr-0">
                <a href="" class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                            ">
                    Blogs
                </a>
            </li>
            <li class="mr-0">
                <a href="" class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                            ">
                    All Brands
                </a>
            </li>
            <li class="mr-0">
                <a href="" class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                            ">
                    All Categories
                </a>
            </li>
            <li class="mr-0">
                <a href="" class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                            ">
                    All Sellers
                </a>
            </li>
            <li class="mr-0">
                <a href="" class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                            ">
                    Coupons
                </a>
            </li>
            <li class="mr-0">
                <a href="" class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                            ">
                    Todays Deal
                </a>
            </li>
        </ul>
        <br>
        <br>
    </div>
</div>

