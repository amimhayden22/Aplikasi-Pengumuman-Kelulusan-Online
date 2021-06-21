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
                {{-- <img src="{{ asset('frontend/assets/img/graduation.svg') }}" alt="logo" width="200" class="shadow-light rounded-circle"> --}}
            </div>
            
            <div class="card card-primary">
                <div class="card-header"><h4>Selamat <strong>{{ $dataTerakhir->name }}</strong>, Anda Lulus!</h4></div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="{{ asset('frontend/assets/img/graduation.svg') }}" alt="logo" width="200" class="shadow-light rounded-circle">
                    </div>
                    <div class="form-group">
                        <a href="{{ $dataTerakhir->attachment }}" type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                            {{ __('Download Ijazah/SKL') }}
                        </a>
                    </div>
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