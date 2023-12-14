<?php

namespace App\Http\Controllers;

use App\User;
use App\ShiftAttendance;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ShiftAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shiftAttendances = ShiftAttendance::all();

        return view('shift-attendance.index', compact('shiftAttendances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('shift-attendance.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shiftAttendance = $request->validate([
            'user_id' => 'required',
            'name_shift' => 'required',
            'start_time' => 'required',
            'end_time' => 'required'
        ]);

        ShiftAttendance::create($shiftAttendance);

        Alert::success('Success Title', 'Data Berhasil Ditambahkan');
        return redirect()->route('shift-attendance.create');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ShiftAttendance  $shiftAttendance
     * @return \Illuminate\Http\Response
     */
    public function show(ShiftAttendance $shiftAttendance)
    {
        return view('shift-attendance.show', [
            'shiftAttendance' => $shiftAttendance
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ShiftAttendance  $shiftAttendance
     * @return \Illuminate\Http\Response
     */
    public function edit(ShiftAttendance $shiftAttendance)
    {
        $users = User::get();
        return view('shift-attendance.edit', [
            'shiftAttendance' => $shiftAttendance,
            'users' => $users
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ShiftAttendance  $shiftAttendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShiftAttendance $shiftAttendance)
    {
        $shiftAttendanceUpdate = $request->validate([
            'user_id' => 'required',
            'name_shift' => 'required',
            'start_time' => 'required',
            'end_time' => 'required'
        ]);

        $shiftAttendance->update($shiftAttendanceUpdate);

        return redirect()->route('shift-attendance.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ShiftAttendance  $shiftAttendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShiftAttendance $shiftAttendance)
    {
        $shiftAttendance->delete();

        return back();
    }
}
