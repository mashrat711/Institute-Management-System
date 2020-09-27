<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student_Attendance extends Model
{
    protected  $table = 'student__attendances'; 
    protected $guarded=[];
    
    public function attendance(){
        return $this->belongsTo(Attendence::class);
    }
}
