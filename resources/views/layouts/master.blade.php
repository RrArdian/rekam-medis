<!DOCTYPE html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'>
	<title>SIMETRIS | Sistem Informasi Rekam Medis Terpadu Indonesia</title>
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/css/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet" type="text/css">
	@yield('css-content')
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>
<body class="skin-green fixed">
	<div class="wrapper">
		<header class="main-header">
			@yield('header')
		</header>
		<aside class="main-sidebar">
			@yield('sidebar')
		</aside>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					@yield('title')
				</h1>
				<ol class="breadcrumb">
					@yield('url-breadcrumb')
				</ol>
			</section>
			<section class="content">
				@yield('content')
			</section>
		</div>
	</div>

	<script src="{{ asset('assets/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/app.min.js') }}"></script>
	<script src="{{ asset('assets/js/toastr.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootbox.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
	@yield('js-content')
</body>
</html>