<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
      'body'
    ];
    public function user(){
         $this->belongsTo(User::class );
    }

    public function Posts(){
        $this->belongsTo(Post::class );
    }
}
