<?php

namespace App\models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='posts';
    protected $fillable=['name','title','body','image','user_id'];
    public function user(){
        return $this->belongsTo(User::class);

    }
    public function likes(){
        return $this->hasMany('App\models\Like');
    }
    public function comments(){
        return $this->hasMany('App\models\Comment');
    }
    public function friends(){
        return $this->belongsToMany('App\models\Friend');
    }
}
