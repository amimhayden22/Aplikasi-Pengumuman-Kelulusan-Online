@extends('dashboard.layouts.app')
@section('title')
Create Student
@endsection
@section('main-content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('students.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Create Student</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ url('/dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('students.index') }}">Students</a></div>
                <div class="breadcrumb-item">Create Student</div>
            </div>
        </div>
        
        <div class="section-body">
            <h2 class="section-title">Create Student</h2>
            <p class="section-lead">
                On this page you can create a new Student and fill in all fields.
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
                            <h4>Create Student</h4>
                        </div>
                        <form method="POST" action="{{ route('students.update', $editStudent->id) }}" class="needs-validation" novalidate="" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nisn">NISN</label>
                                    <input id="nisn" type="number" class="form-control @error('nisn') is-invalid @enderror" name="nisn" value="{{ $editStudent->nisn }}" required autocomplete="nisn" autofocus>
                                    @if (count($errors) > 0)
                                        @error('nisn')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    @else
                                        <div class="invalid-feedback">
                                            Please fill in your nisn
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $editStudent->name }}" required autocomplete="name">
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
                                    <label for="date_of_birth">Date of Birth</label>
                                    <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ $editStudent->date_of_birth }}" required autocomplete="date_of_birth">
                                    @if (count($errors) > 0)
                                        @error('date_of_birth')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    @else
                                        <div class="invalid-feedback">
                                            Please fill in your Date of Birth
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror" required autocomplete="gender">
                                        <option holder>---- Select Gender ----</option>
                                        <option value="Laki-laki" @if($editStudent->gender == 'Laki-laki') selected @endif>Laki-laki</option>
                                        <option value="Perempuan" @if($editStudent->gender == 'Perempuan') selected @endif>Perempuan</option>
                                    </select>
                                    @if (count($errors) > 0)
                                        @error('gender')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    @else
                                        <div class="invalid-feedback">
                                            Please fill in your gender
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror" required autocomplete="status">
                                        <option holder>---- Select Status ----</option>
                                        <option value="Lulus" @if($editStudent->status == 'Lulus') selected @endif>Lulus</option>
                                        <option value="Tidak Lulus" @if($editStudent->status == 'Tidak Lulus') selected @endif>Tidak Lulus</option>
                                    </select>
                                    @if (count($errors) > 0)
                                        @error('status')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    @else
                                        <div class="invalid-feedback">
                                            Please fill in your status
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="attachment">Attachment (Link Ijazah/SKL)</label>
                                    <input id="attachment" type="text" class="form-control @error('attachment') is-invalid @enderror" name="attachment" value="{{ $editStudent->attachment }}" required autocomplete="attachment">
                                    @if (count($errors) > 0)
                                        @error('attachment')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    @else
                                        <div class="invalid-feedback">
                                            Please fill in your attachment
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="grade_id">Grade</label>
                                    <select name="grade_id" id="grade_id" class="form-control @error('grade_id') is-invalid @enderror" required autocomplete="grade_id">
                                        <option holder>---- Select Grade ----</option>
                                        @foreach ($grades as $grade)
                                            <option value="{{ $grade->id }}"
                                                @if ($editStudent->grade_id == $grade->id)
                                                    selected
                                                @endif>
                                                {{ $grade->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if (count($errors) > 0)
                                        @error('grade_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    @else
                                        <div class="invalid-feedback">
                                            Please fill in your grade
                                        </div>
                                    @endif
                                </div>
                                
                                <div class="form-group">
                                    <label for=""></label>
                                    <button class="btn btn-primary">Create</button>
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