<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentSession extends Model
{
    protected $guarded=[];
    public function stusessions(){
        return $this->belongsToMany(Student::class);
    }
    public function sessions(){
        return $this->hasMany(Session::class);
    }
}
