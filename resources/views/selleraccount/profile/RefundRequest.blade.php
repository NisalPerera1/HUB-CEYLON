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
                    <div class="card rounded-0 shadow-none border">
                        <div class="card-header border-bottom-0">
                            <h5 class="mb-0 fs-20 fw-700 text-dark">Applied Refund Requests</h5>
                        </div>
                        <div class="card-body py-0">
                            <table class="table mb-0">
                                <thead class="text-gray fs-12">
                                    <tr>
                                        <th class="pl-0">#</th>
                                        <th data-breakpoints="lg">Date</th>
                                        <th>Code</th>
                                        <th data-breakpoints="lg">Product</th>
                                        <th data-breakpoints="lg">Amount</th>
                                        <th class="text-right pr-0 w-140px">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-14">
                                    <tr>
                                        <td class="pl-0 text-dark" style="vertical-align: middle;">01</td>
                                        <td class="text-secondary" style="vertical-align: middle;">19-04-2022</td>
                                        <td style="vertical-align: middle;">
                                            <a href="" class="fw-700 text-primary">20220420-07073292</a>
                                        </td>
                                        <td style="vertical-align: middle;">
                                            COOP by SwimWays Hydro Lacrosse, Blue, Outdoor Games For Adults &amp; Kids
                                        </td>
                                        <td class="fw-700" style="vertical-align: middle;">
                                            $15.000
                                        </td>
                                        <td class="text-right pr-0 d-flex justify-content-end" style="vertical-align: middle;gap:10px;">
                                            <a href=""
                                                class="btn btn-soft-primary hov-svg-white btn-icon btn-circle btn-sm d-flex justify-content-center align-items-center"
                                                title="">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <span class="badge badge-inline badge-danger p-3 fs-12"
                                                style="border-radius: 25px; min-width: 80px !important;">Rejected</span>
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