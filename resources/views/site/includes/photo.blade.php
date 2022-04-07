

<div class="feature-photo">
    <figure>
            <img alt="" src="{{asset('assets/images/users/'.auth()->user()->cover_photo	)}}">

       </figure>
    <div class="add-btn">
    </div>
    <form class="edit-phto">
        <i class="fa fa-camera-retro"></i>
        <label class="fileContainer">
            <label class="fileContainer" >

                <input style="background-color: #1d2124;color:gray ;border-style:none;height:30px"type="button" id="cover" value="Edit Cover Photo">
            </label>
        </label>
    </form>

    <div class="container-fluid">
        <div class="row merged">
            <div class="col-lg-2 col-sm-3">
                <div class="user-avatar">
                    <figure>

                        <img alt="" src="{{asset('assets/images/users/'.auth()->user()->personal_photo)}}">



                        <form class="edit-phto">
                            <i class="fa fa-camera-retro"></i>
                            <label class="fileContainer" >

                                <input style="background-color: #1d2124;color:gray ;border-style:none;height:30px"type="button" id="personal" value="Edit Display Photo">
                            </label>
                        </form>
                    </figure>
                </div>
            </div>
            <!-- mmmmmmmmmmmmmmmm -->
        @include('mypage.includes.personal_photo')
        @include('mypage.includes.cover_photo')
            <!-- mmmmmmmmmmmmmmmm -->

            <div class="col-lg-10 col-sm-9">
                <div class="timeline-info">
                    <ul>
                        <li class="admin-name">
                            <h5>{{auth()->user()->name}}</h5>

                        </li>

                        <li>
                            <a data-ripple="" title="" href="{{route('mypage')}}" class="">Page</a>
                            <a data-ripple="" title="" href="{{route('MyFriend')}}" class="">my friends</a>
                            <a class="" href="{{route('EditProfile')}}" title="" data-ripple="">Edit Profile</a>
                            <a data-ripple="" title="" href="{{route('accept_friend')}}" class="">Accept Friends</a>
                            <a data-ripple="" title="" href="{{route('mypage')}}" class="active">posts</a>
                            <a data-ripple="" title="" href="page-likers.html" >likers</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

    </div>

</div>



