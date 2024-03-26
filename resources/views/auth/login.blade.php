@extends('layouts.app')

@section('content')
<div class="aiz-main-wrapper d-flex flex-column bg-white">
    <div class="login mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-4 col-md-5 col-11 login-content" id="login-content">
            <div class="login-form p-4">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h4 class="mt-2 text-center">Welcome Back !</h4>
                    <p class="text-center">Login to your account.</p>
                    <div class="form-group mt-2">                        
                        
                        <div class="row" id="login-email">
                            <div class="col-12">
                                <label for="email" class="fs-12 fw-700 text-soft-dark">Email</label>
                                <input type="email" name="email" placeholder="johndoe@example.com" value="{{ old('email') }}" required autocomplete="email">
                            </div>
                        </div>
                       
                    </div>
                    <div class="form-group mt-2">
                        <label class="fs-12 fw-700 text-soft-dark">Password</label>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group mt-4">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-between">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label fs-12" for="remember">Remember Me</label>
                                </div>
                                <a href="{{ route('password.request') }}" class="forgot-password">Forgot Password ?</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="login-btn">Login</button>
                    </div>
                    <div class="form-group mt-4">
                        <div class="row">
                            <div class="col-12 text-center">
                                <p class="text-secondary login-with">Or Login With</p>
                            </div>
                            <div class="col-12 d-flex justify-content-center social" style="gap: 10px;">
                                <a href="">
                                    <img src="{{ asset('images/icons/facebook.png') }}" alt="Facebook Icon">

                                </a>
                                {{-- <a href="{{route('google-auth')}}"> --}}
                                        <a href="{{ route('auth.google') }}">

                                    <img src="{{ asset('images/icons/google.png') }}" alt="Google Icon">

                                </a>
                                <a href="">
                                    <img src="{{ asset('images/icons/twitter.png') }}" alt="Twitter Icon">
                                </a>
                                <a href="">
                                    <img src="{{ asset('images/icons/apple.png') }}" alt="Apple Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-4 mb-3">
                        <div class="row">
                            <div class="col-12 text-center">
                                <p class="text-secondary dont-have m-0">Don't have an account?</p>
                            </div>
                            <div class="col-12 text-center">
                                <a href="{{ route('register') }}" class="register-now">Register Now</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-4 col-md-5 col-11 login-image" id="login-image">
        </div>
    </div>
</div>
@endsection
