<?php

namespace App\Http\Controllers;

use App\LogoApp;
use Illuminate\Http\Request;

class LogoAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logoApps = LogoApp::all();

        return view('management.app.index', compact('logoApps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LogoApp  $logoApp
     * @return \Illuminate\Http\Response
     */
    public function show(LogoApp $logoApp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LogoApp  $logoApp
     * @return \Illuminate\Http\Response
     */
    public function edit(LogoApp $logoApp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LogoApp  $logoApp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LogoApp $logoApp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LogoApp  $logoApp
     * @return \Illuminate\Http\Response
     */
    public function destroy(LogoApp $logoApp)
    {
        //
    }
}
