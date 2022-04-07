@extends('layouts.site')
@section('content')


</div><!-- sidebar -->


<div class="col-lg-6">
    <div class="central-meta">
        <div class="new-postbox">
            <figure>
                <img src="{{asset('assets/images/users/'.auth()->user()->personal_photo)}}" alt="">
            </figure>
            <div class="newpst-input">
                <!-- form of the post -->
                <form action="{{route('make_post')}}"  method="Post" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <input name="user_id" type="hidden" value="{{auth()->user()->id}}">
                    <textarea name="body" rows="2" placeholder="write something"></textarea>
                    <div class="attachments">
                        <ul>

                            <li>
                                <i class="fa fa-image"></i>
                                <label class="fileContainer">
                                    <input name="post_image" type="file">
                                </label>
                            </li>


                            <li>
                                <button type="submit">Post</button>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- add post new box -->
    <!--start show the posts  -->

    <div class="loadMore">
        @isset($posts)
            @foreach($posts as $poste)
            @foreach($poste as $post)

                <div class="central-meta item">
                @include('site.includes.update_post')
                <!-- update and delete -->
                    <ul style="color:black;width: 30px" class="drops-menu">
                        <li style="color: grey" >
                            <a class="dropdown-toggle nav-link  " href="#" data-toggle="dropdown">

                            </a>
                            <div class=" dropdown-menu dropdown-menu-right ">
                                <a post_id="{{$post->id}}" id="update_post" class="dropdown-item update_post" href="#">Update </a>


                                <a class="dropdown-item" href="{{route('delete_post',$post->id)}}" title=""> Delete </a>
                            </div>
                        </li>
                    </ul>

                    <!-- end update and delete -->
                    <div class="user-post">

                        <div class="friend-info">


                            <figure>
                                <img src="{{asset('assets/images/users/'.$post->user->personal_photo)}}" alt="">
                            </figure>



                            <div class="friend-name">
                                <ins><a href="time-line.html" title="">{{$post->user->name}}</a></ins>
                                <span>published:{{$post->created_at}} </span>
                            </div>
                            <div class="description">

                                <p>
                                    {{$post->body}}
                                </p>
                            </div>
                            <div class="post-meta">
                                @if($post->image !=null)
                                    <img  src="{{asset('assets/images/posts/'.$post->image)}}" height="315" webkitallowfullscreen mozallowfullscreen allowfullscreen></img>
                                @else
                                    {{''}}
                                @endif
                                <div class="we-video-info">
                                    <ul>

                                        <li>
															<span class="comment" data-toggle="tooltip" title="Comments">
																<i class="fa fa-comments-o"></i>
																<ins>52</ins>
															</span>
                                        </li>
                                        <li>
															<span class="like" data-toggle="tooltip" title="like">
																<i class="ti-heart"></i>
																<ins>2.2k</ins>
															</span>
                                        </li>

                                        <li class="social-media">
                                            <div class="menu">
                                                <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
                                                <div class="rotater">
                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
                                                </div>
                                                <div class="rotater">
                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
                                                </div>
                                                <div class="rotater">
                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
                                                </div>
                                                <div class="rotater">
                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
                                                </div>
                                                <div class="rotater">
                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
                                                </div>
                                                <div class="rotater">
                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
                                                    </div>
                                                </div>
                                                <div class="rotater">
                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
                                                    </div>
                                                </div>
                                                <div class="rotater">
                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="coment-area">
                            <ul class="we-comet">
                                @foreach($post->comments as $comment)
                                    <li>
                                        <!-- delete comment -->
                                        <ul style="color:black;width: 30px;height: 20px;float: right" class="drops-menu">
                                            <li style="color: grey" >
                                                <a style="height: 30px" class="dropdown-toggle nav-link  " href="#" data-toggle="dropdown">

                                                </a>
                                                <div style="width: 80px;height: 45px;padding-bottom: 3px;text-align:center " class=" dropdown-menu dropdown-menu-right ">

                                                    <a  class="dropdown-item" href="{{route('delete_comment',$comment->id)}}" title=""> Delete </a>
                                                </div>
                                            </li>
                                        </ul>
                                        <!--end delete comment -->
                                        <div class="comet-avatar">
                                            <img src="{{asset('assets/images/users/'.$comment->user->personal_photo)}}" alt="">
                                        </div>
                                        <div class="we-comment">
                                            <div class="coment-head">
                                                <h5><a href="time-line.html" title="">{{$comment->user->name}}</a></h5>
                                                <span>1 year ago</span>
                                                <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                            </div>
                                            <p>{{$comment->comment}}</p>
                                        </div>

                                    </li>
                                @endforeach


                                <li>
                                    <a href="#" title="" class="showmore underline">more comments</a>
                                </li>
                                <li class="post-comment">

                                    <div class="comet-avatar">
                                        <img src="images/resources/comet-2.jpg" alt="">
                                    </div>
                                    <div class="post-comt-box">
                                        <form action="{{route('createComment')}}" method="Post">
                                            @csrf
                                            <input type="hidden" value="{{$post->id}}" name="post_id">
                                            <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                                            <textarea name="comment" placeholder="Post your comment"></textarea>

                                            <button type="submit" class="btn btn-primary">comment</button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            @endforeach
            @endforeach
        @endisset


    </div>
</div>

</div><!-- centerl meta -->
                      <!-- page like widget -->


@stop
@section('scripts')

    <script>
        $(document).on('click', '#update_post', function () {
            $('.posts' +$(this).attr('post_id')).css("display", "block");
        });


        $(document).on('click', '#personal', function () {
            $('.personal' ).css("display", "block");
        });
        $(document).on('click', '#cover', function () {
            $('.cover' ).css("display", "block");
        });
        $(document).on('click', '.close', function () {

            $('.personal').css("display", "none");
            $('.cover').css("display", "none");
            $('.posting').css("display", "none");



        });



        /*
        $(document).on('click','#btn_comment',function (e){
            e.preventDefault();
            var formDta=new FormData($('#formComment')[0]);
            $.ajax({
                type:'post',
                enctype:'multipart/form-data',
                url:"",
                data: formDta,
                processData:false,
                contentType:false,
                cache:false,
                success:function(data) {
    if (data.statues==true)
        location.reload();
                }
            });
        });
        */




    </script>
@stop
