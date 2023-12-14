<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShiftAttendance extends Model
{
    protected $guarded = [];


    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
