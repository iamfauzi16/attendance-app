@extends('layouts.dashboard')

@section('title', 'Status Attendance | Create')
@section('header', 'Status Attendance Create')

@section('content')
    <div>
        <div class="card">
            <div class="card-body">
                <div class="form-status-attendance">
                    <form action="{{ route('status-attendance.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="status-attendance" class="form-label">Status Attendance</label>
                                    <input type="text"
                                        class="form-control @error('name') is-invalid @enderror"
                                        id="status-attendance" placeholder="Status" name="name">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="status-attendance-detail" class="form-label">Detail Status</label>
                                    <input type="text"
                                        class="form-control @error('detail_status') is-invalid @enderror"
                                        id="status-attendance-detail" placeholder="Note" name="detail_status">
                                    @error('detail_status')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
