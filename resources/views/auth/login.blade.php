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
                    <p>Sign in</p>
                  </div>
                  <hr class="mt-6 border-b-1 border-gray-400" />
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">

                    @if (session('status'))
                    <div class="text-red-500 mt-2 p-2 text-sm font-medium text-center">
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

                    <button type="submit" style="transition: all 0.15s ease 0s;" class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full">
                        Login
                    </button>

                    </form>
                    <hr class="mt-6 border-b-1 border-gray-400" />
                    <div class="text-grey-dark mt-2 flex justify-center">
                    Dont have an account? 
                    
                    </div>
                    <div class="text-grey-dark flex justify-center">
                        <a class="no-underline border-b border-blue text-blue" href="{{ route('register') }}">
                         Register now!
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