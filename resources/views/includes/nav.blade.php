
<nav class="flex flex-wrap items-center justify-between p-5">
		<ul class="flex items-center">
			@guest
			<li>
				<a href="{{ route('index') }}" class="pull-left"><img src="{{ asset('assets/img/wecans.png') }}" class="w-16"></a> 
			</li>
			<li>
				<a href="{{ route('index') }}" class="p-4 font-semibold"><i class="text-gray-500 fas fa-home"></i> Home</a>
			</li>
			<li>
				<a href="{{ route('gallery') }}" class="p-4 font-semibold"><i class="text-gray-500 fas fa-photo-video"></i> Gallery</a>
			</li>
			<li>
				<a href="{{ route('faq') }}" class="p-4 font-semibold"><i class="text-gray-500 far fa-question-circle"></i> FAQ's</a>
			</li>
			@endguest
		</ul>

		<ul class="flex items-center">
			<!-- @guest
				<li>
					<a href="{{ route('login') }}" class="p-4 text-lg">Login</a>
				</li>
				<li>
					<a href="{{ route('register') }}" class="p-4 text-lg">Register</a>
				</li>
			@endguest -->
			
		</ul>

	</nav>