<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Winku Social Network Toolkit</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{asset('assets/css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	<div class="container-fluid pdng0">
		<div class="row merged">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="land-featurearea">
					<div class="land-meta">
						<h1>Winku</h1>
						<p>
							Winku is free to use for as long as you want with two active projects.
						</p>
						<div class="friend-logo">
							<span><img src="{{asset('assets/images/wink.png')}}" alt=""></span>
						</div>
						<a href="#" title="" class="folow-me">Follow Us on</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="login-reg-bg">
					<div class="log-reg-area sign">
						<h2 class="log-title">Login</h2>
                       @include('site.includes.alerts.errors')
                        @include('site.includes.alerts.success')
							<p>
								Don’t use Winku Yet? <a href="#" title="">Take the tour</a> or <a href="#" title="">Join now</a>
							</p>
						<form action="{{route('site.login')}}" method="post">
                            @csrf
							<div class="form-group">
							  <input name="email" type="email" id="input" required="required"/>
							  <label class="control-label" for="input">Email</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">
							  <input name="password" type="password" required="required"/>
							  <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
							</div>
							<div class="checkbox">
							  <label>
								<input name="remember_me" type="checkbox" checked="checked"/><i class="check-box"></i>Always Remember Me.
							  </label>
							</div>
							<a href="#" title="" class="forgot-pwd">Forgot Password?</a>
							<div class="submit-btns">
                                <button  type="submit" class="mtr-btn"><span>Login</span></button>

								<button class="mtr-btn signup" type="button"><span>Register</span></button>
							</div>
						</form>
					</div>
					<div class="log-reg-area reg">
						<h2 class="log-title">Register</h2>

							<p>
								Don’t use Winku Yet? <a href="#" title="">Take the tour</a> or <a href="#" title="">Join now</a>
							</p>
						<form action="{{route('site.register')}}" method="post"   >
                            @csrf
							<div class="form-group">
							  <input name="name" type="text" required="required"/>
							  <label class="control-label" for="input">Username</label><i class="mtrl-select"></i>
                                @error("name")
                                <span class="text-danger"> </span>
                                @enderror
							</div>
							<div class="form-group">
							  <input name="email" type="email" required="required"/>
							  <label class="control-label" for="input">Email</label><i class="mtrl-select"></i>
                                @error("email")
                                <span class="text-danger"></span>
                                @enderror
							</div>
							<div class="form-group">
							  <input name="password" type="password" required="required"/>
							  <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
                                @error("password")
                                <span class="text-danger"> </span>
                                @enderror
							</div>
							<div class="form-radio">
							  <div class="radio">
								<label>
								  <input  type="radio" name="gender" value="0" /><i class="check-box"></i>Male
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="gender"  value="1"/><i class="check-box"></i>Female
								</label>
							  </div>
                                @error("gender")
                                <span class="text-danger"> </span>
                                @enderror
							</div>

							<div class="checkbox">
							  <label>
								<input type="checkbox" checked="checked"/><i class="check-box"></i>Accept Terms & Conditions ?
							  </label>
							</div>
							<a href="#" title="" class="already-have">Already have an account</a>
							<div class="submit-btns">
                                <button  type="submit" class="mtr-btn"><span>Register</span></button>

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('assets/js/main.min.js')}}"></script>
	<script src="{{asset('assets/js/script.js')}}"></script>

</body>

</html>
