@extends('layouts.dashboard')

@section('title', 'Status Attendance | Show')

@section('header', 'Status Attendance Show')

@section('content')
<div>
  <div class="card mt-4">
      <div class="card-body">
        <div class="row">
          <div class="col-6">
            <p>Jenis Status</p>
            <h3>{{ $statusAttendance->name }}</h3>
          </div>
          <div class="col-6">
            <p>Detail Status</p>
            <h3>{{ $statusAttendance->detail_status }}</h3>
          </div>
        </div>        
        <a href="{{ route('status-attendance.index') }}" class="btn btn-sm btn-danger mt-3">Kembali</a>
      </div>
  </div>
</div>
@endsection
    