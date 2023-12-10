<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css" />
</head>

<body>
    <div class="container">
        <h1>Hello, world!</h1>
        <div class="card mt-4">
            <div class="card-body">
                <div class="container">
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
                                    <form action="" method="POST"> 
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script>
       let table = new DataTable('#myTable');
    </script>
</body>

</html>
