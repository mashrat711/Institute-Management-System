<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeachersHigherSecondaryEdu extends Model
{
    protected $guarded=[];
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
}
