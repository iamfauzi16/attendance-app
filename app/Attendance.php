<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $guarded = [];


    public function statusAttendance()
    {
        return $this->belongsTo(StatusAttendance::class);
    }

    public function shiftAttendance()
    {
        return $this->belongsTo(ShiftAttendance::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}
