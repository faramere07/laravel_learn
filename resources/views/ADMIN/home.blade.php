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
              >Posts</a
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
                        Posts
                        
                      </h3>
                    </div>
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">

                      <div class="flex-row">
                      <a
                        href="{{ route('createPost') }}"
                        class="modal-open bg-transparent bg-gray-700 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                        style="transition:all .15s ease"
                      >
                        <i class="fas fa-plus m-2"></i>ADD POST
                      </a>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="block w-full overflow-x-auto">

                  @if (\Session::has('message'))
                  <div class="text-white px-6 py-4 border-0 relative bg-blue-500">
                    <span class="text-xl inline-block mr-5 align-middle">
                      <i class="fas fa-bell"></i>
                    </span>
                    <span class="inline-block align-middle mr-8">
                      <p>{!! \Session::get('message') !!}</p>
                    </span>
                  </div>
                  @endif

                  @if (\Session::has('error'))
                  <div class="text-white px-6 py-4 border-0 relative bg-red-500">
                    <span class="text-xl inline-block mr-5 align-middle">
                      <i class="fas fa-bell"></i>
                    </span>
                    <span class="inline-block align-middle mr-8">
                      <p>{!! \Session::get('error') !!}</p>
                    </span>
                  </div>
                  @endif

                  <!-- Projects table -->
                  <table class="items-center w-full bg-transparent border-collapse">
                    <thead>
                      <tr>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                          Post Title
                        </th>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                          Date Posted
                        </th>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                          Category
                        </th>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                          Total views
                        </th>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                          Action
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    @if($activePosts->count())
                        @foreach ($activePosts as $post)
                        <tr>
                        <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                          {{ $post->title }}
                        </th>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                        {{ $post->created_at->format('Y-m-d') }}
                        </td>
                        <td class="border-t-0 px-6 align-middle font-medium border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                        {{ strtoupper($post->category) }}
                        </td>
                        <td class="border-t-0 px-6 align-middle font-medium border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                          12000
                        </td>
                        <td>
                          <div class="flex flex-row">


                          <form method="post" action="{{ route('postDetails') }}">
                            @csrf
                            <button
                              class="bg-gray-600 text-white active:bg-gray-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
                              type="submit"
                              >
                              <input type="hidden" name="id" value="{{ $post->id }}">
                              <i class="far fa-eye m-2"></i>View
                            </button>
                          </form>

                            <button
                              class="bg-gray-600 text-white active:bg-gray-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
                              type="button"
                              >
                              <i class="far fa-edit m-2"></i>Edit
                            </button>
                          
                            <form method="post" action="#">
                              @csrf
                              <input type="hidden" name="id" id="id" value="{{ $post->id }}">
                              <button
                                onclick="return confirm('Are you sure you want to close the Job Opening?')"
                                class="bg-gray-600 text-white active:bg-gray-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
                                type="submit"
                                >
                                <i class="fas fa-door-closed m-2"></i>Close Post
                              </button>
                            </form>
                          </div>
                         
                        </td>
                      </tr>
                      @endforeach



                    @else
                      <tr></tr>
                    @endif


                    </tbody>
                  </table>
                </div>
              </div>
               <div>
              {{ $activePosts->links() }}
            </div>
            </div>


          </div>
          <div class="flex flex-wrap mt-12">
            

          </div>

        </div>

        </div>
      </div>
    </div>
    

@endsection