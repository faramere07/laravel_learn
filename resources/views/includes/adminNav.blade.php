
<nav class="p-6 bg-white flex justify-between mb-6">
		<ul class="flex items-center">
			@auth
			<li>
				<a href="{{ route('adminHome') }}" class="p-4 text-lg">Home</a>
			</li>
			<li>
				<a href="{{ route('adminDashboard') }}" class="p-4 text-lg">Dashboard</a>
			</li>
			<li>
				<a href="" class="p-4 text-lg">Post</a>
			</li>
			@endauth
			@guest
			<li>
				<a href="{{ route('index') }}" class="p-4 text-lg">Home</a>
			</li>
			@endguest
		</ul>

		<ul class="flex items-center">
			@auth
				<li>
					<a href="" class="p-4 text-lg">{{ auth()->user()->name }}</a>
				</li>
				<li>
					<form action="{{ route('logout') }}" class="inline p-3" method="post">
						@csrf
						<button type="submit">Logout</button>
					</form>
				</li>
			@endauth
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