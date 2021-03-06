
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.ninjateam.org/html/zeiss/light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jul 2020 03:21:11 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Home</title>
	<link rel="stylesheet" href="{{ asset('public/backend/styles/style.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/backend/styles/custom.css') }}">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="{{ asset('public/backend/plugin/waves/waves.min.css') }}">

</head>

<body>

<div id="single-wrapper">
	<form action="{{ route('login') }}" method="POST" class="frm-single">
		@csrf


		<div class="inside">
			<div class="title"><strong></strong>Admin</div>
			<!-- /.title -->
			<div class="frm-title">Login</div>
			<!-- /.frm-title -->
			<div class="frm-input">

				<input type="text" placeholder="Username" name="name" class="frm-inp @error('name') is-invalid @enderror"><i class="fa fa-user frm-ico"></i>

					  @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

			</div>
			<!-- /.frm-input -->
			<div class="frm-input">

				<input type="password" placeholder="Password" name="password" class="frm-inp @error('password') is-invalid @enderror"><i class="fa fa-lock frm-ico"></i>

				@error('Password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

			</div>
			<!-- /.frm-input -->
			<div class="clearfix margin-bottom-20">
				<div class="float-left">
					<div class="checkbox primary"><input type="checkbox" id="rememberme"><label for="rememberme">Remember me</label></div>
					<!-- /.checkbox -->
				</div>
				<!-- /.float-left -->
				<div class="float-right"><a href="page-recoverpw.html" class="a-link"><i class="fa fa-unlock-alt"></i>Forgot password?</a></div>
				<!-- /.float-right -->
			</div>
			<!-- /.clearfix -->
			<button type="submit" class="frm-submit">Login<i class="fa fa-arrow-circle-right"></i></button>

			<div class="row small-spacing">
				<div class="col-md-12">
					<div class="txt-login-with txt-center"><a href="{{ route('register') }}">Registation</a></div>
					<!-- /.txt-login-with -->
				</div>
				<!-- /.col-md-12 -->
				<div class="col-md-6"><button type="button" class="btn btn-sm btn-icon btn-icon-left btn-social-with-text btn-facebook text-white waves-effect waves-light"><i class="ico fa fa-facebook"></i><span>Facebook</span></button></div>
				<!-- /.col-md-6 -->
				<div class="col-md-6"><button type="button" class="btn btn-sm btn-icon btn-icon-left btn-social-with-text btn-google-plus text-white waves-effect waves-light"><i class="ico fa fa-google-plus"></i><a href="{{ route('redirectToProvider') }}">Gutgub</a></button></div>
				<!-- /.col-md-6 -->
			</div>
			<!-- /.row -->
			<a href="page-register.html" class="a-link"><i class="fa fa-key"></i>New to NinjaAdmin? Register.</a>
			<div class="frm-footer">NinjaAdmin © 2016.</div>
			<!-- /.footer -->
		</div>
		<!-- .inside -->
	</form>
	<!-- /.frm-single -->
</div><!--/#single-wrapper -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{{ asset('public/backend/scripts/jquery.min.js') }}"></script>
	<script src="{{ asset('public/backend/scripts/modernizr.min.js') }}"></script>
	<script src="{{ asset('public/backend/plugin/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/backend/plugin/nprogress/nprogress.js') }}"></script>
	<script src="{{ asset('public/backend/plugin/waves/waves.min.js') }}"></script>

	<script src="{{ asset('public/backend/scripts/main.min.js') }}"></script>
    <script src="{{ asset('public/backend/scripts/mycommon.js') }}"></script>
</body>

<!-- Mirrored from demo.ninjateam.org/html/zeiss/light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jul 2020 03:21:11 GMT -->
</html>





















