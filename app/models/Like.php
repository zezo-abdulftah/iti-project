<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table='likes';
    protected $guarded=[];
    protected function user(){
        return $this->belongsTo('App\User');

    }
    protected function post(){
        return $this->belongsTo('App\models\Post');
    }
}
