<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use App\Http\Requests\SearchRequest;
use App\models\Friend;
use App\models\Post;
use App\User;
use Illuminate\Http\Request;

class SiteController extends Controller
{

   public function site(){
       $data=[];
       $data['users']=User::with(['friends','friends1'])->get();
       $friends=Friend::with(['user2'])->where('user_id_1','=',auth()->user()->id)->where('statues','=',1)->get();
       $posts=[];
       foreach ($friends as $friend){

           array_push($posts,Post::with(['user','comments'])->orderBy('id','DESC')->where('user_id',$friend->user2->id)->get());

       }
       $friendss=Friend::with(['user1'])->where('user_id_2','=',auth()->user()->id)->where('statues','=',1)->get();

       foreach ($friendss as $friend){

           array_push($posts,Post::with(['user','comments'])->orderBy('id','DESC')->where('user_id',$friend->user1->id)->get());

       }
       array_push($posts,Post::with(['user','comments'])->orderBy('id','DESC')->where('user_id',auth()->user()->id)->get());
$data['posts']=$posts;
       return view('site.index', $data);

   }

    public function SearchFriend(){
$name=$_GET['search'];
        $searchname=User::where('name','LIKE','%'.$name.'%')->get();
    return view('site.searchFriend',compact('searchname'));


    }
    public function add_frind($user_id_1){
        try {
            $user = User::FindOrFail(auth()->user()->id);
            $friend=Friend::where('user_id_1',$user_id_1)->where('user_id_2',auth()->user()->id)->first();
            if($friend){
                return redirect()->back();
            }
            else{
                Friend::create([
                    'user_id_1'=>$user_id_1,
                    'user_id_2'=>auth()->user()->id,
                    'statues'=>0
                ]);
                return redirect()->back();
            }



        }catch (Exception $ex){
            return redirect()->back();
        }

    }
    public function delete_frind($user_id_1){
        try {
            $user = User::FindOrFail(auth()->user()->id);
            $friend=Friend::where('user_id_1',$user_id_1)->where('user_id_2',auth()->user()->id)->first();
            if($friend) {
                $friend->delete();


                return redirect()->back();


}
            return redirect()->back();

        }catch (Exception $ex){
            return redirect()->back();
        }

    }

}
