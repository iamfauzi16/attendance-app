@extends('layouts.dashboard')

@section('title', 'Attendance')

@section('header', 'Attendance')

@section('content')
<div>
    <div class="card mt-4">
        <div class="card-body">
            <div>
                <a href="{{ route('attendance.create') }}" class="btn btn-sm btn-success mb-4">Tambah Attendance</a>
                <table class="table table-striped table-hover" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Employee</th>
                            <th scope="col">In</th>
                            <th scope="col">Out</th>
                            <th scope="col">Note</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status Attendance</th>
                            <th scope="col">Shift Category</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($attendances as $attendance)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $attendance->user->name }}</td>
                          
                            <td>{{ $attendance->in }}</td>
                            <td>{{ $attendance->out }}</td>
                            <td>{{ $attendance->note }}</td>

                            <td>{{ $attendance->date_time }}</td>
                            <td>{{ $attendance->statusAttendance->name }}</td>
                            <td>{{ $attendance->shiftAttendance->name_shift }}</td>

                            <td class="d-flex gap-2">
                                <a href="" class="btn btn-sm btn-warning">Show</a>
                                <a href="" class="btn btn-sm btn-success">Edit</a>
                                <form action="{{ route('attendance.destroy', $attendance) }}" method="POST"> 
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
