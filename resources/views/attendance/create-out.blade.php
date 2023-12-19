@extends('layouts.dashboard')
@section('title', 'History Attendance')
@section('header', 'History Attendance')
@section('content')
    <div>
        <div class="card">
            <div class="card-body">
                <fieldset disabled>
                    <div class="row">
                        <div class="col-3">
                            <label for="Check In">Check In</label>
                            <input type="time" class="form-control disable" value="{{ $attendanceFind->in }}">
                        </div>
                        <div class="col-3">
                            <label for="Check In">Status Attendance</label>
                            <input type="text" class="form-control disable" value="{{ $attendanceFind->statusAttendance->name }}">
                        </div>
                        <div class="col-3">
                            <label for="Check In">Date</label>
                            <input type="text" class="form-control disable" value="{{ $attendanceFind->date_time }}">
                        </div>
                        <div class="col-3">
                          <label for="Check In">Shift Category</label>
                          <input type="text" class="form-control disable" value="{{ $attendanceFind->shiftAttendance->name_shift }}">
                      </div>
                    </div>
                </fieldset>
                <a href="{{ route('attendance.out', $attendanceFind->id) }}" class="btn btn-sm btn-primary mt-3">Check Out</a>
                <p class="mt-2"><small>Please check out attendance before finishing work</small></p>
                
              </div>
        </div>
    </div>
@endsection
