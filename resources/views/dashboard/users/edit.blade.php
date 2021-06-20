@extends('dashboard.layouts.app')
@section('title')
Edit User
@endsection
@section('main-content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('users.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Edit User</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ url('/dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></div>
                <div class="breadcrumb-item">Edit User</div>
            </div>
        </div>
        
        <div class="section-body">
            <h2 class="section-title">Edit User</h2>
            <p class="section-lead">
                On this page you can Edit a user and fill in all fields.
            </p>
            
            @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>Success!</strong> {{ Session('success') }}
            </div>
            @endif
            
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit User</h4>
                        </div>
                        <form method="POST" action="{{ route('users.update', $editUser->id) }}" class="needs-validation" novalidate="" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $editUser->name }}" required autocomplete="name" autofocus>
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
                                    <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $editUser->username }}" required autocomplete="username">
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
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $editUser->email }}" required autocomplete="email">
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
                                    <input id="password" type="password" class="form-control pwstrength @error('password') is-invalid @enderror" data-indicator="pwindicator" name="password" autocomplete="new-password">
                                    <div class="text-muted">if you don't change the password then just leave it blank!</div>
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
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                </div>
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <select name="role" id="role" class="form-control @error('role') is-invalid @enderror" required autocomplete="role">
                                        <option holder disabled selected>---- Pilih Role ----</option>
                                        <option value="Admin" @if ($editUser->role == "Admin") {{ 'selected' }} @endif>Admin</option>
                                        <option value="User" @if ($editUser->role == "User") {{ 'selected' }} @endif>User</option>
                                    </select>
                                    @if (count($errors) > 0)
                                    @error('role')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    @else
                                    <div class="invalid-feedback">
                                        Please fill in your level
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for=""></label>
                                    <button class="btn btn-primary">Edit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection