<!DOCTYPE html>
<html>
<head>
	<title>Laravel Learn</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100">
	<nav class="p-6 bg-white flex justify-between mb-6">
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

		<ul class="flex items-center">
			<li>
				<a href="" class="p-4 text-lg">Name</a>
			</li>
			<li>
				<a href="" class="p-4 text-lg">Login</a>
			</li>
			<li>
				<a href="" class="p-4 text-lg">Register</a>
			</li>
			<li>
				<a href="" class="p-4 text-lg">Logout</a>
			</li>
		</ul>

	</nav>
	@yield('content')
</body>
</html>