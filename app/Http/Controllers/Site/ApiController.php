<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

use App\models\Post;
use App\Traits\GenralTrait;
use App\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    use GenralTrait;
    public function users(){
        $users=User::get();
        if($users) {
            return $this->sendResponse($users,'all users');
            }
        else
            return $this->errors('not there users');
    }
    public function posts(){
        $posts = Post::with(['user', 'comments'])->get();
        if($posts){
            return $this->sendResponse($posts,'all users');
        }
        else{
            return $this->errors('not there posts');

        }
    }
    public function showpost(Request $request){
        $post= Post::with(['user', 'comments'])->find($request->id);
        if($post){
            return $this->sendResponse($post,'all users');
        }
        else{
            return $this->errors('not there posts');

        }
    }
}
