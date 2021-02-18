
<nav class="p-6 bg-white flex justify-between">
		<ul class="flex items-center">
			@guest
			<li>
				<a href="{{ route('index') }}" class="pull-left"><img src="{{ asset('assets/img/wecans.png') }}" class="w-24"></a> 
			</li>
			<li>
				<a href="{{ route('index') }}" class="p-8 text-lg font-semibold">Home</a>
			</li>
			@endguest
		</ul>

		<ul class="flex items-center">
			@guest
				<li>
					<a href="{{ route('login') }}" class="p-4 text-lg">Login</a>
				</li>
				<li>
					<a href="{{ route('register') }}" class="p-4 text-lg">Register</a>
				</li>
			@endguest
			
		</ul>

	</nav>