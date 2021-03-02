@extends('layouts.admin')

@section('content')
	<noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
      
      <div class="relative md:ml-64 bg-gray-100">
        <nav
          class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-no-wrap md:justify-start flex items-center p-4"
        >
          <div
            class="w-full mx-autp items-center flex justify-between md:flex-no-wrap flex-wrap md:px-10 px-4"
          >

            <a
              class="text-white text-sm uppercase hidden mt-8 lg:inline-block font-semibold"
              href="{{ route('adminHome') }}"
              ><i class="fas fa-arrow-left m-2"></i>Posts</a
            >

          </div>
        </nav>
        <!-- Header -->
        <div class="relative bg-gray-700 md:pt-32 pb-32 pt-12">
          <div class="px-4 md:px-10 mx-auto w-full">
          </div>
        </div>
        <div class="px-4 md:px-10 mx-auto w-full -m-28">
          <div class="flex flex-wrap">
          <div class="w-full xl:w-12/12 mb-12 xl:mb-4 px-4">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                  <div class="flex flex-wrap items-center">
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                      <h3 class="font-semibold text-base text-gray-800">
                        POST DETAILS
                      </h3>
                    </div>

                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">

                      <div class="flex-row">

                      <button
                        class="bg-transparent bg-gray-700 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
                        type="submit">
                        <i class="fas fa-upload m-2"></i>EDIT POST
                      </buttno>
                    </div>
                  </div>
                </div>
                <div class="block w-full overflow-x-auto">

                 
                </div>
              </div>
              @if($postDetails->exists())

               <div class="bg-white rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">

                <div class="-mx-3 md:flex mb-6">
                  <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <div class="text-3xl antialiased font-normal mb-2">
                      {{ $postDetails->title }}
                    </div>
                    <div class="text-sm antialiased text-gray-500 font-medium">
                      {{ $postDetails->subtitle }}
                    </div>
                    
                  </div>

                  <!-- other half of screen -->
                  <div class="md:w-1/2 px-3 justify-end">
                    <!-- <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                      Subtitle
                    </label> -->
                    
                  </div>
                </div>

                <div class="bg-grey-500 mb-10">
                  <img class="object-cover h-48 w-full ..." src="{{ asset('assets/img/header.jpg') }}">
                </div>
                


                <div class="mb-6">
                  <div class="md:w-12/12">
                    <div class="md:w-12/12"> 
                    {!! $postDetails->description !!}
                  </div>
                  </div>
                  
                </div>
              </div>
            </div>

            
            @endif




          </div>
          <div class="flex flex-wrap mt-12">
          </div>

        </div>

        </div>
      </div>
    </div>

    <script>
    tinymce.init({
      selector: "textarea",
      menubar:false,
      statusbar: false,
   });
  </script>
    

@endsection