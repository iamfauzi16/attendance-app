@extends('layouts.dashboard')

@section('title', 'Shift Attendance | Edit')
@section('header','Shift Attendance Edit')

@section('content')
<div>
  <div class="card">
    <div class="card-body">
      <div class="form-status-attendance">
        <form action="{{ route('shift-attendance.update', $shiftAttendance) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="status-attendance" class="form-label">Nama User</label>
                  <select class="custom-select @error('user_id')
                    is-invalid
                  @enderror" aria-label="Default select example" name="user_id">
                    <option value="{{ $shiftAttendance->user->id }}">{{ $shiftAttendance->user->name }}</option>
                  </select>
                  @error('user_id')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="status-attendance-detail" class="form-label">Jenis Shift</label>
                  <select class="custom-select @error('name_shift')
                    is-invalid
                  @enderror" aria-label="Default select example" name="name_shift">
                    <option selected disabled>Pilih Shift</option>
                    <option value="Shift Pagi">Shif Pagi</option>
                    <option value="Shift Sore">Shif Sore</option>
                  </select>
                  @error('name_shift')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
               
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label for="status-attendance-detail" class="form-label">Jam Masuk</label>
                  <input type="time" class="form-control @error('start_time')
                    is-invalid
                  @enderror" id="status-attendance-detail" name="start_time" value="{{ $shiftAttendance->start_time }}">
                  @error('start_time')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                 @enderror
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label for="status-attendance-detail" class="form-label">Jam Keluar</label>
                  <input type="time" class="form-control @error('end_time')
                    is-invalid
                  @enderror" id="status-attendance-detail" name="end_time" value="{{ $shiftAttendance->end_time }}">
                  @error('end_time')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
            <a href="{{ route('shift-attendance.index') }}" class="btn btn-sm btn-danger">Kembali</a>
        </form>
    </div>
    </div>
  </div>
</div>
@endsection
