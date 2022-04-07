@extends('layouts.site')

@section('page')

@include('site.includes.photo')
@stop


@section('content')


</div><!-- sidebar -->
							<div class="col-lg-6">
								<div class="central-meta">
									<div class="groups">
										<span><i class="fa fa-users"></i> Friends</span>
									</div>
									<ul class="nearby-contct">
                                        @isset($friends)
                                        @foreach($friends as $friend)
                                                @if($friend->user_id_2 != auth()->user()->id)
										<li>
											<div class="nearly-pepls">
												<figure>

													<a href="time-line.html" title=""><img src="{{asset('assets/images/users/'.$friend->user2->personal_photo)}}" alt=""></a>




												</figure>
												<div class="pepl-info">
													<h4><a href="time-line.html" title="">{{$friend->user2->name}}</a></h4>

													<a href="{{route('remove_friend',$friend->user2->id)}}" title="" class="add-butn" data-ripple="">Remove</a>
												</div>
											</div>
										</li>
                                                @endif
                                                    @if($friend->user_id_1 != auth()->user()->id)
                                                        <li>
                                                            <div class="nearly-pepls">
                                                                <figure>



                                                                        <a href="time-line.html" title=""><img src="{{asset('assets/images/users/'.$friend->user1->personal_photo)}}" alt=""></a>

                                                                </figure>
                                                                <div class="pepl-info">
                                                                    <h4><a href="time-line.html" title="">{{$friend->user1->name}}</a></h4>

                                                                    <a href="{{route('remove_friend',$friend->user1->id)}}" title="" class="add-butn" data-ripple="">Remove</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endif
                                            @endforeach
                                        @endisset

									</ul>
								</div><!-- photos -->
							</div><!-- centerl meta -->
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







    </script>
@stop
