<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupervisorComment extends Model
{
    protected $fillable = ['name'];

    public function supervisor(){
        $this->belongsTo(Supervisor::class );
    }
}
