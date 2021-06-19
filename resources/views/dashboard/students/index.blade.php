@extends('dashboard.layouts.app')
@section('title')
Students
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('backend/modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/modules/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
@endsection
@section('main-content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Students</h1>
      <div class="section-header-button">
        <a href="{{ route('students.create') }}" class="btn btn-primary">Add New</a>
      </div>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Students</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Table Student</h2>
      <p class="section-lead">
        You can manage student data on this page
      </p>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Basic DataTables</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>NISN</th>
                      <th>Name</th>
                      <th>Birth of Day</th>
                      <th>Grade</th>
                      <th>Attachment</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($students as $student)
                    <tr>
                      <td>
                        {{ $no++ }}
                      </td>
                      <td>{{ $student->nisn }}</td>
                      <td>{{ $student->name }}</td>
                      <td>{{ $student->date_of_birth }}</td>
                      <td>{{ $student->grade_id }}</td>
                      <td>{{ $student->attachment }}</td>
                      <td>
                        <a href="#" class="btn btn-info"><i class="fas fa-eye" aria-hidden="true"></i> Detail</a>
                        <a href="#" class="btn btn-warning"><i class="fas fa-pencil-alt" aria-hidden="true"></i> Edit</a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash" aria-hidden="true"></i>Delete</a>
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