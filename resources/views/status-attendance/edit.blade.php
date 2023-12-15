@extends('layouts.dashboard')

@section('title', 'Status Attendance | Edit')
@section('header', 'Status Attendance Edit')

@section('content')
    <div>
        <div class="card">
            <div class="card-body">
                <div class="form-status-attendance">
                    <form action="{{ route('status-attendance.update', $statusAttendance->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="status-attendance" class="form-label">Status Attendance</label>
                            <input type="text" class="form-control" id="status-attendance" placeholder="Status" name="name"
                                value="{{ $statusAttendance->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="status-attendance-detail" class="form-label">Detail Status</label>
                            <input type="text" class="form-control" id="status-attendance-detail" placeholder="Note"
                                name="detail_status" value="{{ $statusAttendance->detail_status }}">
                        </div>
        
                        <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                        <a href="{{ route('status-attendance.index') }}" class="btn btn-sm btn-danger">Kembali</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
