<!DOCTYPE html>
<html>
<head>
	<title>Laravel Learn</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/fontawesome-free-5.15.2-web/css/all.min.css') }}">
</head>
<body>
	@include('includes.nav')
	
	@yield('content')
</body>
</html>