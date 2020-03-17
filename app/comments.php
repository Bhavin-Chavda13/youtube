<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $table ='comments';
  
    protected $fillable  = ['video_id','user_id','comments'];
}
    