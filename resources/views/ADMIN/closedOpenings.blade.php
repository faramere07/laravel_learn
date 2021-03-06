@extends('layouts.admin')

@section('content')

  <style>
      .modal {
        transition: opacity 0.25s ease;
      }
      body.modal-active {
        overflow-x: hidden;
        overflow-y: visible !important;
      }

  </style>


	<noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
      
      <div class="relative md:ml-64 bg-gray-100">
        <nav
          class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-no-wrap md:justify-start flex items-center p-4"
        >
          <div
            class="w-full mx-autp items-center flex justify-between md:flex-no-wrap flex-wrap md:px-10 px-4"
          >
            <p class="text-white text-lg uppercase hidden mt-8 lg:inline-block font-semibold">Openings</p>

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
                        Openings - Closed
                        <i class="fas fa-times text-red-500"></i>
                      </h3>
                    </div>
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                      <a
                        href="{{ route('adminOpenings') }}"
                        class="modal-open bg-transparent bg-gray-700 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                        style="transition:all .15s ease"
                      >
                        <i class="far fa-eye m-2"></i>VIEW OPEN JOB OPENINGS
                      </a>
                    </div>
                    
                  </div>
                </div>



                <div class="block w-full overflow-x-auto">

                  @if (\Session::has('inactive'))
                  <div class="text-white px-6 py-4 border-0 relative bg-blue-500">
                    <span class="text-xl inline-block mr-5 align-middle">
                      <i class="fas fa-bell"></i>
                    </span>
                    <span class="inline-block align-middle mr-8">
                      <p>{!! \Session::get('inactive') !!}</p>
                    </span>
                  </div>
                  @endif

                  <!-- Projects table -->
                  <table class="items-center w-full bg-transparent border-collapse">
                    <thead>
                      <tr>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                          Job Title
                        </th>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                          Sched
                        </th>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                          Category
                        </th>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                          Salary(Per month)
                        </th>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                          Type
                        </th>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                          Action
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    @if($inactiveOpenings->count())
                        @foreach ($inactiveOpenings as $opening)
                        <tr>
                        <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                          {{ $opening->title }}
                        </th>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                        {{ $opening->startTime }} - {{ $opening->endTime }}
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                        @if($opening->category == "IT") <i class="fas text-gray-600 text-sm fa-desktop"></i>
                          @else
                          <i class="fas text-gray-600 text-sm fa-book"></i>
                          @endif
                        {{ Str::upper($opening->category) }}
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                          @if($opening->salary === 'N/A') N/A
                          @else
                          ₱{{  number_format($opening->salary, 0, '.', ',') }}
                          @endif
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                          @if($opening->jobType == "homebased") <i class="fas text-gray-600 text-sm fa-home"></i>
                          @else
                          <i class="fas text-gray-600 text-sm fa-building"></i>
                          @endif
                          {{ $opening->jobType }}
                        </td>
                        <td>
                          <div class="flex flex-row">
                          
                            <form method="post" action="{{ route('openOpening') }}">
                              @csrf
                              <input type="hidden" name="id" id="id" value="{{ $opening->id }}">
                              <button
                                onclick="return confirm('Are you sure you want to close the Job Opening?')"
                                class="bg-gray-600 text-white active:bg-gray-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
                                type="submit"
                                >
                                <i class="fas fa-door-closed m-2"></i>Open Job Opening
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
              {{ $inactiveOpenings->links() }}
            </div>
            </div>


          </div>
          <div class="flex flex-wrap mt-12">
            

          </div>

        </div>
      </div>
    </div>



@endsection