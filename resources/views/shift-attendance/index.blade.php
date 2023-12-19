@extends('layouts.dashboard')

@section('title', 'Shift Attendances')
@section('header', 'Shift Attendance')

@section('content')
    <div>
        <div class="card mt-4">
            <div class="card-body">
                <div class="table-responsive">
                    @if(Auth::user()->role == 'admin')
                        <a href="{{ route('shift-attendance.create') }}" class="btn btn-sm btn-success mb-4">Tambah Shift</a>
                    @endif
                    <table class="table table-striped table-hover" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama User</th>
                                <th scope="col">Nama Shift</th>
                                <th scope="col">Start Time</th>
                                <th scope="col">End Time</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($shiftAttendances as $shiftAttendance)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $shiftAttendance->user->name }}</td>
                                    <td>{{ $shiftAttendance->name_shift }}</td>
                                    <td>{{ $shiftAttendance->start_time }}</td>
                                    <td>{{ $shiftAttendance->end_time }}</td>
                                    <td class="d-flex gap-2">
                                        <a href="{{ route('shift-attendance.show', $shiftAttendance) }}"
                                            class="btn btn-sm btn-warning">Show</a>
                                        <a href="{{ route('shift-attendance.edit', $shiftAttendance) }}"
                                            class="btn btn-sm btn-success">Edit</a>
                                        <form action="{{ route('shift-attendance.destroy', $shiftAttendance) }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
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

@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}" />
@endpush
@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
@endpush
