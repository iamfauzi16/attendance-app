<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Status Attendance Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Status</h1>
        <div class="form-status-attendance">
            <form action="{{ route('status-attendance.update', $statusAttendance->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="status-attendance" class="form-label">Status Attendance</label>
                    <input type="text" class="form-control" id="status-attendance" placeholder="Status" name="name" value="{{ $statusAttendance->name }}">
                </div>
                <div class="mb-3">
                    <label for="status-attendance-detail" class="form-label">Detail Status</label>
                    <input type="text" class="form-control" id="status-attendance-detail" placeholder="Note" name="detail_status"  value="{{ $statusAttendance->detail_status }}">
                </div>

                <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
