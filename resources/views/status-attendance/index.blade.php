@extends('layouts.dashboard')

@section('title', 'Statu Attendance')

@section('header', 'Status Attendance')

@section('content')

    <div>
        <div class="card mt-4">
            <div class="card-body">
                <div class="table-responsive">
                    <a href="{{ route('status-attendance.create') }}" class="btn btn-sm btn-success mb-4">Tambah Status</a>
                    <table class="table table-striped table-hover" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Jenis Status</th>
                                <th scope="col">Detail Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($statusAttendances as $statusAttendance)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $statusAttendance->name }}</td>
                                    <td>{{ $statusAttendance->detail_status }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('status-attendance.show', $statusAttendance) }}"
                                            class="btn btn-sm btn-warning">Show</a>
                                        <a href="{{ route('status-attendance.edit', $statusAttendance) }}"
                                            class="btn btn-sm btn-success">Edit</a>
                                        <form action="{{ route('status-attendance.destroy', $statusAttendance) }}"
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
