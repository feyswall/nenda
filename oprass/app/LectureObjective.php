<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LectureObjective extends Model
{
    protected $guarded = [];

    public function lectureFillObjective(){
         return $this->hasMany(LectureFillObjective::class );
    }
}
