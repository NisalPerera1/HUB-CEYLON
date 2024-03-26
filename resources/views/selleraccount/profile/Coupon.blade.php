@extends('selleraccount.app')
@section('content')

<div class="aiz-main-wrapper d-flex flex-column bg-white">
    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-start">
                <div class="aiz-user-sidenav-wrap position-relative z-1 rounded-0">
@include('selleraccount.profile.sidebar')
<div class="aiz-main-content">
    <div class="px-15px px-lg-25px">
        <div class="aiz-titlebar mt-2 mb-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h3">Coupons</h1>
                </div>
            </div>
        </div>
        <div class="row gutters-10 justify-content-center">
            <div class="col-md-4 mx-auto mb-3">
                <a href="">
                    <div class="p-3 rounded mb-3 c-pointer text-center bg-white shadow-sm hov-shadow-lg has-transition">
                        <span class="size-60px rounded-circle mx-auto bg-secondary d-flex align-items-center justify-content-center mb-3">
                            <i class="las la-plus la-3x text-white"></i>
                        </span>
                        <div class="fs-18 text-primary">Add New Coupon</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-header row gutters-5">
                <div class="col">
                    <h5 class="mb-md-0 h6">All Coupons</h5>
                </div>
            </div>
            <div class="card-body">
                <table class="table aiz-table p-0">
                    <thead>
                        <tr>
                            <th data-breakpoints="lg">#</th>
                            <th>Code</th>
                            <th data-breakpoints="lg">Type</th>
                            <th data-breakpoints="lg">Start Date</th>
                            <th data-breakpoints="lg">End Date</th>
                            <th width="10%">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>MAS150</td>
                            <td>
                                Cart Base
                            </td>
                            <td>08-03-2023</td>
                            <td>01-08-2030</td>
                            <td class="text-right">
                                <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="" title="Edit">
                                    <i class="las la-edit"></i>
                                </a>
                                <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                   data-href=""
                                   title="Delete">
                                    <i class="las la-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>