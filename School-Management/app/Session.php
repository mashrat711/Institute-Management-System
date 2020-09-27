<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $guarded=[];
    public function course(){
        return $this->belongsTo(Course::class);
        
    }
    public function studentSession(){
        return$this->belongsTo(StudentSession::class);
    }
}
