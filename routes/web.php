<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function() {
    Route::get('status-attendances', 'StatusAttendanceController@index')->name('status-attendance.index');
    Route::get('status-attendances/create', 'StatusAttendanceController@create')->name('status-attendance.create');
    Route::get('status-attendances/show/{statusAttendance}', 'StatusAttendanceController@show')->name('status-attendance.show');
    
    Route::post('status-attendances', 'StatusAttendanceController@store')->name('status-attendance.store');
    
    Route::get('status-attendances/{statusAttendance}/edit', 'StatusAttendanceController@edit')->name('status-attendance.edit');
    Route::put('status-attendances/{statusAttendance}', 'StatusAttendanceController@update')->name('status-attendance.update');
    Route::delete('status-attendances/{statusAttendance}', 'StatusAttendanceController@destroy')->name('status-attendance.destroy');
    
    
    Route::get('attendances', 'AttendanceController@index')->name('attendance.index');
    Route::get('attendances/in', 'AttendanceController@create')->name('attendance.create');
    Route::post('attendances', 'AttendanceController@store')->name('attendance.store');

    Route::get('attendances/{attendance}/out', 'AttendanceController@out')->name('attendance.out');
    Route::put('attendances/{attendance}', 'AttendanceController@update')->name('attendance.update');
    Route::delete('attendances/{attendance}', 'AttendanceController@destroy')->name('attendance.destroy');


    Route::get('shift-attendances', 'ShiftAttendanceController@index')->name('shift-attendance.index');
    Route::get('shift-attendances/create', 'ShiftAttendanceController@create')->name('shift-attendance.create');
    Route::post('shift-attendances', 'ShiftAttendanceController@store')->name('shift-attendance.store');
    Route::get('shift-attendances/show/{shiftAttendance}', 'ShiftAttendanceController@show')->name('shift-attendance.show');
    Route::get('shift-attendances/{shiftAttendance}/edit', 'ShiftAttendanceController@edit')->name('shift-attendance.edit');
    Route::put('shift-attendances/{shiftAttendance}', 'ShiftAttendanceController@update')->name('shift-attendance.update');


    Route::delete('shift-attendances/{shiftAttendance}', 'ShiftAttendanceController@destroy')->name('shift-attendance.destroy');

    Route::get('managements/logo', 'LogoAppController@index')->name('management-app.logo.index');

    
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
