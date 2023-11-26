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
}
