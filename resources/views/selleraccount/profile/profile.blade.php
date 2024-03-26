@extends('selleraccount.app')
@section('content')

<div class="aiz-main-wrapper d-flex flex-column bg-white">
    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-start">
                <div class="aiz-user-sidenav-wrap position-relative z-1 rounded-0">
@include('selleraccount.profile.sidebar')

                </div>
                <div class="aiz-user-panel">
                    <div class="row gutters-16">
                        <div class="col-xl-8 col-md-6 mb-4">
                            <div class="h-100"
                                style="background-image: url('https://demo.activeitzone.com/ecommerce/public/assets/img/wallet-bg.png'); background-size: cover; background-position: center center;">
                                <div class="p-4 h-100 w-100 w-xl-50">
                                    <p class="fs-14 fw-400 text-gray mb-3">Wallet Balance</p>
                                    <h1 class="fs-30 fw-700 text-white ">$1,703.300</h1>
                                    <hr class="border border-dashed border-white opacity-40 ml-0 mt-4 mb-4">
                                    <p class="fs-14 fw-400 text-gray mb-1">Last Recharge <strong>05.06.2022</strong></p>
                                    <h3 class="fs-20 fw-700 text-white ">$12.150</h3>
                                    <button
                                        class="btn btn-block border border-soft-light hov-bg-dark text-white mt-5 py-3"
                                        style="border-radius: 30px; background: rgba(255, 255, 255, 0.1);">
                                        <i class="fa fa-plus fs-18 fw-700 mr-2"></i>
                                        Recharge Wallet
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="h-100">
                                <div class="row h-100  row-cols-1">
                                    <div class="col">
                                        <div class="p-4 bg-primary " style="margin-bottom: 2rem;">
                                            <div class="d-flex align-items-center pb-4 ">
                                                <img src="../images/icons/account.png" alt="" width="14" height="14">
                                                <div class="ml-3 d-flex flex-column justify-content-between">
                                                    <span class="fs-14 fw-400 text-white mb-1">Total Expenditure</span>
                                                    <span class="fs-20 fw-700 text-white">$12,541.900</span>
                                                </div>
                                            </div>
                                            <a href="" class="fs-12 text-white">
                                                View Order History
                                                <i class="fa fa-angle-right fs-14"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="p-4 bg-secondary-base">
                                            <div class="d-flex align-items-center pb-4 ">
                                                <img src="../images/icons/account.png" alt="" width="14" height="14">
                                                <div class="ml-3 d-flex flex-column justify-content-between">
                                                    <span class="fs-14 fw-400 text-white mb-1">Total Club Points</span>
                                                    <span class="fs-20 fw-700 text-white">10985</span>
                                                </div>
                                            </div>
                                            <a href="" class="fs-12 text-white">
                                                Convert Club Points
                                                <i class="fa fa-angle-right fs-14"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gutters-16 mt-2">
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="px-4 bg-white border h-100">
                                <div class="d-flex align-items-center py-4 border-bottom">
                                    <img src="../images/icons/account.png" alt="" width="14" height="14">
                                    <div class="ml-3 d-flex flex-column justify-content-between">
                                        <span class="fs-20 fw-700 mb-1">01</span>
                                        <span class="fs-14 fw-400 text-secondary">Products in Cart</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center py-4 border-bottom">
                                    <img src="../images/icons/account.png" alt="" width="14" height="14">
                                    <div class="ml-3 d-flex flex-column justify-content-between">
                                        <span class="fs-20 fw-700 mb-1">07</span>
                                        <span class="fs-14 fw-400 text-secondary">Products in Wishlist</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center py-4">
                                    <img src="../images/icons/account.png" alt="" width="14" height="14">
                                    <div class="ml-3 d-flex flex-column justify-content-between">
                                        <span class="fs-20 fw-700 mb-1">95</span>
                                        <span class="fs-14 fw-400 text-secondary">Total Products Ordered</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="p-4 border h-100">
                                <h6 class="fw-700 mb-3 text-dark">Purchased Package</h6>
                                <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/zu3eVLzwf8iAs4AG7K5h4902UhaXVR0MbWVevxjJ.webp"
                                    class="img-fluid mb-4 h-70px">
                                <p class="fs-14 fw-700 mb-3 text-primary">Current Package: Premium</p>
                                <p class="mb-2 d-flex justify-content-between">
                                    <span class="text-secondary">Product Upload</span>
                                    <span class="fw-700">300 times</span>
                                </p>
                                <p class="mb-3 d-flex justify-content-between">
                                    <span class="text-secondary">Product Upload Remains</span>
                                    <span class="fw-700">576 times</span>
                                </p>
                                <a href="" class="btn btn-primary btn-block fs-14 fw-500" style="border-radius: 25px;">
                                    Upgrade
                                    Package
                                </a>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="p-4 border h-100">
                                <h6 class="fw-700 mb-3 text-dark">Default Shipping Address</h6>
                                <ul class="list-unstyled mb-5">
                                    <li class="fs-14 fw-400 text-derk pb-1">
                                        <span>
                                            3947 West Side Avenue
                                            Hackensack, NJ 07601,
                                        </span>
                                    </li>
                                    <li class="fs-14 fw-400 text-derk pb-1"><span>1254 - College,</span></li>
                                    <li class="fs-14 fw-400 text-derk pb-1"><span>Alaska,</span></li>
                                    <li class="fs-14 fw-400 text-derk pb-1"><span>United States.</span></li>
                                    <li class="fs-14 fw-400 text-derk pb-1"><span>201-287-7714</span></li>
                                </ul>
                                <button class="btn btn-dark btn-block fs-14 fw-500" onclick="add_new_address()"
                                    style="border-radius: 25px;">
                                    <i class="fa fa-plus fs-18 fw-700 mr-2"></i>
                                    Add New Address
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="row align-items-center mb-2 mt-1">
                        <div class="col-6">
                            <h3 class=" mb-0 fs-14 fs-md-16 fw-700 text-dark">My Wishlist</h3>
                        </div>
                        <div class="col-6 text-right">
                            <a class="text-blue fs-10 fs-md-12 fw-700 hov-text-primary animate-underline-primary"
                                href="">View All</a>
                        </div>
                    </div>
                    <div
                        class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2 gutters-16 border-top border-left mx-1 mx-md-0 mb-4">
                        <div class="aiz-card-box col py-3 text-center border-right border-bottom has-transition hov-shadow-out z-1"
                            id="wishlist_1">
                            <div class="position-relative h-140px h-md-200px img-fit overflow-hidden mb-3">
                                <a href="" class="d-block h-100">
                                    <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/qLMBO3HyCqzG5llfrzUX5kD0iZLFvtpxDodgHR4E.webp"
                                        class="lazyload mx-auto img-fit" title="">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="" class="d-flex justify-content-center align-items-center" data-toggle="tooltip" data-title="Remove from wishlist"
                                        data-placement="left">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                                <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex justify-content-center align-items-center"
                                    href="">Add to cart</a>
                            </div>
                            <h5 class="fs-14 mb-0 lh-1-5 fw-400 text-truncate-2 mb-3">
                                <a href="" class="text-reset hov-text-primary" title="">
                                    Pakistani
                                    Women&#039;s Readymade Dress Banarasi Art Silk Woven Salwar Kameez Silk Dupatta
                                    Stitched
                                    Suit
                                </a>
                            </h5>
                            <div class="fs-14">
                                <span class="fw-600 text-primary">$135.800</span>
                                <del class="opacity-60 ml-1">$140.000</del>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection