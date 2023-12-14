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
              <div class="row">
                <div class="col-6">
                  <p>Nama User</p>
                  <h3>{{ $shiftAttendance->user->name }}</h3>
                </div>
                <div class="col-6">
                  <p>Nama Shift</p>
                  <h3>{{ $shiftAttendance->name_shift }}</h3>
                </div>
                <div class="col-6">
                  <p>Start Time</p>
                  <h3>{{ $shiftAttendance->start_time }}</h3>
                </div>
                <div class="col-6">
                  <p>End Time</p>
                  <h3>{{ $shiftAttendance->end_time }}</h3>
                </div>
              </div>   
              <a href="{{ route('shift-attendance.index') }}" class="btn btn-sm btn-danger mt-3">Kembali</a>     
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
