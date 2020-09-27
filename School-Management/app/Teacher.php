<?php

namespace App;

use App\Http\Controllers\TeacherPostGraduationInfoController;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $guarded=[];
//    public function teacherGraduationInfo(){
//        return $this->hasOne(TeacherGraduationInfo::class);
//    }
    public function teacherSecondaries(){
        return $this->hasMany(TeacherSecondaryEducation::class);
    }
//    public function HigherSecondaryEdu(){
//        return $this->hasOne(TeachersHigherSecondaryEdu::class);
//        
//    }
//    public function PostGraduation(){
//        return $this->hasOne(TeacherPostGraduationInfo::class);
//    }
    public function TeacherWorkshops(){
        return $this->hasMany(TeachersWorkshop::class);
    }
    public function Attendences(){
        return $this->hasMany(Attendence::class);
    }

    public function results(){
        return $this->hasMany(Result::class);
    }
}
