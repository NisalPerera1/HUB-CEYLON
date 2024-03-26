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
                    <div class="card shadow-none rounded-0 border">
                        <div class="card-header border-bottom-0">
                            <h5 class="mb-0 fs-20 fw-700 text-dark">Purchase History</h5>
                        </div>
                        <div class="card-body">
                            <table class="table mb-0">
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
                                            <a href="">20220912-10085522</a>
                                        </td>
                                        <td class="text-secondary">12-09-2022</td>
                                        <td class="fw-700">
                                            $999.000
                                        </td>
                                        <td class="fw-700">
                                            Delivered
                                        </td>
                                        <td>
                                            <span class="badge badge-inline badge-success p-3 fs-12"
                                                style="border-radius: 25px; min-width: 80px !important;">Paid</span>
                                        </td>
                                        <td class="text-right pr-0 d-flex">
                                            <a class="btn-soft-white rounded-3 btn-sm mr-1" href="">
                                                Reorder
                                            </a>
                                            <a href=""
                                                class="btn btn-soft-info btn-icon btn-circle btn-sm hov-svg-white mt-2 d-flex justify-content-center align-items-center mt-sm-0"
                                                title="">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                            <a class="btn btn-soft-secondary-base btn-icon btn-circle btn-sm hov-svg-white d-flex justify-content-center align-items-center  mt-2 mt-sm-0"
                                                href="" title="">
                                                <img src="../images/profilenav/get.png" alt="" width="10" height="10" />
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="aiz-pagination mt-2">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item disabled" aria-disabled="true" aria-label="">
                                            <span class="page-link" aria-hidden="true">&lsaquo;</span>
                                        </li>
                                        <li class="page-item active" aria-current="page">
                                            <span class="page-link">1</span>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="" rel="next" aria-label="">&rsaquo;</a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>