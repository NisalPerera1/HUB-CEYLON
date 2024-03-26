@extends('layouts.app')

@section('content')
<div class="aiz-main-wrapper d-flex flex-column bg-white">
    
    <div class="register mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4 col-md-5 col-11 register-content" id="register-content">
                <div class="register-form p-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h4 class="mt-2 text-center">Create an Account</h4>
                        <div class="form-group mt-4">
                            <label class="fs-12 fw-700 text-soft-dark">Full Name</label>
                            <input type="text" name="name" placeholder="Full Name">
                        </div>
                        <div class="form-group mt-2">
                            <div class="row" id="register-phone">
                                <div class="col-12">
                                    <label class="fs-12 fw-700 text-soft-dark">Phone</label>
                                    <input type="tel" id="phone" name="phone" pattern="[0-9]*">
                                </div>
                            </div>
                            <div class="row" id="register-email">
                                <div class="col-12">
                                    <label class="fs-12 fw-700 text-soft-dark">Email</label>
                                    <input type="email" name="email" placeholder="johndoe@example.com">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <label class="fs-12 fw-700 text-soft-dark">Password</label>
                            <input type="password" name="password" placeholder="Password">
                            <p class="text-end text-secondary" style="font-size: 12px;">Password must contain at least 6 digits</p>
                        </div>
                        <div class="form-group mt-2">
                            <label class="fs-12 fw-700 text-soft-dark">Confirm Password</label>
                            <input type="password" name="password_confirmation" placeholder="Confirm Password">
                        </div>
                        <div class="form-group mt-4">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-between">
                                    <div class="form-check form-check-inline">
                                        <label class="aiz-checkbox">
                                            <input type="checkbox" name="terms&conditions" id="termsCheckbox">
                                            <span class="has-transition fs-14 fw-400 text-gray-dark hov-text-primary">By signing up you agree to our terms and conditions</span>
                                            <span class="aiz-square-check"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="register-btn">Create Account</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 col-11 register-image" id="register-image">
            </div>
        </div>
    </div>

</div>
@endsection
