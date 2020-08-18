<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;

class AssistanceLectureProfile extends Model
{
    use Notifiable;

    /*Disabling guarded*/
    protected $guarded = [];

    public function lectassistance(){
        return $this->belongsTo(LectAssistance::class );
    }
}
