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
                    <div class="aiz-titlebar mt-2 mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h1 class="fs-20 fw-700 text-dark">My Clubpoints</h1>
                            </div>
                        </div>
                    </div>
                    <div class="bg-dark overflow-hidden">
                        <div class="px-3 py-4">
                            <div class="fs-14 fw-400 text-center text-secondary mb-1">Exchange rate</div>
                            <div class="fs-30 fw-700 text-center text-white">5 Points = $1.000 Wallet Money</div>
                        </div>
                    </div>
                    <br>
                    <div class="card rounded-0 shadow-none border">
                        <div class="card-header border-bottom-0">
                            <h5 class="mb-0 fs-20 fw-700 text-dark">Clubpoint Earning History</h5>
                        </div>
                        <div class="card-body">
                            <table class="table mb-0">
                                <thead class="text-gray fs-12">
                                    <tr>
                                        <th class="pl-0">#</th>
                                        <th>Code</th>
                                        <th data-breakpoints="lg">Points</th>
                                        <th data-breakpoints="lg">Converted</th>
                                        <th data-breakpoints="lg">Date</th>
                                        <th class="text-right pr-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-14">
                                    <tr>
                                        <td class="pl-0" style="vertical-align: middle;">01</td>
                                        <td class="fw-700 text-primary" style="vertical-align: middle;">
                                            20220912-10085522
                                        </td>
                                        <td class="fw-700" style="vertical-align: middle;">
                                            Refunded
                                        </td>
                                        <td style="vertical-align: middle;">
                                            <span class="badge badge-inline badge-info p-3 fs-12"
                                                style="border-radius: 25px;">No</span>
                                        </td>
                                        <td style="vertical-align: middle;">12-09-2022</td>

                                        <td class="text-right pr-0" style="vertical-align: middle;">

                                            <span class="badge badge-inline text-white badge-warning p-3 fs-12"
                                                style="border-radius: 25px; min-width: 80px !important;">Refunded</span>

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