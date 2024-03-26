@extends('layouts.site_includes.app')

@section('content')
<body class="">
    <div class="aiz-main-wrapper">
        <div class="aiz-sidebar-wrap">
            <div class="aiz-sidebar left c-scrollbar">
                <div class="aiz-side-nav-logo-wrap">
                    <div class="d-block text-center my-3">
                        <img class="mw-100 mb-3"
                            src="https://demo.activeitzone.com/ecommerce/public/uploads/all/Qjj4dDEMSrAv6RlftG5Ue1BKLvgW7Ai5kPYL22xZ.webp"
                            class="brand-icon" alt="">
                        <h3 class="fs-16  m-0 text-primary">Filon Asset Store</h3>
                        <p class="text-primary"><a href="">seller@gmail.com</a></p>
                    </div>
                </div>
                <div class="aiz-side-nav-wrap">
                    <div class="px-20px mb-3">
                        <input class="form-control bg-soft-secondary border-0 form-control-sm" type="text" name=""
                            placeholder="Search in menu">
                    </div>
                    <ul class="aiz-side-nav-list" id="search-menu">
                    </ul>
                    <ul class="aiz-side-nav-list" id="main-menu" data-toggle="aiz-side-menu">
                        <li class="aiz-side-nav-item">
                            <a href="?page=dashboard" class="aiz-side-nav-link">
                                <i class="las la-home aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="#" class="aiz-side-nav-link">
                                <i class="las la-shopping-cart aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Products</span>
                                <span class="aiz-side-nav-arrow"></span>
                            </a>
                            <ul class="aiz-side-nav-list level-2">
                                <li class="aiz-side-nav-item">
                                    <a href="?page=Products" class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">Products</span>
                                    </a>
                                </li>

                                <li class="aiz-side-nav-item">
                                    <a href="?page=ProductBulkUpload"
                                        class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">Product Bulk Upload</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="?page=DigitalProduct"
                                        class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">Digital Products</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="?page=ProductReviews"
                                        class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">Product Reviews</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="?page=UploadedFiles" class="aiz-side-nav-link ">
                                <i class="las la-folder-open aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Uploaded Files</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="#" class="aiz-side-nav-link">
                                <i class="las la-shopping-cart aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Package</span>
                                <span class="aiz-side-nav-arrow"></span>
                            </a>
                            <ul class="aiz-side-nav-list level-2">
                                <li class="aiz-side-nav-item">
                                    <a href="?page=Packages" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">Packages</span>
                                    </a>
                                </li>

                                <li class="aiz-side-nav-item">
                                    <a href="?page=PurchasePackages"
                                        class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">Purchase Packages</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="?page=Coupon" class="aiz-side-nav-link ">
                                <i class="las la-bullhorn aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Coupon</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="?page=WholesaleProducts" class="aiz-side-nav-link ">
                                <i class="las la-luggage-cart aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Wholesale Products</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="javascript:void(0);" class="aiz-side-nav-link">
                                <i class="las la-gavel aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Auction</span>
                                <span class="aiz-side-nav-arrow"></span>
                            </a>
                            <ul class="aiz-side-nav-list level-2">
                                <li class="aiz-side-nav-item">
                                    <a href="?page=AllAuctionProduct"
                                        class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">All Auction Products</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="?page=AuctionProductOrders"
                                        class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">Auction Product Orders</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="aiz-side-nav-item">
                            <a href="#" class="aiz-side-nav-link">
                                <i class="las la-tasks aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">POS System</span>
                                <span class="badge badge-inline badge-danger">Addon</span>
                                <span class="aiz-side-nav-arrow"></span>
                            </a>
                            <ul class="aiz-side-nav-list level-2">
                                <li class="aiz-side-nav-item">
                                    <a href="?page=POSManager"
                                        class="aiz-side-nav-link ">
                                        <i class="las la-fax aiz-side-nav-icon"></i>
                                        <span class="aiz-side-nav-text">POS Manager</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="?page=POSConfiguration"
                                        class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">POS Configuration</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="aiz-side-nav-item">
                            <a href="?page=Orders" class="aiz-side-nav-link ">
                                <i class="las la-money-bill aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Orders</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="?page=ReceivedRefundRequest"
                                class="aiz-side-nav-link ">
                                <i class="las la-backward aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Received Refund Request</span>
                            </a>
                        </li>


                        <li class="aiz-side-nav-item">
                            <a href="?page=ShopSetting" class="aiz-side-nav-link ">
                                <i class="las la-cog aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Shop Setting</span>
                            </a>
                        </li>

                        <li class="aiz-side-nav-item">
                            <a href="?page=PaymentHistory" class="aiz-side-nav-link ">
                                <i class="las la-history aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Payment History</span>
                            </a>
                        </li>

                        <li class="aiz-side-nav-item">
                            <a href="?page=MoneyWithdraw" class="aiz-side-nav-link ">
                                <i class="las la-money-bill-wave-alt aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Money Withdraw</span>
                            </a>
                        </li>

                        <li class="aiz-side-nav-item">
                            <a href="?page=CommissionHistory" class="aiz-side-nav-link">
                                <i class="las la-file-alt aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Commission History</span>
                            </a>
                        </li>

                        <li class="aiz-side-nav-item">
                            <a href="?page=Conversations" class="aiz-side-nav-link ">
                                <i class="las la-comment aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Conversations</span>
                            </a>
                        </li>

                        <li class="aiz-side-nav-item">
                            <a href="?page=ProductQueries" class="aiz-side-nav-link ">
                                <i class="las la-question-circle aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Product Queries</span>

                            </a>
                        </li>

                        <li class="aiz-side-nav-item">
                            <a href="?page=SupportTicket" class="aiz-side-nav-link ">
                                <i class="las la-atom aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Support Ticket</span>
                                <span class="badge badge-inline badge-success">2</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="aiz-sidebar-overlay"></div>
        </div>
        <div class="aiz-content-wrapper">
            <div class="aiz-topbar px-15px px-lg-25px d-flex align-items-stretch justify-content-between">
                <div class="d-flex">
                    <div class="aiz-topbar-nav-toggler d-flex align-items-center justify-content-start mr-2 mr-md-3 ml-0"
                        data-toggle="aiz-mobile-nav">
                        <button class="aiz-mobile-toggler">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-stretch flex-grow-xl-1">
                    <div class="d-flex justify-content-around align-items-center align-items-stretch">
                        <div class="d-flex justify-content-around align-items-center align-items-stretch">
                            <div class="aiz-topbar-item">
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-icon btn-circle btn-light" href="" target="_blank"
                                        title="Browse Website">
                                        <i class="las la-globe"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around align-items-center align-items-stretch ml-3">
                            <div class="aiz-topbar-item">
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-icon btn-circle btn-light" href="" target="_blank" title="POS">
                                        <i class="las la-print"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-around align-items-center align-items-stretch">
                        <div class="aiz-topbar-item ml-2">
                            <div class="align-items-stretch d-flex dropdown">
                                <a class="dropdown-toggle no-arrow" data-toggle="dropdown" href="javascript:void(0);"
                                    role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="btn btn-icon p-0 d-flex justify-content-center align-items-center">
                                        <span class="d-flex align-items-center position-relative">
                                            <i class="las la-bell fs-24"></i>
                                            <span
                                                class="badge badge-sm badge-dot badge-circle badge-primary position-absolute absolute-top-right"></span>
                                        </span>
                                    </span>
                                </a>
                                <div
                                    class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg py-0">
                                    <div class="notifications">

                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item active">
                                                <a class="nav-link" data-toggle="tab" data-type="order"
                                                    href="#orders-notifications" role="tab" id="orders-tab">Orders</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" data-type="seller"
                                                    href="#sellers-notifications" role="tab"
                                                    id="sellers-tab">Sellers</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" data-type="seller"
                                                    href="#payouts-notifications" role="tab"
                                                    id="sellers-tab">Payouts</a>
                                            </li>

                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="orders-notifications" role="tabpanel">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items- py-3">
                                                    <div class="media text-inherit">
                                                        <div class="media-body">
                                                            <p class="mb-1 text-truncate-2">

                                                                Order code:

                                                                20220726-08275357


                                                                has been Delivered

                                                            </p>
                                                            <small class="text-muted">
                                                                July 25 2022, 10:28 pm
                                                            </small>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items- py-3">
                                                    <div class="media text-inherit">
                                                        <div class="media-body">
                                                            <p class="mb-1 text-truncate-2">

                                                                Order code:

                                                                20220420-07435544


                                                                has been Placed

                                                            </p>
                                                            <small class="text-muted">
                                                                April 19 2022, 9:44 pm
                                                            </small>
                                                        </div>
                                                    </div>
                                                </li>
                                            </div>
                                            <div class="tab-pane" id="sellers-notifications" role="tabpanel">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items- py-3">
                                                    <div class="media text-inherit">
                                                        <div class="media-body">
                                                            <p class="mb-1 text-truncate-2">


                                                                Product :
                                                                Boogie Board Jot Reusable Writing Tablet for Adults

                                                                is approved
                                                            </p>
                                                            <small class="text-muted">
                                                                November 18 2023, 1:19 pm
                                                            </small>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items- py-3">
                                                    <div class="media text-inherit">
                                                        <div class="media-body">
                                                            <p class="mb-1 text-truncate-2">


                                                                Product :
                                                                Acer Chromebook Spin 314 Convertible Laptop

                                                                is pending
                                                            </p>
                                                            <small class="text-muted">
                                                                November 18 2023, 1:13 pm
                                                            </small>
                                                        </div>
                                                    </div>
                                                </li>
                                            </div>
                                            <div class="tab-pane" id="payouts-notifications" role="tabpanel">
                                                <li class="list-group-item">
                                                    <div class="py-4 text-center fs-16">
                                                        No notification found
                                                    </div>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center border-top">
                                        <a href="" class="text-reset d-block py-2">
                                            View All Notifications
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="aiz-topbar-item ml-2">
                            <div class="align-items-stretch d-flex dropdown " id="lang-change">
                                <a class="dropdown-toggle no-arrow" data-toggle="dropdown" href="javascript:void(0);"
                                    role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="btn btn-icon">
                                        <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/flags/en.png"
                                            height="11">
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-xs">
                                    <li>
                                        <a href="javascript:void(0)" data-flag="en" class="dropdown-item  active ">
                                            <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/flags/en.png"
                                                class="mr-2">
                                            <span class="language">English</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="bd" class="dropdown-item ">
                                            <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/flags/bd.png"
                                                class="mr-2">
                                            <span class="language">Bangla</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="aiz-topbar-item ml-2">
                            <div class="align-items-stretch d-flex dropdown">
                                <a class="dropdown-toggle no-arrow text-dark" data-toggle="dropdown"
                                    href="javascript:void(0);" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="d-flex align-items-center">
                                        <span class="avatar avatar-sm mr-md-2">
                                            <img
                                                src="https://demo.activeitzone.com/ecommerce/public/assets/img/avatar-place.png">
                                        </span>
                                        <span class="d-none d-md-block">
                                            <span class="d-block fw-500">Filon Asset Store</span>
                                            <span class="d-block small opacity-60">seller</span>
                                        </span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-md">
                                    <a href="" class="dropdown-item">
                                        <i class="las la-user-circle"></i>
                                        <span>Profile</span>
                                    </a>

                                    <a href="" class="dropdown-item">
                                        <i class="las la-sign-out-alt"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            function includePage($page)
            {
                $allowedPages = ['dashboard', 'AuctionProductOrders', 'CommissionHistory','Conversations','Coupon','DigitalProduct','MoneyWithdraw','Orders','Packages','PaymentHistory','POSConfiguration','POSManager','ProductBulkUpload','ProductQueries','ProductReviews','Products','PurchasePackages','ReceivedRefundRequest','ShopSetting','SupportTicket','UploadedFiles','WholesaleProducts'];
                if (in_array($page, $allowedPages)) {
                    include $page . '.php';
                } else {
                    echo 'Invalid page requested';
                }
            }
            $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
            includePage($page);
            ?>

        </div>
    </div>
    <script src="https://demo.activeitzone.com/ecommerce/public/assets/js/vendors.js"></script>
    <script src="https://demo.activeitzone.com/ecommerce/public/assets/js/aiz-core.js"></script>


    <script type="text/javascript">
        $('.dropdown-menu a[data-toggle="tab"]').click(function (e) {
            e.stopPropagation()
            $(this).tab('show')
        })
    </script>

</body>
@endsection
