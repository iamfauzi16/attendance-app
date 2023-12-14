<?php

namespace App\Http\Controllers;

use App\StatusAttendance;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StatusAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statusAttendances = StatusAttendance::get();

        return view('status-attendance.index', compact('statusAttendances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('status-attendance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'detail_status' => 'required'
        ]);

        StatusAttendance::create($validation);

        Alert::success('Sucess Title', 'Data berhasil ditambahkan!');

        return redirect()->route('status-attendance.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StatusAttendance  $statusAttendance
     * @return \Illuminate\Http\Response
     */
    public function show(StatusAttendance $statusAttendance)
    {
        return view('status-attendance.show', compact('statusAttendance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StatusAttendance  $statusAttendance
     * @return \Illuminate\Http\Response
     */
    public function edit(StatusAttendance $statusAttendance)
    {
        return view('status-attendance.edit', compact('statusAttendance'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StatusAttendance  $statusAttendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StatusAttendance $statusAttendance)
    {
        $validation = $request->validate([
            'name' => 'nullable',
            'detail_status' => 'nullable'
        ]);
    
        $statusAttendance->update($validation);
    
        return redirect()->route('status-attendance.index', $statusAttendance->id)
            ->with('success', 'Status Attendance updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StatusAttendance  $statusAttendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(StatusAttendance $statusAttendance)
    {
        $statusAttendance->delete();

        return back();
    }
}
