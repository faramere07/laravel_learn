@extends('layouts.app')

@section('content')

				<main>
      <section class="absolute w-full h-full">
        <div
          class="absolute top-0 w-full h-full"
          style="background-image: url('{{ asset('assets/img/register_bg_2.png') }}'); background-size: 100%; background-repeat: no-repeat;"
        ></div>
        <div class="container mx-auto px-4 h-full">
          <div class="flex content-center items-center justify-center h-full">
            <div class="w-full lg:w-4/12 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-200 border-0"
              >
                <div class="rounded-t mb-0 px-6 py-6">
                    <div class="text-gray-500 text-3xl text-center font-bold">
                        <p>Sign up now!</p>
                    </div>
                  <hr class="mt-6 border-b-1 border-gray-400" />
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">

                    <form action="{{ route('register') }}" method="post">
                    @csrf
                    <input type="hidden" name="userType" id="userType" type="text" value='applicant'>

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

                    <hr class="mt-6 border-b-1 border-gray-400" />
                    <div class="text-grey-dark mt-2 flex justify-center">
                    Already have an account? 
                    
                    </div>
                    <div class="text-grey-dark flex justify-center">
                        <a class="no-underline border-b border-blue text-blue" href="{{ route('login') }}">
                         Login now!
                        </a>
                    </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </section>
    </main>

@endsection