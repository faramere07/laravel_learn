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
            <p
              class="text-white text-lg uppercase hidden mt-8 lg:inline-block font-semibold"
              
              >Managers</p
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
          <div class="w-full xl:w-12/12 mb-12 xl:mb-0 px-4">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                  <div class="flex flex-wrap items-center">
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                      <h3 class="font-semibold text-base text-gray-800">
                        Managers
                      </h3>
                    </div>
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">

                      <div class="flex-row">
                      <button
                        class="modal-open-manager bg-gray-700 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                        style="transition:all .15s ease"
                      >
                        <i class="fas fa-user-plus m-2"></i>ADD MANAGER
                      </button>
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



                  <!-- Projects table -->
                  <table class="items-center w-full bg-transparent border-collapse">
                    <thead>
                      <tr>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                          Manager name
                        </th>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                          email
                        </th>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                          gender
                        </th>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                          Status
                        </th>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                          action
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    @if($managers->count())
                        @foreach ($managers as $manager)
                        <tr>
                        <th class="border-t-0 px-6 uppercase align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                          {{ $manager->name }}
                        </th>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                        {{ $manager->email }}
                        </td>
                        <td class="border-t-0 text-base font-medium  px-6 align-middle border-l-0 border-r-0 whitespace-no-wrap p-4">
                          @if($manager->gender == "M") <i class="fas text-gray-600 text-lg fa-mars"></i>
                          @else
                          <i class="fas text-gray-600 text-lg fa-venus"></i>
                          @endif
                          {{ $manager->gender }}
                        </td>
                        <td class="border-t-0 text-base font-medium px-6 align-middle border-l-0 border-r-0 whitespace-no-wrap p-4">
                          @if($manager->status == "enabled") <i class="fas text-green-500 text-lg fa-check"></i>
                          @else
                          <i class="fas text-red-500 text-lg fa-times"></i>
                          @endif
                          {{ $manager->status }}
                        </td>
                        <td>



                          <div class="flex flex-row">

                            <button
                              class="modal-edit bg-gray-600 text-white active:bg-gray-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
                              type="button"
                              >
                              <i class="far fa-envelope m-2"></i>Message
                            </button>

                            @if($manager->status == "enabled")
                          
                            <form method="post" action="{{ route('disableAccount') }}">
                              @csrf
                              <input type="hidden" name="id" id="id" value="{{ $manager->id }}">
                              <button
                                onclick="return confirm('Are you sure you want to disable this Account? The manager will not be able to log in within the system and use its functionalities')"
                                class="bg-red-500 text-white active:bg-gray-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
                                type="submit"
                                >
                                <i class="fas fa-user-times m-2"></i>Disable Account
                              </button>
                            </form>

                            @else


                            <form method="post" action="{{ route('enableAccount') }}">
                              @csrf
                              <input type="hidden" name="id" id="id" value="{{ $manager->id }}">
                              <button
                                onclick="return confirm('Are you sure you want to enable this Account?')"
                                class="bg-green-500 text-white active:bg-gray-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
                                type="submit"
                                >
                                <i class="fas fa-user-check m-2"></i>Enable Account
                              </button>
                            </form>
                            @endif
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
               {{ $managers->links() }}
            </div>
           
          </div>
          <div class="flex flex-wrap mt-12">
            

          </div>

        </div>
      </div>
    </div>

    @include('admin.components.modals')

    <script>
    var openmodal = document.querySelectorAll('.modal-open-manager')
    for (var i = 0; i < openmodal.length; i++) {
      openmodal[i].addEventListener('click', function(event){
      event.preventDefault();
      toggleManagerModal();
      })
    }
    
    const overlay = document.querySelector('.modal-overlay-manager')
    overlay.addEventListener('click', toggleManagerModal)
    
    var closemodal = document.querySelectorAll('.modal-close-manager')
    for (var i = 0; i < closemodal.length; i++) {
      closemodal[i].addEventListener('click', toggleManagerModal)
    }
    
    document.onkeydown = function(evt) {
      evt = evt || window.event
      var isEscape = false
      if ("key" in evt) {
      isEscape = (evt.key === "Escape" || evt.key === "Esc")
      } else {
      isEscape = (evt.keyCode === 27)
      }
      if (isEscape && document.body.classList.contains('modal-active')) {
      toggleManagerModal();
      }
    };
    
    
    function toggleManagerModal () {
      const body = document.querySelector('body')
      const modal = document.querySelector('.addManagerModal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }

  </script>

@endsection