<?php

namespace App;

use App\models\Post;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'profile_picture', 'bio','personal_photo','cover_photo','gender'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts() {
        return $this->hasMany(Post::class);
    }

    public function likes() {
        return $this->hasMany('App\models\Like');
    }
    public function comments() {
        return $this->hasMany('App\models\Comment');
    }
    public function friends() {
        return $this->hasMany('App\models\Friend', 'user_id_1');
    }
    public function friends1() {
        return $this->hasMany('App\models\Friend', 'user_id_2');
    }
    public function getPhotoAttribute($value){
        return ($value!==null)?asset('assets/images/users/'.$value):"";
    }
    public function getCovphotoAttribute($value){
        return ($value!==null)?asset('assets/images/cover_users/'.$value):"";
    }
}
