<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;

class SupervisorProfile extends Model
{
    use Notifiable;

    /*Disabling guarded*/
    protected $guarded = [];

    public function supervisor(){
        return $this->belongsTo(Supervisor::class );
    }
}
