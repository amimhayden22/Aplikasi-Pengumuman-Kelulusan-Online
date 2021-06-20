@extends('dashboard.layouts.app')
@section('title')
Grades
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('backend/modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/modules/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
@endsection
@section('main-content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Grades</h1>
      <div class="section-header-button">
        <a href="{{ route('grades.create') }}" class="btn btn-primary">Add New</a>
      </div>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Grades</div>
      </div>
    </div>
    
    <div class="section-body">
      <h2 class="section-title">Table Grade</h2>
      <p class="section-lead">
        You can manage grade data on this page
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
              <h4>Data Grades</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Created at</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($grades as $grade)
                    <tr>
                      <td>
                        {{ $no++ }}
                      </td>
                      <td>{{ $grade->name }}</td>
                      <td>{{ $grade->created_at }}</td>
                      <td>
                        <a href="#" class="btn btn-info"><i class="fas fa-eye" aria-hidden="true"></i> Detail</a>
                        <a href="{{ route('grades.edit', $grade->id) }}" class="btn btn-warning"><i class="fas fa-pencil-alt" aria-hidden="true"></i> Edit</a>
                        <a href="#" class="btn btn-danger" 
                        data-confirm="Really?|Are you sure you delete the grade name:  <b>{{ $grade->name }}</b>?"
                        data-confirm-yes="event.preventDefault();
                        document.getElementById('delete-grade-{{ $grade->id }}').submit();"><i class="fas fa-trash" aria-hidden="true"></i> Delete</a>
                        <form id="delete-grade-{{ $grade->id }}" action="{{ route('grades.destroy', $grade->id) }}" method="POST" style="display: none;">
                          @csrf
                          @method('delete')
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
@section('script-libraies')
<script src="{{ asset('backend/modules/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/modules/datatables.net-select-bs4/js/select.bootstrap4.min.js') }}"></script> 
@endsection
@section('script-page-specific')
<script src="{{ asset('backend/assets/js/page/modules-datatables.js') }}"></script>    
@endsection