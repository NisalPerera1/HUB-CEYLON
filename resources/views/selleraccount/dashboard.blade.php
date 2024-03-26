@extends('selleraccount.app')
@section('content')
<div class="aiz-main-content">
    <div class="px-15px px-lg-25px">
        <div class="aiz-titlebar mt-2 mb-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h3 text-primary">Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-xxl-3">
                <div class="card shadow-none mb-4 bg-primary py-4">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <p class="small text-muted mb-0">
                                    <span class="fe fe-arrow-down fe-12"></span>
                                    <span class="fs-14 text-light">Products</span>
                                </p>
                                <h3 class="mb-0 text-white fs-30">
                                    47
                                </h3>

                            </div>
                            <div class="col-auto text-right">
                                <img src="{{ asset('images/seller/box.png') }}" width="60px" height="60px" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-xxl-3">
                <div class="card shadow-none mb-4 bg-primary py-4">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <p class="small text-muted mb-0">
                                    <span class="fe fe-arrow-down fe-12"></span>
                                    <span class="fs-14 text-light">Rating</span>
                                </p>
                                <h3 class="mb-0 text-white fs-30">
                                    5
                                </h3>

                            </div>
                            <div class="col-auto text-right">
                                <img src="{{ asset('images/seller/star.png') }}" width="60px" height="60px" />

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-xxl-3">
                <div class="card shadow-none mb-4 bg-primary py-4">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <p class="small text-muted mb-0">
                                    <span class="fe fe-arrow-down fe-12"></span>
                                    <span class="fs-14 text-light">Total Order</span>
                                </p>
                                <h3 class="mb-0 text-white fs-30">
                                    10
                                </h3>
                            </div>
                            <div class="col-auto text-right">
                                <img src="{{ asset('images/seller/clipboard.png') }}" width="60px" height="60px" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-xxl-3">
                <div class="card shadow-none mb-4 bg-primary py-4">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <p class="small text-muted mb-0">
                                    <span class="fe fe-arrow-down fe-12"></span>
                                    <span class="fs-14 text-light">Total Sales</span>
                                </p>
                                <h3 class="mb-0 text-white fs-30">
                                    $584.900
                                </h3>

                            </div>
                            <div class="col-auto text-right">
                                <img src="{{ asset('images/seller/graph.png') }}" width="60px" height="60px" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3 mb-4">
                <div class="card shadow-none bg-soft-primary">
                    <div class="card-body">
                        <div class="card-title text-primary fs-16 fw-600">
                            Sales Stat
                        </div>
                        <canvas id="graph-1" class="w-100" height="150"></canvas>
                    </div>
                </div>
                <div class="card shadow-none bg-soft-primary mb-0">
                    <div class="card-body">
                        <div class="card-title text-primary fs-16 fw-600">
                            Sold Amount
                        </div>
                        <p>Your sold amount (current month)</p>
                        <h3 class="text-primary fw-600 fs-30">
                            $0.000
                        </h3>
                        <p class="mt-4">
                            Last Month: $0.000
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mb-4">
                <div class="card shadow-none h-450px mb-0 h-100">
                    <div class="card-body">
                        <div class="card-title text-primary fs-16 fw-600">
                            Category wise product count
                        </div>
                        <hr>
                        <ul class="list-group">
                            <li class="d-flex justify-content-between align-items-center my-2 text-primary fs-13">
                                Men Clothing & Fashion
                                <span class="">
                                    9
                                </span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center my-2 text-primary fs-13">
                                Men Clothing & Fashion
                                <span class="">
                                    9
                                </span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center my-2 text-primary fs-13">
                                Men Clothing & Fashion
                                <span class="">
                                    9
                                </span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center my-2 text-primary fs-13">
                                Men Clothing & Fashion
                                <span class="">
                                    9
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mb-4">
                <div class="card h-450px mb-0 h-100">
                    <div class="card-body">
                        <div class="card-title text-primary fs-16 fw-600">
                            Orders
                            <p class="small text-muted mb-0">
                                <span class="fs-12 fw-600">This Month</span>
                            </p>
                        </div>
                        <div class="row align-items-center mb-4">
                            <div class="col-auto text-left">
                                <img src="{{ asset('images/seller/parcel.png') }}" width="60px" height="60px" />
                            </div>
                            <div class="col">
                                <p class="small text-muted mb-0">
                                    <span class="fe fe-arrow-down fe-12"></span>
                                    <span class="fs-13 text-primary fw-600">New Order</span>
                                </p>
                                <h3 class="mb-0" style="color: #A9A3CC">
                                    15
                                </h3>
                            </div>
                        </div>
                        <div class="row align-items-center mb-4">
                            <div class="col-auto text-left">
                                <img src="{{ asset('images/seller/clipboard (2).png') }}" width="60px" height="60px" />

                            </div>
                            <div class="col">
                                <p class="small text-muted mb-0">
                                    <span class="fe fe-arrow-down fe-12"></span>
                                    <span class="fs-13 text-primary fw-600">Cancelled</span>
                                </p>
                                <h3 class="mb-0" style="color: #A9A3CC">
                                    0
                                </h3>
                            </div>
                        </div>
                        <div class="row align-items-center mb-4">
                            <div class="col-auto text-left">
                                <img src="{{ asset('images/seller/running.png') }}" width="60px" height="60px" />
                            </div>
                            <div class="col">
                                <p class="small text-muted mb-0">
                                    <span class="fe fe-arrow-down fe-12"></span>
                                    <span class="fs-13 text-primary fw-600">On Delivery</span>
                                </p>
                                <h3 class="mb-0" style="color: #A9A3CC">
                                    6
                                </h3>
                            </div>
                        </div>
                        <div class="row align-items-center mb-4">
                            <div class="col-auto text-left">
                                <img src="{{ asset('images/seller/like (1).png') }}" width="60px" height="60px" />

                            </div>
                            <div class="col">
                                <p class="small text-muted mb-0">
                                    <span class="fe fe-arrow-down fe-12"></span>
                                    <span class="fs-13 text-primary fw-600">Delivered</span>
                                </p>
                                <h3 class="mb-0" style="color: #A9A3CC">
                                    22
                                </h3>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h6 class="mb-0">Purchased Package</h6>
                        </div>
                        <div class="d-flex">
                            <div class="col-3">
                                <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/Sc9fsDKcoJQX4qqizGA9XiP4UtvOVfFvnZQxUmQ4.webp"
                                    class="img-fluid mb-4 w-64px">
                            </div>
                            <div class="col-9">
                                <a class="fw-600 mb-3 text-primary">Current Package:</a>
                                <h6 class="text-primary">
                                    Platinum
                                    </h3>
                                    <p class="mb-1 text-muted">
                                        Product Upload Limit:
                                        500 times
                                    </p>
                                    <p class="text-muted mb-4">
                                        Package Expires at:
                                        2024-03-02
                                    </p>
                                    <div class="">
                                        <a href="" class="btn btn-soft-primary">Upgrade Package</a>
                                    </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card mb-0  px-4 py-5  d-flex align-items-center justify-content-center">
                    <div class="my-2 py-1">
                        <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/verified.png" alt=""
                            width="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3">
                <a href="" class="card mb-4 p-4 text-center bg-soft-primary h-180px">
                    <div class="fs-16 fw-600 text-primary">
                        Money Withdraw
                    </div>
                    <div class="m-3">
                        <img src="{{ asset('images/seller/cash.png') }}" width="60px" height="60px" />

                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <a href="" class="card mb-4 p-4 text-center h-180px">
                    <div class="fs-16 fw-600 text-primary">
                        Add New product
                    </div>
                    <div class="m-3">
                        <img src="{{ asset('images/seller/add.png') }}" width="60px" height="60px" />
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="card mb-4 p-4 text-center bg-soft-primary">
                    <div class="fs-16 fw-600 text-primary">
                        Shop Settings
                    </div>
                    <div class=" m-3">
                        <img src="{{ asset('images/seller/store-maintenance.png') }}" width="60px" height="60px" />

                    </div>
                    <a href="" class="btn btn-primary">
                        Go to setting
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="card mb-4 p-4 text-center bg-soft-primary">
                    <div class="fs-16 fw-600 text-primary">
                        Payment Settings
                    </div>
                    <div class=" m-3">
                        <img src="{{ asset('images/seller/service (2).png') }}" width="60px" height="60px" />

                        
                    </div>
                    <a href="" class="btn btn-primary">
                        Configure Now
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="card-title text-primary">
                    <h6 class="mb-0">Top 12 Products</h6>
                </div>
                <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5"
                    data-lg-items="4" data-md-items="3" data-sm-items="2" data-arrows='true'>
                    <div class="carousel-box">
                        <div
                            class="aiz-card-box border border-light rounded shadow-sm hov-shadow-md mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-210px"
                                        src="https://demo.activeitzone.com/ecommerce/public/uploads/all/mcOpWcFWyJ44tZgPgVZQPiX0aATUX7LEtU9nClSk.webp">
                                </a>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$109.000</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0">
                                    <a href="" class="d-block text-reset">
                                        Microsoft 365 Personal | 12-Month Subscription, 1
                                        person|
                                        Premium Office Apps
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div
                            class="aiz-card-box border border-light rounded shadow-sm hov-shadow-md mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-210px"
                                        src="https://demo.activeitzone.com/ecommerce/public/uploads/all/mcOpWcFWyJ44tZgPgVZQPiX0aATUX7LEtU9nClSk.webp">
                                </a>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$109.000</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0">
                                    <a href="" class="d-block text-reset">
                                        Microsoft 365 Personal | 12-Month Subscription, 1
                                        person|
                                        Premium Office Apps
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div
                            class="aiz-card-box border border-light rounded shadow-sm hov-shadow-md mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-210px"
                                        src="https://demo.activeitzone.com/ecommerce/public/uploads/all/mcOpWcFWyJ44tZgPgVZQPiX0aATUX7LEtU9nClSk.webp">
                                </a>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$109.000</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0">
                                    <a href="" class="d-block text-reset">
                                        Microsoft 365 Personal | 12-Month Subscription, 1
                                        person|
                                        Premium Office Apps
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div
                            class="aiz-card-box border border-light rounded shadow-sm hov-shadow-md mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-210px"
                                        src="https://demo.activeitzone.com/ecommerce/public/uploads/all/mcOpWcFWyJ44tZgPgVZQPiX0aATUX7LEtU9nClSk.webp">
                                </a>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$109.000</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0">
                                    <a href="" class="d-block text-reset">
                                        Microsoft 365 Personal | 12-Month Subscription, 1
                                        person|
                                        Premium Office Apps
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div
                            class="aiz-card-box border border-light rounded shadow-sm hov-shadow-md mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-210px"
                                        src="https://demo.activeitzone.com/ecommerce/public/uploads/all/mcOpWcFWyJ44tZgPgVZQPiX0aATUX7LEtU9nClSk.webp">
                                </a>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$109.000</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0">
                                    <a href="" class="d-block text-reset">
                                        Microsoft 365 Personal | 12-Month Subscription, 1
                                        person|
                                        Premium Office Apps
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div
                            class="aiz-card-box border border-light rounded shadow-sm hov-shadow-md mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-210px"
                                        src="https://demo.activeitzone.com/ecommerce/public/uploads/all/mcOpWcFWyJ44tZgPgVZQPiX0aATUX7LEtU9nClSk.webp">
                                </a>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$109.000</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0">
                                    <a href="" class="d-block text-reset">
                                        Microsoft 365 Personal | 12-Month Subscription, 1
                                        person|
                                        Premium Office Apps
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div
                            class="aiz-card-box border border-light rounded shadow-sm hov-shadow-md mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-210px"
                                        src="https://demo.activeitzone.com/ecommerce/public/uploads/all/mcOpWcFWyJ44tZgPgVZQPiX0aATUX7LEtU9nClSk.webp">
                                </a>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$109.000</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0">
                                    <a href="" class="d-block text-reset">
                                        Microsoft 365 Personal | 12-Month Subscription, 1
                                        person|
                                        Premium Office Apps
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div
                            class="aiz-card-box border border-light rounded shadow-sm hov-shadow-md mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-210px"
                                        src="https://demo.activeitzone.com/ecommerce/public/uploads/all/mcOpWcFWyJ44tZgPgVZQPiX0aATUX7LEtU9nClSk.webp">
                                </a>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$109.000</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0">
                                    <a href="" class="d-block text-reset">
                                        Microsoft 365 Personal | 12-Month Subscription, 1
                                        person|
                                        Premium Office Apps
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
