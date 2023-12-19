<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Attendance;
use App\ShiftAttendance;
use App\StatusAttendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {
      Auth::user();
    }

    public function index()
    {
        $user_id = Auth::user()->id;    
        $attendances = Attendance::where('user_id', $user_id)->get();

        return view('attendance.index', compact('attendances'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $currentTime = Carbon::now();
        $startTime = Carbon::today()->setHour(1)->setMinute(0)->setSecond(0);
        $endTime = Carbon::today()->setHour(6)->setMinute(0)->setSecond(0);

        $isBetween = $currentTime->between($startTime, $endTime);
        if($isBetween) {
            return view('attention.system-off');
        }
        return view('attendance.create');

    }
   
    
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dateIn = Carbon::now();
        $dateTime = $dateIn->format('Y-m-d');

        $user_id = Auth::user()->id;

        // $statusAttendance = StatusAttendance::where('name',['Hadir','Terlambat', 'Ijin'])->first;

        $shiftAttendance = ShiftAttendance::where('user_id', $user_id)->first();
        if(!$shiftAttendance) {
            return response()->view('error.400', [], 400);
        }

        $attendanceValidation = Attendance::get()->first();

        $attendance = new Attendance;

        if($attendanceValidation) {
            Alert::warning('Warning','Kamu Sudah Melakukan Absen');
            return redirect()->route('attendance.create');
        }
        if($dateIn < Carbon::parse($shiftAttendance->start_time)) {
        
        $statusAttendance = StatusAttendance::where('name','Hadir')->first();

        if(!$statusAttendance) {
            return response()->view('error.400',[], 400);
        }

        $attendance->user_id = $user_id;
        $attendance->in = $dateIn->format('H:i:s');
        $attendance->note = $request->note;
        $attendance->date_time = $dateTime;

        $attendance->status_attendance_id = $statusAttendance->id;
        $attendance->shift_attendance_id = $shiftAttendance->id;
        $attendance->save();
        Alert::success('Success','Kamu Berhasil Absen Masuk');
        return redirect()->route('attendance.out', $attendance->id);

        } elseif($dateIn > Carbon::parse($shiftAttendance->start_time)->copy()->addMinutes(30) ) {
            
            $statusAttendance = StatusAttendance::where('name','Terlambat')->first();

            if(!$statusAttendance) {
                return response()->view('error.400',[], 400);
            }

            $attendance = new Attendance;

            $attendance->user_id = $user_id;
            $attendance->in = $dateIn->format('H:i:s');
            $attendance->note = $request->note;
            $attendance->date_time = $dateTime;
    
            $attendance->status_attendance_id = $statusAttendance->id;
            $attendance->shift_attendance_id = $shiftAttendance->id;
            $attendance->save();
            Alert::success('Success','Kamu berhasil absen masuk');
    
            return redirect()->route('attendance.out',$attendance->id);

        } 
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function out(Attendance $attendance)
    {
        return view('attendance.out', compact('attendance'));
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendance $attendance)
    {

        $validation = $request->validate([
            'out' => 'required'
        ]);

        $dateIn = Carbon::now();
        $user_id = Auth::user()->id;
        $attendanceUpdate = Attendance::findOrFail($attendance->id);

        $shiftAttendance = ShiftAttendance::where('user_id', $user_id)->first();
        if(!$attendanceUpdate) {
            Alert::warning('Warning', 'Sudah absen Keluar!');
            return redirect()->route('attendance.index');
        }

        if ($dateIn <= Carbon::parse($shiftAttendance->end_time)) {
           
            $attendanceUpdate->user_id = $user_id;
            $attendanceUpdate->out = $dateIn->format('H:i:s');
          
            $attendanceUpdate->save();
            Alert::success('Success','Kamu berhasil absen keluar');
    
            return redirect()->route('attendance.index');
    
        }
    
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendance $attendance)
    {
        $attendance->delete();

        return back();
    }

    public function nyoba()
    {
       $attendanceFind = Attendance::latest('in')->first();
       if(!$attendanceFind) {
        Alert::warning('Warning', 'Lakukan absen masuk terlebih dahulu!');

        return redirect()->route('attendance.create');
       }
        return view('attendance.create-out', compact('attendanceFind'));
    }
}
