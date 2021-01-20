<!DOCTYPE html>
<html lang="es">
<head>
	<title>@yield('title')</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="@yield('description')">
	<meta name="author" content="Brandon Ortiz">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

	<!-- FontAwesome JS -->
    <script src="https://use.fontawesome.com/releases/v5.12.0/js/all.js"></script>

	<!-- Owl Stylesheets -->
	<link rel="stylesheet" href="{{ asset('plugins/owlcarousel/assets/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/owlcarousel/assets/owl.theme.default.min.css') }}">

	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="{{ asset('css/theme-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    @yield('stylesheets')
</head>

<body>
    @include('layout.sidebar')

	<div class="main-wrapper">
        @yield('content')
	</div><!--//main-wrapper-->

	<!-- Javascript -->
	<script src="{{ asset('plugins/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('plugins/popper.min.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>

	<!-- Dark Mode -->
	<script src="{{ asset('plugins/js-cookie.min.js') }}"></script>
	<script src="{{ asset('js/dark-mode.js') }}"></script>

    @yield('scripts')
</body>
</html>

