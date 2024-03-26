@extends('selleraccount.app')

@section('content')

<div class="aiz-main-wrapper d-flex flex-column bg-white">
    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-start">
                {{-- <div class="aiz-user-sidenav-wrap position-relative z-1 rounded-0">
                    @include('selleraccount.profile.sidebar')
                </div> --}}
                <div class="aiz-user-panel">
                    <div class="aiz-titlebar mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h1 class="fs-20 fw-700 text-dark">Manage Profile</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-0 shadow-none border">
                        <div class="card-header pt-4 border-bottom-0">
                            <h5 class="mb-0 fs-18 fw-700 text-dark">Basic Info</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label fs-14 fs-14">Your Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control rounded-0" placeholder="Your Name"
                                            name="name" value="{{ old('name', $user->name) }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label fs-14">Your Phone</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control rounded-0" placeholder="Your Phone"
                                            name="phone" value="{{ old('phone', $user->phone) }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label fs-14">Photo</label>
                                    <div class="col-md-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-soft-secondary font-weight-medium rounded-0">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="photo" name="photo">
                                                <label class="custom-file-label" for="photo">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <script>
                                    document.getElementById('photo').addEventListener('change', function() {
                                        var fileName = this.files[0].name;
                                        var label = document.querySelector('.custom-file-label');
                                        label.textContent = fileName;
                                    });
                                </script>
                                

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label fs-14">Your Password</label>
                                    <div class="col-md-10">
                                        <input type="password" class="form-control rounded-0"
                                            placeholder="New Password" name="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label fs-14">Confirm Password</label>
                                    <div class="col-md-10">
                                        <input type="password" class="form-control rounded-0"
                                            placeholder="Confirm Password" name="password_confirmation">
                                    </div>
                                </div>
                                <div class="form-group mb-0 text-right">
                                    <button type="submit" class="btn btn-primary rounded-0 w-150px mt-3">Update
                                        Profile</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card rounded-0 shadow-none border">
                        <div class="card-header pt-4 border-bottom-0">
                            <h5 class="mb-0 fs-18 fw-700 text-dark">Address</h5>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <div class="border p-4 mb-4 position-relative">
                                    <div class="row fs-14 mb-2 mb-md-0">
                                        <span class="col-md-2 text-secondary">Address:</span>
                                        <span class="col-md-8 text-dark">{{ $user->address }}</span>
                                    </div>
                                    <div class="row fs-14 mb-2 mb-md-0">
                                        <span class="col-md-2 text-secondary">Postal Code:</span>
                                        <span class="col-md-10 text-dark">{{ $user->postal_code }}</span>
                                    </div>
                                    <div class="row fs-14 mb-2 mb-md-0">
                                        <span class="col-md-2 text-secondary">City:</span>
                                        <span class="col-md-10 text-dark">{{ $user->city }}</span>
                                    </div>
                                    <div class="row fs-14 mb-2 mb-md-0">
                                        <span class="col-md-2 text-secondary">State:</span>
                                        <span class="col-md-10 text-dark">{{ $user->state }}</span>
                                    </div>
                                    <div class="row fs-14 mb-2 mb-md-0">
                                        <span class="col-md-2 text-secondary">Country:</span>
                                        <span class="col-md-10 text-dark">{{ $user->country }}</span>
                                    </div>
                                    
                                    <div class="absolute-md-top-right pt-2 pt-md-4 pr-md-5">
                                        <span class="badge badge-inline badge-secondary-base text-white p-3 fs-12" style="border-radius: 25px; min-width: 80px !important;">Default</span>
                                    </div>
                                
                                    <div class="dropdown position-absolute right-0 top-0 pt-4 mr-1">
                                        <button class="btn bg-gray text-white px-1 py-1" type="button" data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editAddressModal">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                           


                            <div class="modal fade" id="editAddressModal" tabindex="-1" role="dialog" aria-labelledby="editAddressModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editAddressModalLabel">Edit Address</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('users.update.address', $user->id) }}">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="address">Address</label>
                                                        <input type="text" class="form-control" id="address" name="address">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="postal_code">Postal Code</label>
                                                        <input type="text" class="form-control" id="postal_code" name="postal_code">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="city">City</label>
                                                        <input type="text" class="form-control" id="city" name="city">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="state">State</label>
                                                        <input type="text" class="form-control" id="state" name="state">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="country">Country</label>
                                                        <input type="text" class="form-control" id="country" name="country">
                                                    </div>
                                                </div>
                                                <!-- Other address fields -->
                                                <button type="submit" class="btn btn-primary">Update Address</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            


                            <!-- Add New Address -->
                            <div class="">
                                <div
                                    class="border p-3 mb-3 c-pointer text-center bg-light has-transition hov-bg-soft-light">
                                    <i class="fa fa-plus la-2x"></i>
                                    <div class="alpha-7 fs-14 fw-700">Add New Address</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('users.update.email', $user->id) }}">
                        @csrf
                        @method('PUT')
                                                <div class="card rounded-0 shadow-none border">
                            <div class="card-header pt-4 border-bottom-0">
                                <h5 class="mb-0 fs-18 fw-700 text-dark">Change your email</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="fs-14">Your Email</label>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control rounded-0" placeholder="Your Email" name="email"
                                                value="{{ $user->email }}" />
                                            <div class="input-group-append">
                                                <button type="button"
                                                    class="btn btn-outline-secondary new-email-verification">
                                                    <span class="d-none loading">
                                                        <span class="spinner-border spinner-border-sm" role="status"
                                                            aria-hidden="true"></span>Sending Email...
                                                    </span>
                                                    <span class="default">Verify</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 text-right">
                                            <button type="submit" class="btn btn-primary rounded-0 w-150px mt-3">Update
                                                Email</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>