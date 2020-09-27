<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $guarded=[];
    public function results(){
        return $this->hasMany(Result::class);
    }
}