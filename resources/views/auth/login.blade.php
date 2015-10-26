<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SIMETRIS | Sistem Informasi Rekam Medis Terpadu Indonesia</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<link href="{!! asset('assets/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="{!! asset('assets/css/AdminLTE.min.css') !!}" rel="stylesheet" type="text/css" />
	<link href="{!! asset('assets/plugins/iCheck/square/blue.css') !!}" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="../../index2.html"><b>SIMETRIS</b> App</a>
		</div>
		<div class="login-box-body">
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Whoops!</strong> Tampaknya terdapat beberapa kesalahan.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			<p class="login-box-msg">Masuk ke dalam sistem</p>
			<form method="POST" action="{{ url('/login') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group has-feedback">
					<input type="text" class="form-control" name="username" placeholder="Nama Pengguna" value="{{ old('name') }}">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" name="password" placeholder="Kata Sandi"/>
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-8">    
						<div class="checkbox icheck">
							<label>
								<input type="checkbox" name="remember"> Ingat saya!
							</label>
						</div>                        
					</div>
					<div class="col-xs-4">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
					</div>
				</div>
			</form>
			<a href="{{ url('/password/email') }}">Lupa password?</a><br>
		</div>
	</div>

	<script src="{!! asset('assets/plugins/jQuery/jQuery-2.1.4.min.js') !!}"></script>
	<script src="{!! asset('assets/js/bootstrap.min.js') !!}" type="text/javascript"></script>
	<script src="{!! asset('assets/plugins/iCheck/icheck.min.js') !!}" type="text/javascript"></script>
	<script>
	$(function () {
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });
	});
	</script>
</body>
</html>