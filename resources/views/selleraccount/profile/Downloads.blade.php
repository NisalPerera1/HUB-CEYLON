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
                            <h5 class="mb-0 fs-20 fw-700 text-dark">Download Your Products</h5>
                        </div>
                        <div class="card-body">
                            <table class="table mb-0">
                                <thead class="text-gray fs-12">
                                    <tr>
                                        <th class="pl-0">Product</th>
                                        <th class="pr-0 text-right" width="20%">Option</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-14">
                                    <tr>
                                        <td class="pl-0">
                                            <a href="" class="d-flex align-items-center">
                                                <img class="lazyload img-fit size-80px"
                                                    src="https://demo.activeitzone.com/ecommerce/public/uploads/all/d6zJ0hqqTczvV4AgXJX3cFyu1TIFi6kNcHRh1L5I.webp"
                                                    alt="">
                                                <span class="ml-2">
                                                    Adobe Illustrator | Vector graphic design software |
                                                    12-month
                                                    Subscription with auto-renewal, PC/Mac
                                                </span>
                                            </a>
                                        </td>
                                        <td class="pr-0 text-right d-flex justify-content-end" style="vertical-align: middle;">
                                            <a class="btn btn-soft-info d-flex justify-content-center align-items-center btn-icon btn-circle btn-sm hov-svg-white"
                                                href="" title="Download">
                                                <img src="../images/profilenav/get.png" alt="" width="10" height="10" />
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