<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{

    protected $guarded = [];

     protected $fillable = [
       'factor', 'attribute', 'appraisee', 'appraisee', 'agreed', 'lecture_id'
     ];

     public function lecture(){
         return $this->belongsTo(Lecture::class );
     }
}
