<?php

namespace App;

use GuzzleHttp\Psr7\Request;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Lecture extends Authenticatable
{
    protected $guard = 'lecture';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile(){
        return $this->hasOne(Profile::class );
    }

    public function lectureComments(){
        return $this->hasMany(LectureComment::class );
    }

    public function storeFillObjective(){
        return $this->hasMany(LectureFillObjective::class );
    }

    public function marks(){
        return $this->hasMany(Mark::class );
    }
    public function attribute(Request $request){
        return $this->hasOne(Attribute::class );
    }
}

