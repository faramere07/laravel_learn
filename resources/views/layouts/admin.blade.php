<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>

	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/fontawesome-free-5.15.2-web/css/all.min.css') }}">
	<script src="https://cdn.tiny.cloud/1/g8yi33accsch17v6eoh85qq7qzvsval6fz49jslmovw80z09/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
	@include('includes.adminNav')
	
	@yield('content')
	@include('includes.adminFooter')
</body>
</html>
