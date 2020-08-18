<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LectureFillObjective extends Model
{
    protected $guarded = [];

    public function lectureObjective(){
      return $this->belongsTo(LectureObjective::class );
    }

    public function lecture(){
        return $this->belongsTo(Lecture::class );
    }
}
