<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class youtube extends Model
{
    protected $table ='youtube';
    protected $primaryKey = 'id';
    protected $fillable  = ['name','desc','image','video','cat_id','user_id'];
}
