<!DOCTYPE html>
<html>
<head>
	<title>MANAGER</title>

	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/fontawesome-free-5.15.2-web/css/all.min.css') }}">
</head>
<body>
	@include('includes.managerNav')
	
	@yield('content')
</body>
</html>