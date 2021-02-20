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
          <div class="w-full xl:w-12/12 mb-12 xl:mb-0 px-4">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                  <div class="flex flex-wrap items-center">
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                      <h3 class="font-semibold text-base text-gray-800">
                        Openings
                      </h3>
                    </div>
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                      <button
                        class="modal-open bg-transparent bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                        style="transition:all .15s ease"
                      >
                        <i class="fas fa-plus m-2"></i>ADD OPENING
                      </button>
                    </div>
                  </div>
                </div>
                <div class="block w-full overflow-x-auto">

                  @if (\Session::has('success'))
                  <div class="text-white px-6 py-4 border-0 relative bg-blue-500">
                    <span class="text-xl inline-block mr-5 align-middle">
                      <i class="fas fa-bell"></i>
                    </span>
                    <span class="inline-block align-middle mr-8">
                      <p>{!! \Session::get('success') !!}</p>
                    </span>
                    <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="closeAlert(event)">
                      <span>×</span>

                    </button>
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
                          Salary
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
                      <tr>
                        <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                          /argon/
                        </th>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                          4,569
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                          340
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                          <i class="fas fa-arrow-up text-green-500 mr-4"></i>
                          46,53%
                        </td>
                      </tr>
                      <tr>
                        <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                          /argon/index.html
                        </th>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                          3,985
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                          319
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                          <i class="fas fa-arrow-down text-orange-500 mr-4"></i>
                          46,53%
                        </td>
                      </tr>
                      <tr>
                        <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                          /argon/charts.html
                        </th>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                          3,513
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                          294
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                          <i class="fas fa-arrow-down text-orange-500 mr-4"></i>
                          36,49%
                        </td>
                      </tr>
                      <tr>
                        <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                          /argon/tables.html
                        </th>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                          2,050
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                          147
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                          <i class="fas fa-arrow-up text-green-500 mr-4"></i>
                          50,87%
                        </td>
                      </tr>
                      <tr>
                        <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                          /argon/profile.html
                        </th>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                          1,795
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                          190
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                          <i class="fas fa-arrow-down text-red-500 mr-4"></i>
                          46,53%
                        </td>
                      </tr>
                      <tr>
                        <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                          /argon/profile.html
                        </th>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                          1,795
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                          190
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                          <i class="fas fa-arrow-down text-red-500 mr-4"></i>
                          46,53%
                        </td>
                      </tr>
                      <tr>
                        <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                          /argon/profile.html
                        </th>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                          1,795
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                          190
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                          <i class="fas fa-arrow-down text-red-500 mr-4"></i>
                          46,53%
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="flex flex-wrap mt-12">
            

          </div>

        </div>
      </div>
    </div>


    <!--Modal for adding-->
  <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    
    <div class="modal-container bg-white w-4/12 mx-auto rounded shadow-lg z-50 overflow-y-auto">
      


      <!-- Add margin if you want to see some of the overlay behind the modal-->
      <div class="modal-content py-4 text-left px-6">
        <!--Title-->
        <div class="flex justify-between items-center pb-3">
          <p class="text-2xl font-bold">CREATE JOB OPENING</p>
          <div class="modal-close cursor-pointer z-50">
            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </div>
        </div>

             <hr class="mb-4 border-b-1 border-gray-400" />

                    <form action="{{ route('createOpening') }}" method="post">
                    @csrf

                    @error('title')
                          <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                          </div>
                    @enderror
                    <label for="title" class="text-gray-400 text-sm">Job Title</label>
                    <input 
                        required
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('title') border-red-500 @enderror"
                        name="title"
                        value="{{ old('title') }}" 
                        placeholder="Ex. Web Developer, Videographer, etc..." />

                        
                    



                    <div class="grid grid-cols-6 gap-4">

                    <div class="col-span-2">
                      <label for="startTime" class="text-gray-400 text-sm">Start Time</label>
                        <input 
                            required 
                            type="time"
                            class="block border border-grey-light w-full p-3 rounded mb-4"
                            name="startTime"
                            value="{{ old('startTime') }}" 
                            placeholder="Start Time" />   
                        </div>

                      <div class="col-span-2">
                      <label for="endTime" class="text-gray-400 text-sm">End Time</label>
                      <input 
                            required
                            type="time"
                            class="block border border-grey-light w-full p-3 rounded mb-4"
                            name="endTime"
                            value="{{ old('endTime') }}" 
                            placeholder="End Time" />   
                        </div>
                        <div class="col-span-2">
                        <label for="salary" class="text-gray-400 text-sm">Salary (Php)</label>
                          <input 
                                required
                                type="number"
                                class="block border border-grey-light w-full p-3 rounded mb-4"
                                name="salary"
                                value="{{ old('salary') }}" 
                                placeholder="Salary" />   
                            </div>
                          </div>
                    
                    <div class="grid grid-cols-4 gap-4">
                      <div class="col-span-2">
                    @error('category')
                          <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                          </div>
                    @enderror
                    <label for="category" class="text-gray-400 text-sm">Category</label>
                    <select required name="category" class="block border border-grey-light w-full p-3 rounded mb-4" id="category">
                      <option disabled selected value="">Select Category...</option>
                      <option value="tutor">Tutor</option>
                      <option value="it">IT</option>
                    </select>
                  </div>

                  <div class="col-span-2">
                    @error('jobType')
                          <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                          </div>
                    @enderror
                    <label for="jobType" class="text-gray-400 text-sm">Job Type</label>
                    <select required name="jobType" class="block border border-grey-light w-full p-3 rounded mb-4" id="jobType">
                      <option disabled selected value="">Select Type...</option>
                      <option value="tutor">Homebased</option>
                      <option value="it">Office</option>
                    </select>
                  </div>

                  </div>

                    @error('description')
                          <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                          </div>
                    @enderror

                    <label for="description" class="text-gray-400 text-sm">Description</label>
                      <textarea
                            required
                            rows="8"
                            type="text"
                            class="block border border-grey-light w-full p-3 rounded mb-4"
                            name="description"
                            value="{{ old('description') }}" 
                            placeholder="Add the job description here"></textarea>   

                    

                    <button type="submit" class="bg-green-500 text-white px-4 py-3 rounded font-medium w-full focus:outline-none my-1">
                      CREATE OPENING
                  </button>

                    </form>
        
      </div>
    </div>
  </div>

    <script>
    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
      openmodal[i].addEventListener('click', function(event){
      event.preventDefault()
      toggleModal()
      })
    }
    
    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)
    
    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
      closemodal[i].addEventListener('click', toggleModal)
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
      toggleModal()
      }
    };
    
    
    function toggleModal () {
      const body = document.querySelector('body')
      const modal = document.querySelector('.modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }

    function closeAlert(event){
    let element = event.target;
    while(element.nodeName !== "BUTTON"){
      element = element.parentNode;
    }
    element.parentNode.parentNode.removeChild(element.parentNode);
  }
    
     
  </script>

@endsection