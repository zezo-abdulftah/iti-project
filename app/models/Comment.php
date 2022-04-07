<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded=[];
    protected function user(){
        return $this->belongsTo('App\User');
    }
    protected function post(){
        return $this->belongsTo('App\models\Post');
    }
}
