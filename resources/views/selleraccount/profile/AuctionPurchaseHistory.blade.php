@extends('selleraccount.app')
@section('content')

<div class="aiz-main-wrapper d-flex flex-column bg-white">
    <section class="py-5">
    <div class="container">
        <div class="d-flex align-items-start">
            <div class="aiz-user-sidenav-wrap position-relative z-1 rounded-0">
                <div class="aiz-user-sidenav overflow-auto c-scrollbar-light px-4 pb-4">
                    

                    @include('selleraccount.profile.sidebar')

                </div>
            </div>
            <div class="aiz-user-panel">
                <div class="card rounded-0 shadow-none border">
                    <div class="card-header border-bottom-0">
                        <h5 class="mb-0 fs-20 fw-700 text-dark">Purchase History from Auction</h5>
                    </div>
                    <div class="card-body py-0">
                        <table class="table aiz-table mb-0">
                            <thead class="text-gray fs-12">
                                <tr>
                                    <th class="pl-0">Code</th>
                                    <th data-breakpoints="md">Date</th>
                                    <th>Amount</th>
                                    <th data-breakpoints="md">Delivery Status</th>
                                    <th data-breakpoints="md">Payment Status</th>
                                    <th class="text-right pr-0">Options</th>
                                </tr>
                            </thead>
                            <tbody class="fs-14">
                                <tr>
                                    <td class="pl-0">
                                        <a href="" class="fw-700 text-primary">20220420-07073292</a>
                                    </td>
                                    <td class="text-secondary">20-04-2022</td>
                                    <td class="fw-700">
                                        $80.950
                                    </td>
                                    <td class="fw-700">
                                        Delivered
                                    </td>
                                    <td>
                                        <span class="badge badge-inline badge-success p-3 fs-12"
                                              style="border-radius: 25px; min-width: 80px !important;">Paid</span>
                                    </td>
                                    <td class="text-right pr-0">
                                        <a href="" class="btn btn-soft-info btn-icon btn-circle btn-sm hov-svg-white" title="">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                        <a class="btn btn-soft-warning btn-icon btn-circle btn-sm hov-svg-white"
                                           href="" title="Download Invoice">
                                            <img src="~/images/profilenav/get.png" alt="" width="10" height="10" />
                                        </a>
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