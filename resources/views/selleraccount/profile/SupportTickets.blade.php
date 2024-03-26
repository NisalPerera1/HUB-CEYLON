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
                                <h1 class="fs-20 fw-700 text-dark">Support Ticket</h1>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 mb-3 c-pointer text-center bg-light has-transition border h-100 hov-bg-soft-light">
                        <i class="fa fa-plus la-3x mb-2"></i>
                        <div class="fs-14 fw-600 text-dark">Create a Ticket</div>
                    </div>
                    <div class="card rounded-0 shadow-none border">
                        <div class="card-header border-bottom-0">
                            <h5 class="mb-0 fs-20 fw-700 text-dark text-center text-md-left">Tickets</h5>
                        </div>
                        <div class="card-body py-0">
                            <table class="table mb-4">
                                <thead class="text-gray fs-12">
                                    <tr>
                                        <th data-breakpoints="lg" class="pl-0">Ticket ID</th>
                                        <th data-breakpoints="lg">Sending Date</th>
                                        <th>Subject</th>
                                        <th>Status</th>
                                        <th data-breakpoints="lg" class="text-right pr-0">Options</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-14">
                                    <tr>
                                        <td class="pl-0 fw-700">#1000002513</td>
                                        <td>2022.04.28 03:07:04</td>
                                        <td>A doloribus aut quae</td>
                                        <td>
                                            <span class="badge badge-inline badge-secondary p-3 fs-12"
                                                style="border-radius: 25px; min-width: 80px !important;">Open</span>
                                        </td>
                                        <td class="text-right pr-0">
                                            <a href=""
                                                class="btn btn-styled btn-link fw-700 py-1 px-0 icon-anim text-decoration-none">
                                                View Details
                                                <i class="fa fa-angle-right fw-900 text-sm"></i>
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