<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $guarded = [];

    protected $fillable = [
        'agreed_objective', 'progress_made', 'lecture_id'
    ];

    public  function lecture(){
        return $this->belongsTo(Lecture::class );
    }
}
