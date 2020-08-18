<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssistanceComment extends Model
{
    protected $fillable = [
        'name',
    ];

    public function lectAssistance(){
        return $this->belongsTo(LectAssistance::class );
    }
}
