@extends('layouts.site')

@section('content')
<!--<div class="se-pre-con"></div>-->
<!-- sidebar -->
</div>
<!-- sidebar -->
<div class="col-lg-6">
    <div class="central-meta">
        <div class="editing-info">
            <h5 class="f-title"><i class="ti-lock"></i>Change Password</h5>
            @include('site.includes.alerts.errors')
            @include('site.includes.alerts.success')

            <form action="{{route('edit_password')}}" method="POST">
            @csrf
            @method('post')
                <div class="form-group">
                    <input name="new_password" type="password" id="input" />
                    <label class="control-label" for="input">New password</label><i class="mtrl-select"></i>
                    @error("new_password")
                    <span class="text-danger"> {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input name="confirm_password" type="password" />
                    <label class="control-label" for="input">Confirm password</label><i class="mtrl-select"></i>
                    @error("confirm_password")
                    <span class="text-danger"> {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input  name="current_password" type="password"   />
                    <label class="control-label" for="input">Current password</label><i class="mtrl-select"></i>
                    @error("current_password")
                    <span class="text-danger"> {{$message}}</span>
                    @enderror
                </div>
                <a class="forgot-pwd underline" title="" href="#">Forgot Password?</a>
                <div class="submit-btns">

                    <button  type="submit" class="mtr-btn"><span>Update</span></button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
<!-- centerl meta -->

