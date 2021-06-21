@extends('layouts.app')
@section('title')Login @endsection
@section('style')
<link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap-social/bootstrap-social.css') }}">
@endsection
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
                <!-- <img src="../assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle"> -->
            </div>
            
            <div class="card card-primary">
                <div class="card-header"><h4>Login</h4></div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                        @csrf
                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus tabindex="1">
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
                            <div class="d-block">
                                <label for="password" class="control-label">{{ __('Password') }}</label>
                                {{-- <div class="float-right">
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-small">
                                        Forgot Password?
                                    </a>
                                    @endif
                                </div> --}}
                            </div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" tabindex="2">
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
                        
                        {{-- <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="remember" id="remember-me" {{ old('remember') ? 'checked' : '' }} tabindex="3">
                                <label class="custom-control-label" for="remember-me">{{ __('Remember Me') }}</label>
                            </div>
                        </div> --}}
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                {{ __('Login') }}
                            </button>
                            {{-- @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif --}}
                        </div>
                    </form>
                    <div class="text-center mt-4 mb-3">
                        <div class="text-job text-muted">
                            <a href="{{ url('/') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali ke APeK Online</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 text-muted text-center">
                @if (Route::has('register'))
                    Don't have an account? <a href="{{ route('register') }}">{{ __('Create One') }}</a>
                @endif
            </div>
            <div class="simple-footer">
                Copyright &copy; APeK Online {{ date('Y') }}
            </div>
        </div>
    </div>
</div>
@endsection