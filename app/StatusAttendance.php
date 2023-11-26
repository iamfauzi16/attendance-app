<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusAttendance extends Model
{
    protected $guarded = [];

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }
}
