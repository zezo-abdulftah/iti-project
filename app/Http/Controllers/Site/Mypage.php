<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\PhotoRequest;
use App\Http\Requests\UpdatePassword;
use App\Http\Requests\UpUserRequest;
use App\models\Comment;
use App\models\Friend;
use App\models\Post;
use App\User;
use http\Env\Response;
use Illuminate\Http\Request;
use mysql_xdevapi\CollectionAdd;
use phpDocumentor\Reflection\Types\Collection;
use Validator;

class Mypage extends Controller
{
    public function mypage(){

$data=[];
        $data['users']=User::with(['friends','friends1'])->get();
            $users=User::with(['friends','friends1'])->get();

    $data['posts']=Post::with(['user','comments'])->orderBy('id','DESC')->where('user_id',auth()->user()->id)->get();
        return view('mypage.mypage',$data);
    }
    public function editprofile(){

        $user=User::find(auth()->user()->id);
        return view('mypage.edit-profile',compact('user'));
    }

    public function updateprofile(UpUserRequest $request){
        try {


            $user = User::FindOrFail(auth()->user()->id);
            $user->update($request->all());
            return redirect()->back()->with(['success' => 'the update is successful']);



        }catch (Exception $ex){
            return redirect()->back()->with(['error'=>'there is error']);
        }

    }

    ///// update photo

    public function update_Personal_photo(PhotoRequest $request){
        try {
            $personal_photo = uploadimage('users', $request->personal_photo);

            $user = User::FindOrFail(auth()->user()->id);
            $user->update([
                'personal_photo'=> $personal_photo
            ]);
            return redirect()->back()->with(['success'=>'the update is successful']);


        }catch (Exception $ex){
            return redirect()->back()->with(['error'=>'there is error']);
        }

    }
    public function update_cover_photo(Request $request){
        try {
            $cover_photo = uploadimage('users', $request->cover_photo);

            $user = User::FindOrFail(auth()->user()->id);

            $user->update([
                'cover_photo'=> $cover_photo
            ]);
            return redirect()->back()->with(['success'=>'the update is successful']);


        }catch (Exception $ex){
            return redirect()->back()->with(['error'=>'there is error']);
        }

    }
    public function editpassword(){

        $user=User::find(auth()->user()->id);
        return view('mypage.edit-password',compact('user'));
    }

    public function updatepassword(UpdatePassword $request){
        try {

            $user = User::FindOrFail(auth()->user()->id);
            if(auth()->attempt(['password'=>$request->input('current_password'),'email'=>$user->email])) {

                $user->update([
                    'password'=>bcrypt($request->new_password)
                ]);
                return redirect()->back()->with(['success' => 'the update is successful']);
            }
            else{
                return redirect()->back()->with(['error' => 'the current password is error']);
            }

        }catch (Exception $ex){
            return redirect()->back()->with(['error'=>'there is error']);
        }

    }
    public function makePost(Request $request){
        try {
            if ($request->body != null or $request->post_image != null){
                if ($request->has('post_image')) {
                    $request->post_image = uploadimage('posts', $request->post_image);
                }
            $user = User::FindOrFail(auth()->user()->id);
            $user = Post::create([
                'image' => $request->post_image,
                'user_id' => $request->user_id,
                'body' => $request->body,

            ]);
            return redirect()->back();
        }else{
                return redirect()->back();
        }
        }catch (Exception $ex){
            return redirect()->back();
        }

    }
    public function deletePost($post_id){

        try {

            $user = User::FindOrFail(auth()->user()->id);
           $delete_post= Post::FindOrFail($post_id);
           $delete_post->delete();
            return redirect()->back();



        }catch (Exception $ex){
            return redirect()->back();
        }

    }

    public function updatePost(Request $request){
        try {
            if ($request->body != null or $request->post_image != null){

            $user = User::FindOrFail(auth()->user()->id);
            $update_post=Post::FindOrFail($request->post_id);


                if ($request->has('post_image')) {
                    $request->post_image = uploadimage('posts', $request->post_image);
                }
if($request->has('post_image')) {
    $update_post->update([
        'image' => $request->post_image,
        'body' => $request->body,

    ]);
}
else{
    $update_post->update([
        'body' => $request->body,

    ]);
}
                return redirect()->back();
            }else{
                return redirect()->back();
            }
        }catch (Exception $ex){
            return redirect()->back();
        }

    }
    public function create_Comment(CommentRequest $request){
        try {

            $user = User::FindOrFail(auth()->user()->id);
       $comment= Comment::create($request->all());
            return redirect()->back();


        }catch (Exception $ex){
            return redirect()->back();
        }

    }

    public function deleteComment($comment_id){

        try {

            $user = User::FindOrFail(auth()->user()->id);
            $delete_comment= Comment::FindOrFail($comment_id);
            $delete_comment->delete();
            return redirect()->back();



        }catch (Exception $ex){
            return redirect()->back();
        }

    }
    public function acceptFriend()
    {
        $data=[];
        $data['users']=User::with(['friends','friends1'])->get();
        $user = User::FindOrFail(auth()->user()->id);
        $data['friends']= Friend::with('user2')->where('user_id_1','=',auth()->user()->id)->where('statues','=',0)->get();
        return view('site.friends',$data);
    }
    public function accept($user_id_2)
    {

        $user = User::FindOrFail(auth()->user()->id);
        $friend=Friend::where('user_id_1',auth()->user()->id)->where('user_id_2',$user_id_2)->first();
        if($friend){
            $friend->update([
                'statues'=>1
            ]);
            return redirect()->back();

        }
        else

            return redirect()->back();
    }

    public function MyFriends()
    {

        $user = User::FindOrFail(auth()->user()->id);
        $friends=Friend::with(['user1','user2'])->where('user_id_1',auth()->user()->id)->orWhere('user_id_2',auth()->user()->id)->where('statues','=',1)->get();

            return view('site.myfriends',compact('friends'));



    }
    public function remove_friend($user_id_1){
        try {
            $user = User::FindOrFail(auth()->user()->id);
            $friend=Friend::where('user_id_1',$user_id_1)->where('user_id_2',auth()->user()->id)->first();
            if($friend) {
                $friend->delete();


                return redirect()->back();


            }
            else {
                $friend=Friend::where('user_id_1',auth()->user()->id)->where('user_id_2',$user_id_1)->first();
                $friend ->delete();
                return redirect()->back();
            }

        }catch (Exception $ex){
            return redirect()->back();
        }

    }

    public function showposts(){
        $user = User::FindOrFail(auth()->user()->id);
   return     $user->wheredoesntHave('friends1')->orwheredoesntHave('friends')->get();
       $userss=Friend::with(['user2'])->where('user_id_1','=',6)->where('statues','=',1)->get();








 }

}
