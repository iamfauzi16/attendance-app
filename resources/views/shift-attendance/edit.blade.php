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
        <h1>Shift Update</h1>
        <div class="form-status-attendance">
            <form action="{{ route('shift-attendance.update', $shiftAttendance) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="status-attendance" class="form-label">Nama User</label>
                      <select class="form-select @error('user_id')
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
                      <select class="form-select @error('name_shift')
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
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
