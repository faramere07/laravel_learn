@extends('layouts.app')

@section('content')


			


				<div class="bg-grey-lighter flex flex-col">
            <div class="container max-w-md mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                    <h1 class="mb-8 text-3xl text-center">Login</h1>

                    @if (session('status'))
                    <div class="text-red-500 mt-2 text-sm text-center">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="{{ route('login') }}" method="post">
                    @csrf

                    @error('email')
                        	<div class="text-red-500 mt-2 text-sm">
                        		{{ $message }}
                        	</div>
                    @enderror

                    <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="email"
                        value="{{ old('email') }}" 
                        placeholder="Email" />

                    @error('password')
                        	<div class="text-red-500 mt-2 text-sm">
                        		{{ $message }}
                        	</div>
                    @enderror

                    <input 
                        type="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="password"
                        placeholder="Password" />

                        <div class="mb-4">
                            <div class="flex items-center">
                                <input type="checkbox" name="remember" id="remember" class="mr-2">
                                <label for="remember">Remember me</label>
                            </div>
                        </div>

                    <button type="submit" class="bg-green-500 text-white px-4 py-3 rounded font-medium w-full focus:outline-none my-1">
                    	Login
                	</button>

                    </form>

                </div>

                <div class="text-grey-dark mt-6">
                    Dont have an account? 
                    <a class="no-underline border-b border-blue text-blue" href="{{ route('register') }}">
                        Register now!
                    </a>
                </div>
            </div>
        </div>
			


@endsection