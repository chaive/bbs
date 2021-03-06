<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title', 'BBS') - L02 二刷</title>

	<!-- styles -->
	<link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
	<div id="app" class="{{ route_class() }}-page">
		@include('layouts._header')
		<div class="container">
			@include('shared._messages')
			@yield('content')
		</div>
		@include('layouts._footer')
	</div>
	<!-- Script-->
	<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>