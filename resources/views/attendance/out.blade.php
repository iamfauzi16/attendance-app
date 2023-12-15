@extends('layouts.dashboard')

@section('title', 'Attendance | Check Out')
@section('header', 'Attendance Check Out')

@section('content')
<div>
    <div class="row justify-content-start">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Attendance Form</div>

                <div class="card-body">
                    <form method="post" action="{{ route('attendance.update', $attendance->id) }}">
                        @method('PUT')
                        @csrf
                        <p>Time</p>
                        <div class="time border rounded mb-3 justify-content-center" name="in">
                            <p id="hour"></p>
                            <p id="minute"></p>
                            <p id="second"></p>
                        </div>
                        <div class="mb-3">
                            <label for="in" class="form-label">Time In:</label>
                            <input type="text" name="out" class="form-control" value="{{ $attendance->in }}"
                                readonly>
                        </div>
                       
                        <div class="mb-3">
                            <label for="note" class="form-label">Note <span>(Optional)</span></label>
                            <textarea name="note" class="form-control" rows="3">{{ old('note') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Check Out</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
   
@push('styles')
<style>
    .time {
        display: flex;
        gap: 3rem;
        width: 200px;
       
    }

    #hour,
    #minute,
    #second {
        font-size: 1.5rem;
        font-weight: bold;
        margin: 0;
    }
</style>

@endpush
@push('scripts')
    <script>
        window.setTimeout("waktu()", 1000);

        function waktu(){
            var waktu = new Date();
            setTimeout("waktu()", 1000);
            document.getElementById("hour").innerHTML = waktu.getHours();
            document.getElementById("minute").innerHTML = waktu.getMinutes();
            document.getElementById("second").innerHTML = waktu.getSeconds();
        }
    </script>
@endpush