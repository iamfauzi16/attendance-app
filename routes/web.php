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

    
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
