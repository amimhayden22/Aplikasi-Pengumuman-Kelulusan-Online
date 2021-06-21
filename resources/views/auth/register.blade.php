@extends('layouts.app')
@section('title')Register @endsection
@section('style')
<link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap-social/bootstrap-social.css') }}">
@endsection
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
                {{-- <img src="{{ asset('backend/assets/img/stisla-fill.svg') }}" alt="logo" width="100" class="shadow-light rounded-circle"> --}}
            </div>
            
            <div class="card card-primary">
                <div class="card-header"><h4>Register</h4></div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate="">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @if (count($errors) > 0)
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            @else
                                <div class="invalid-feedback">
                                    Please fill in your name
                                </div>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">
                            @if (count($errors) > 0)
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            @else
                                <div class="invalid-feedback">
                                    Please fill in your username
                                </div>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @if (count($errors) > 0)
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            @else
                                <div class="invalid-feedback">
                                    Please fill in your email
                                </div>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="password" class="d-block">Password</label>
                            <input id="password" type="password" class="form-control pwstrength @error('password') is-invalid @enderror" data-indicator="pwindicator" name="password" required autocomplete="new-password">
                            <div id="pwindicator" class="pwindicator">
                                <div class="bar"></div>
                                <div class="label"></div>
                            </div>
                            @if (count($errors) > 0)
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            @else
                                <div class="invalid-feedback">
                                    Please fill in your password
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="d-block">Password Confirmation</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        
                        <!-- <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                            </div>
                        </div> -->
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mt-5 text-muted text-center">
                You have an account? <a href="{{ route('login') }}">Login</a>
            </div>
            <div class="simple-footer">
                Copyright &copy; APeK Online {{ date('Y') }}
            </div>
        </div>
    </div>
</div>
@endsection
@section('script-libraies')
<script src="{{ asset('backend/assets/js/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/selectric/public/jquery.selectric.min.js') }}"></script>
@endsection
@section('script-page-specific')
<script src="{{ asset('backend/assets/js/page/auth-register.js') }}"></script>
@endsection