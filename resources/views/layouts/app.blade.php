<!DOCTYPE html>
<html>
<head>
	<title>Laravel Learn</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100">
	<nav class="p-6 bg-white flex justify-between">
		<ul class="flex items-center">
			<li>
				<a href="" class="p-4 text-lg">Home</a>
			</li>
			<li>
				<a href="" class="p-4 text-lg">Dashboard</a>
			</li>
			<li>
				<a href="" class="p-4 text-lg">Post</a>
			</li>
		</ul>

	</nav>
	@yield('content')
</body>
</html>