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
                                <h1 class="fs-20 fw-700 text-dark">Classified Products</h1>
                            </div>
                        </div>
                    </div>

                    <div class="row gutters-16 mb-2">
                        <div class="col-md-4 mx-auto mb-4">
                            <div class="bg-dark text-white overflow-hidden text-center p-4 h-100">
                                <div class="py-2">
                                    <div class="fs-14 fw-400 text-center">Remaining Uploads</div>
                                    <div class="fs-30 fw-700 text-center">576</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mx-auto mb-4">
                            <a href="">
                                <div
                                    class="p-4 mb-3 c-pointer text-center bg-light has-transition border h-100 hov-bg-soft-light">
                                    <span
                                        class="size-60px rounded-circle mx-auto bg-dark d-flex align-items-center justify-content-center mb-3">
                                        <i class="fa fa-plus la-3x text-white"></i>
                                    </span>
                                    <div class="fs-14 fw-600 text-dark">Add New product</div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 mx-auto mb-4">
                            <div class="text-center bg-light d-block p-4 h-100 border">
                                <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/zu3eVLzwf8iAs4AG7K5h4902UhaXVR0MbWVevxjJ.webp"
                                    height="44" class="mw-100 mx-auto mb-2">
                                <span class="d-block text-dark fs-14 fw-600 mb-2">Current Package: Premium</span>
                                <a href="" class="text-primary hov-text-dark fs-14 fw-700">
                                    Upgrade Package
                                    <i class="fa fa-angle-right fs-16 fw-900"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="card rounded-0 shadow-none border">
                        <div class="card-header border-bottom-0">
                            <h5 class="mb-md-0 fs-20 fw-700 text-dark text-center text-md-left">All Products</h5>
                        </div>
                        <div class="card-body py-0">
                            <table class="table mb-0">
                                <thead class="text-gray fs-12">
                                    <tr>
                                        <th class="pl-0">#</th>
                                        <th>Product</th>
                                        <th data-breakpoints="lg">Price</th>
                                        <th data-breakpoints="lg" class="w-120px">Available Status</th>
                                        <th data-breakpoints="lg">Admin Status</th>
                                        <th class="text-right pr-0 w-90px">Options</th>
                                    </tr>
                                </thead>

                                <tbody class="fs-14">
                                    <tr>
                                        <td class="pl-0" style="vertical-align: middle;">01</td>
                                        <td class="text-dark" style="vertical-align: middle;">
                                            <a href="" class="text-reset hov-text-primary d-flex align-items-center">
                                                <img class="lazyload img-fit size-70px"
                                                    src="https://demo.activeitzone.com/ecommerce/public/uploads/all/mJIDeSiYwqhmhPE0zJ1X9svLRHDm23GSiuuLgdcR.webp"
                                                    alt="">
                                                <span class="ml-1">
                                                    Women&#039;s Two-Piece Dress with Embellished Jacket
                                                    (Petite and
                                                    Regular)
                                                </span>
                                            </a>
                                        </td>
                                        <td class="fw-700" style="vertical-align: middle;">$149.000</td>
                                        <td style="vertical-align: middle;">
                                            <label class="aiz-switch aiz-switch-success mb-0">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td style="vertical-align: middle;">
                                            <span class="badge badge-inline badge-success p-3 fs-12"
                                                style="border-radius: 25px; min-width: 80px !important;">Published</span>
                                        </td>
                                        <td class="text-right pr-0 d-flex justify-content-end align-items-center" style="vertical-align: middle;">
                                            <a class="btn btn-soft-secondary-base btn-icon btn-circle btn-sm hov-svg-white d-flex justify-content-center align-items-center"
                                                href="" title="">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href=""
                                                class="btn btn-soft-danger btn-icon btn-circle btn-sm d-flex justify-content-center align-items-center hov-svg-white confirm-delete"
                                                title="">
                                                <i class="fa fa-trash-o"></i>
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