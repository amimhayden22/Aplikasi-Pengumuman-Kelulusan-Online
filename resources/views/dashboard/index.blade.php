@extends('dashboard.layouts.app')
@section('title')
Dashboard
@endsection
@section('main-content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-12 mb-4">
        <div class="hero bg-primary text-white">
          <div class="hero-inner">
            <h2>Selamat Datang, {{ Auth::user()->name }}!</h2>
            <p class="lead">
              Anda login sebagai <strong>{{ Auth::user()->role }}</strong>. 
            </p>
            </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Admin</h4>
            </div>
            <div class="card-body">
              {{ $countUser }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="fas fa-school"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Grade</h4>
            </div>
            <div class="card-body">
              {{ $countGrade }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="fas fa-users"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Student</h4>
            </div>
            <div class="card-body">
              {{ $countStudent }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection