<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded=[];
    
    
    public function Attendences(){
        return $this->hasMany(Attendence::class);
    }

    public function results(){
        return $this->hasMany(Result::class);
    }
    public function sessions(){
        return $this->belongsToMany(StudentSession::class);
    }
}
