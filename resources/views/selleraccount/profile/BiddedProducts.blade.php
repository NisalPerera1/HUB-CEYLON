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
                            <h5 class="mb-0 fs-20 fw-700 text-dark">All Bidded Products</h5>
                        </div>
                        <div class="card-body py-0">
                            <table class="table mb-0">
                                <thead class="text-gray fs-12">
                                    <tr>
                                        <th class="pl-0">#</th>
                                        <th width="40%">Product</th>
                                        <th data-breakpoints="md">My Bid</th>
                                        <th data-breakpoints="md">Highest Bid</th>
                                        <th data-breakpoints="md">End Date</th>
                                        <th class="text-right pr-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-14">
                                    <tr>
                                        <td class="pl-0" style="vertical-align: middle;">01</td>
                                        <td class="text-dark" style="vertical-align: middle;">
                                            <a href="" class="text-reset hov-text-primary d-flex align-items-center">
                                                <img class="lazyload img-fit size-70px"
                                                    src="https://demo.activeitzone.com/ecommerce/public/uploads/all/3IRyF3GWGW5HJ47Od8A1hnSNWj9XPWzsZ26eX1ES.webp"
                                                    alt="">
                                                <span class="ml-1">Bridesmaid Jewelry Sets for Women</span>
                                            </a>
                                        </td>
                                        <td class="fw-700" style="vertical-align: middle;">$550.000</td>
                                        <td style="vertical-align: middle;">
                                            <span class="badge badge-inline  badge-success  p-3 fs-12"
                                                style="border-radius: 25px; min-width: 80px !important;">
                                                $550.000
                                            </span>
                                        </td>
                                        <td style="vertical-align: middle;">
                                            01.03.2025 00:00:00
                                        </td>
                                        <td class="text-right pr-0" style="vertical-align: middle;">
                                            N\A
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
    <?php include('./footer.php') ?>
</div>