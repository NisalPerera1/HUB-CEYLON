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
                    <div class="aiz-titlebar mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <b class="fs-20 fw-700 text-dark">Wishlist</b>
                            </div>
                        </div>
                    </div>

                    <div
                        class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2 gutters-16 border-top border-left mx-1 mx-md-0 mb-4">
                        <div
                            class="aiz-card-box col py-3 text-center border-right border-bottom has-transition hov-shadow-out z-1">
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