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
                                <h1 class="fs-20 fw-700 text-dark">Affiliate</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-16 mb-2">
                        <div class="col-md-4 mx-auto mb-4">
                            <div class="bg-dark text-white overflow-hidden text-center p-4 h-100">
                                <div class="py-2 mt-2">
                                    <div class="fs-14 fw-400 text-center">Affiliate Balance</div>
                                    <div class="fs-30 fw-700 text-center">$10.000</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mx-auto mb-4">
                            <a href="">
                                <div
                                    class="p-4 mb-3 c-pointer text-center bg-light has-transition border h-100 hov-bg-soft-light">
                                    <span
                                        class="size-60px rounded-circle mx-auto bg-dark d-flex align-items-center justify-content-center mb-3">
                                        <i class="fa fa-cog la-3x text-white"></i>
                                    </span>
                                    <div class="fs-14 fw-600 text-dark">Configure Payout</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mx-auto mb-4">
                            <div
                                class="p-4 mb-3 c-pointer text-center bg-light has-transition border h-100 hov-bg-soft-light">
                                <span
                                    class="size-60px rounded-circle mx-auto bg-dark d-flex align-items-center justify-content-center mb-3">
                                    <i class="fa fa-plus la-3x text-white"></i>
                                </span>
                                <div class="fs-14 fw-600 text-dark">Affiliate Withdraw Request</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-2">
                            <div class="card rounded-0 shadow-none border mb-4">
                                <div class="form-box-content p-4">
                                    <div class="row gutters-16">
                                        <div class="col-lg-10 col-sm-9 form-group mb-3 mb-sm-0">
                                            <textarea id="referral_code_url" class="form-control rounded-0" readonly
                                                type="text">url</textarea>
                                        </div>
                                        <div class="col-lg-2 col-sm-3">
                                            <button type=button id="ref-cpurl-btn"
                                                class="btn btn-primary btn-block rounded-0" data-attrcpy="Copied">
                                                Copy Url
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card rounded-0 shadow-none border mb-3">
                        <form class="" id="sort_blogs" action="" method="GET">
                            <div class="card-header border-bottom-0 row pt-4">
                                <div class="col text-center text-md-left">
                                    <h5 class="mb-md-0 fs-18 fw-700 text-dark">Affiliate Status</h5>
                                </div>
                                <div class="col-md-5 col-xl-4">
                                    <div class="input-group mb-0">
                                        <select class="form-control aiz-selectpicker" name="type"
                                            data-live-search="true">
                                            <option value="">Choose</option>
                                            <option value="Today">Today</option>
                                            <option value="7">Last 7 Days</option>
                                            <option value="30">Last 30 Days</option>
                                        </select>
                                        <button class="btn btn-primary rounded-0 input-group-append"
                                            type="submit">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="card-body">
                            <div class="row gutters-16">
                                <div class="col-md-3 mx-auto mb-3">
                                    <a href="#">
                                        <div
                                            class="p-4 mb-3 c-pointer text-center bg-light has-transition border h-100 hov-bg-soft-light">
                                            <span class="fs-30 fw-700 text-dark mb-3">
                                                3
                                            </span>
                                            <div class="fs-14 fw-700 text-dark">No of click</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 mx-auto mb-3">
                                    <a href="#">
                                        <div
                                            class="p-4 mb-3 c-pointer text-center bg-light has-transition border h-100 hov-bg-soft-light">
                                            <span class="fs-30 fw-700 text-dark">

                                                0
                                            </span>
                                            <div class="fs-14 fw-700 text-dark">No of item</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 mx-auto mb-3">
                                    <a href="#">
                                        <div
                                            class="p-4 mb-3 c-pointer text-center bg-light has-transition border h-100 hov-bg-soft-light">
                                            <span class="fs-30 fw-700 text-dark">

                                                0
                                            </span>
                                            <div class="fs-14 fw-700 text-dark">No of deliverd</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 mx-auto mb-3">
                                    <a href="#">
                                        <div
                                            class="p-4 mb-3 c-pointer text-center bg-light has-transition border h-100 hov-bg-soft-light">
                                            <span class="fs-30 fw-700 text-dark">

                                                0
                                            </span>
                                            <div class="fs-14 fw-700 text-dark">No of cancel</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </section>
</div>