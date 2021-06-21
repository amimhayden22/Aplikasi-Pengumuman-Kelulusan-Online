@extends('layouts.app')
@section('title')Pengumuman Kelulusan @endsection
@section('style')
<link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap-social/bootstrap-social.css') }}">
@endsection
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
                <!-- <img src="../assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle"> -->
                @if (Session::has('failed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <i class="fas fa-bullhorn" style="font-size: 2em"></i>
                    <br>
                    {{ Session('failed') }}
                </div>
                @endif
            </div>
            
            <div class="card card-primary">
                <div class="card-header"><h4>Pengumuman Kelulusan</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('cek.pengumuman') }}" class="needs-validation" novalidate="">
                        @csrf
                        <div class="form-group">
                            <label for="nisn">{{ __('NISN') }}</label>
                            <input id="nisn" type="number" class="form-control @error('nisn') is-invalid @enderror" name="nisn" value="{{ old('nisn') }}" required autocomplete="nisn" autofocus tabindex="1">
                            @if (count($errors) > 0)
                                @error('nisn')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            @else
                                <div class="invalid-feedback">
                                    Please fill in your NISN
                                </div>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <div class="d-block">
                                <label for="date_of_birth" class="control-label">{{ __('Tanggal Lahir') }}</label>
                            </div>
                            <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" required autocomplete="current-date_of_birth" tabindex="2">
                            @if (count($errors) > 0)
                                @error('date_of_birth')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            @else
                                <div class="invalid-feedback">
                                    Please fill in your Tanggal Lahir
                                </div>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                    <div class="text-center mt-4 mb-3">
                        <div class="text-job text-muted">
                            <a href="{{ url('/') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali ke Beranda</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="simple-footer">
                Copyright &copy; APeK Online {{ date('Y') }}
            </div>
        </div>
    </div>
</div>
@endsection