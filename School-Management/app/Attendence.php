<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    protected $guarded=[];
    public function student(){
        return $this->belongsTo(Student::class);
        
    }
    public function teacher(){
        return $this->belongsTo(Teacher::class);

    }
    public function studentAttendances(){
        return $this->hasMany(Student_Attendance::class);
    }
}
