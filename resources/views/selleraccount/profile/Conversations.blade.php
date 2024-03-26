@extends('selleraccount.app')
@section('content')

<div class="aiz-main-content">
    
    <div class="px-15px px-lg-25px">
        <div class="aiz-user-sidenav-wrap position-relative z-1 rounded-0">
            @include('selleraccount.profile.sidebar')
                            </div>
        <div class="aiz-titlebar mt-2 mb-4">
            
            <div class="row align-items-center">
                
                <div class="col-md-6">
                    <b class="h4">Conversations</b>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0">
                        <div class="row gutters-10">
                            <div class="col-auto">
                                <div class="media">
                                    <span class="avatar avatar-sm flex-shrink-0">
                                        <img class="rounded-circle"
                                             src="https://demo.activeitzone.com/ecommerce/public/assets/img/avatar-place.png">
                                    </span>
                                </div>
                            </div>
                            <div class="col-auto col-lg-3">
                                <p>
                                    <span class="fw-600">Paul K. Jensen</span>
                                    <br>
                                    <span class="opacity-50">
                                        10:33:07 25-07-2022
                                    </span>
                                </p>
                            </div>
                            <div class="col-12 col-lg">
                                <div class="block-body">
                                    <div class="block-body-inner pb-3">
                                        <div class="row no-gutters">
                                            <div class="col">
                                                <h6 class="mt-0">
                                                    n.
                                                    <a href="" class="text-dark fw-600">
                                                        HP Stream 9VK97UA#ABA 14 inches HD(1366x768) Display
                                                    </a>
                                                    <span class="badge badge-inline badge-danger">new</span>
                                                </h6>
                                            </div>
                                        </div>
                                        <p class="mb-0 opacity-50">
                                            Will audio play drom hdmi, or line-in only?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>