<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Profile extends Model
{
    use Notifiable;

    /*Disabling guarded*/
    protected $guarded = [];

    public function lecture(){
        return $this->belongsTo(Lecture::class );
    }

    public function supervisor(){
        return $this->belongsTo(Supervisor::class );
    }
}
