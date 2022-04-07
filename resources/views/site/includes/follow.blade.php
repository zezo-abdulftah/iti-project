<div class="gap gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="row" id="page-contents">
                    <div class="col-lg-3">
                        <aside class="sidebar static">

                            <div class="widget stick-widget">
                                <h4 class="widget-title">Friends you may know</h4>
                                <ul class="followers">
                                    @isset($users)
                                    @foreach($users->where('id','!=',auth()->user()->id) as $user)
                                        @foreach($user->friends as $friend)
                                            @if($x=0)

                                                @if($user->id ==$friend->user_id_1  and $friend->user_id_2==auth()->user()->id and $friend->statues==0)
                                    <li>
                                        <figure><img src="{{asset('assets/images/users/'.$user->personal_photo)}}" alt=""></figure>
                                        <div class="friend-meta">
                                            <h4><a href="#" title="">{{$user->name}}</a></h4>

                                                    <a href="{{route('delete_friend',$user->id)}}" title="" class="underline">Cancel Request</a>
                                        </div>
                                    </li>
                                                    @



                                                @elseif($user->id ==$friend->user_id_2 and $friend->user_id_1==auth()->user()->id  and $friend->statues==0)
                                                    <li>
                                                        <figure><img src="{{asset('assets/images/users/'.$user->personal_photo)}}" alt=""></figure>
                                                        <div class="friend-meta">
                                                            <h4><a href="#" title="">{{$user->name}}</a></h4>

                                                            <a href="{{route('delete_friend',$user->id)}}" title="" class="underline">Accept friend</a>
                                                        </div>
                                                    </li>



                                                @endif
                                                    @endforeach

                                                    <li>
                                                        <figure><img src="{{asset('assets/images/users/'.$user->personal_photo)}}" alt=""></figure>
                                                        <div class="friend-meta">
                                                            <h4><a href="#" title="">{{$user->name}}</a></h4>


                                                            <a  href="{{route('add_friend',$user->id)}}" title=""  class="underline">Request Friend</a>



                                                        </div>
                                                    </li>








                                            @endforeach
                                    @endisset



                                </ul>
                            </div><!-- who's following -->
                        </aside>



