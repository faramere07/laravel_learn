@extends('layouts.app')

@section('content')


			


				<div class="bg-grey-lighter flex flex-col">
            <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                    <h1 class="mb-8 text-3xl text-center">Sign up now!</h1>

                    <form action="{{ route('register') }}" method="post">
                    @csrf


                    @error('name')
                        	<div class="text-red-500 mt-2 text-sm">
                        		{{ $message }}
                        	</div>
                    @enderror

                    <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') border-red-500 @enderror"
                        name="name"
                        value="{{ old('name') }}" 
                        placeholder="Full Name" />

                        
                    @error('username')
                        	<div class="text-red-500 mt-2 text-sm">
                        		{{ $message }}
                        	</div>
                    @enderror

                    <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="username"
                        value="{{ old('username') }}" 
                        placeholder="Username" />    

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

                    @error('password_confirmation')
                        	<div class="text-red-500 mt-2 text-sm">
                        		{{ $message }}
                        	</div>
                    @enderror

                    <input 
                        type="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="password_confirmation"
                        placeholder="Confirm Password" />

                    <button type="submit" class="bg-green-500 text-white px-4 py-3 rounded font-medium w-full focus:outline-none my-1">
                    	Create Account
                	</button>

                    </form>

                    <div class="text-center text-sm text-grey-dark mt-4">
                        By signing up, you agree to the 
                        <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                            Terms of Service
                        </a> and 
                        <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                            Privacy Policy
                        </a>
                    </div>
                </div>

                <div class="text-grey-dark mt-6">
                    Already have an account? 
                    <a class="no-underline border-b border-blue text-blue" href="{{ route('login') }}">
                        Log in
                    </a>.
                </div>
            </div>
        </div>
			


@endsection