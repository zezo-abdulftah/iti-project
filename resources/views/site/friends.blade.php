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
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="time-line.html" title=""><img src="{{asset('assets/images/users/'.$friend->user2->personal_photo)}}" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="time-line.html" title="">{{$friend->user2->name}}</a></h4>

													<a href="{{route('accept',$friend->user2->id)}}" title="" class="add-butn" data-ripple="">Accept</a>
												</div>
											</div>
										</li>
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
