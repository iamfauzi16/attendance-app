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
                                <td class="d-flex gap-2">
                                    <a href="{{ route('status-attendance.show', $statusAttendance) }}" class="btn btn-sm btn-warning">Show</a>
                                    <a href="{{ route('status-attendance.edit', $statusAttendance) }}" class="btn btn-sm btn-success">Edit</a>
                                    <form action="{{ route('status-attendance.destroy', $statusAttendance)}}" method="POST"> 
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