@extends('layouts.site')
@section('page')
    @include('site.includes.photo')
@stop
@section('content')
<!--<div class="se-pre-con"></div>-->
<!-- sidebar -->
</div>
							<div class="col-lg-6">
								<div class="central-meta">
									<div class="editing-info">
										<h5 class="f-title"><i class="ti-info-alt"></i> Edit Basic Information</h5>
                                        @include('site.includes.alerts.errors')
                                        @include('site.includes.alerts.success')

										<form action="{{route('update_mypage')}}" method="Post" enctype="multipart/form-data">
                                            @csrf
                                            @method('post')

											<div class="form-group half">
											  <input name="name" value="{{$user->name}}" type="text" id="input" />
											  <label class="control-label" for="input">UserName</label><i class="mtrl-select"></i>
                                                @error("name")
                                                <span class="text-danger"> {{$message}}</span>
                                                @enderror

											</div>






											<div class="form-group">
											  <input name="bio" rows="4" id="textarea" value="{{$user->bio}}"></input>
											  <label class="control-label" for="textarea">bio</label><i class="mtrl-select"></i>
                                                @error("bio")
                                                <span class="text-danger">{{$message}} </span>
                                                @enderror
											</div>


                                            <div class="submit-btns">

												<button type="submit" class="mtr-btn"><span>Update</span></button>
											</div>
										</form><br>
                                        <a href="{{route('update_password')}}">   <button  style="background-color: #1d2124;color:gray ;border-style:none;height:30px" >Edit Password</button></a>

									</div>

								</div>
							</div>

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
<!-- centerl meta -->

