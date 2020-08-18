<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorialComment extends Model
{
    /*Disabling guarded*/
    protected $guarded = [];

    public function tutAssistance(){
        return $this->belongsTo(TutAssistance::class );
    }
}
