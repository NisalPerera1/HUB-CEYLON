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
                                <h1 class="fs-20 fw-700 text-dark">My Wallet</h1>
                            </div>
                        </div>
                    </div>

                    <div class="row gutters-16 mb-2">
                        <div class="col-md-4 mx-auto mb-4">
                            <div class="bg-dark text-white overflow-hidden text-center p-4 h-100">
                                <img src="" alt="">
                                <div class="py-2">
                                    <div class="fs-14 fw-400 text-center">Wallet Balance</div>
                                    <div class="fs-30 fw-700 text-center">$1,703.300</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mx-auto mb-4">
                            <div
                                class="p-4 mb-3 c-pointer text-center bg-light has-transition border h-100 hov-bg-soft-light">
                                <span
                                    class="size-60px rounded-circle mx-auto bg-dark d-flex align-items-center justify-content-center mb-3">
                                    <i class="fa fa-plus la-3x text-white"></i>
                                </span>
                                <div class="fs-14 fw-600 text-dark">Recharge Wallet</div>
                            </div>
                        </div>

                        <div class="col-md-4 mx-auto mb-4">
                            <div
                                class="p-4 mb-3 c-pointer text-center bg-light has-transition border h-100 hov-bg-soft-light">
                                <span
                                    class="size-60px rounded-circle mx-auto bg-dark d-flex align-items-center justify-content-center mb-3">
                                    <i class="fa fa-plus la-3x text-white"></i>
                                </span>
                                <div class="fs-14 fw-600 text-dark">Offline Recharge Wallet</div>
                            </div>
                        </div>
                    </div>

                    <div class="card rounded-0 shadow-none border">
                        <div class="card-header border-bottom-0">
                            <h5 class="mb-0 fs-20 fw-700 text-dark text-center text-md-left">Wallet Recharge History
                            </h5>
                        </div>
                        <div class="card-body py-0">
                            <table class="table mb-4">
                                <thead class="text-gray fs-12">
                                    <tr>
                                        <th class="pl-0">#</th>
                                        <th data-breakpoints="lg">Date</th>
                                        <th>Amount</th>
                                        <th data-breakpoints="lg">Payment method</th>
                                        <th class="text-right pr-0">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-14">
                                    <tr>
                                        <td class="pl-0">01</td>
                                        <td>05-06-2022</td>
                                        <td class="fw-700">$12.150</td>
                                        <td>Refund</td>
                                        <td class="text-right pr-0">
                                            N/A
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>