<!--Modal for adding job opening-->
  <div class="openingModal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    
    <div class="modal-container bg-white w-6/12 mx-auto rounded shadow-lg z-50 overflow-y-auto">
      


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

                    <input type="hidden" value="active" name="status" />
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
                        <label for="salary" class="text-gray-400 text-sm">Salary per month</label>
                          <input 
                                type="number"
                                class="block border border-grey-light w-full p-3 rounded mb-4"
                                name="salary"
                                value="{{ old('salary') }}" 
                                placeholder="Salary(₱)" />   
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
                      <option value="TUTOR">Tutor</option>
                      <option value="IT">IT</option>
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
                      <option value="homebased">Homebased</option>
                      <option value="office">Office</option>
                    </select>
                  </div>

                  </div>

                    @error('description')
                          <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                          </div>
                    @enderror

                    <label for="description" class="text-gray-400 text-sm">Description</label>
                      <textarea value="{{ old('description') }}"  name="description" required placeholder="Add the Job description and requirements here">
                        
                      </textarea>

                    

                    <button type="submit" class="bg-green-500 text-white px-4 py-3 rounded font-medium w-full focus:outline-none my-1">
                      CREATE OPENING
                  </button>

                    </form>
        
      </div>
    </div>
  </div>



  <!--Modal for adding managers-->
  <div class="addManagerModal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay-manager absolute w-full h-full bg-gray-900 opacity-50"></div>
    
    <div class="modal-container bg-white w-3/12 mx-auto rounded shadow-lg z-50 overflow-y-auto">
      


      <!-- Add margin if you want to see some of the overlay behind the modal-->
      <div class="modal-content py-4 text-left px-6">
        <!--Title-->
        <div class="flex justify-between items-center pb-3">
          <p class="text-2xl font-bold">CREATE MANAGER ACCOUNT</p>
          <div class="modal-close-manager cursor-pointer z-50">
            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </div>
        </div>

             <hr class="mb-4 border-b-1 border-gray-400" />
              <form action="{{ route('createManager') }}" method="post">
                    @csrf
                    <input type="hidden" name="userType" id="userType" type="text" value='manager'>

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

                        
                    

                    <div class="grid grid-rows-3 grid-flow-col">
                    <div class="row-span-3">
                    @error('username')
                          <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                          </div>
                    @enderror
                        </div>
                    <div class="row-span-3 ...">
                    @error('gender')
                          <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                          </div>
                    @enderror
                    </div>
                    </div> 


                    <div class="grid grid-rows-3 grid-flow-col gap-4">
                    <div class="row-span-3">
                        <input 
                            type="text"
                            class="block border border-grey-light w-full p-3 rounded mb-4"
                            name="username"
                            value="{{ old('username') }}" 
                            placeholder="Username" />   
                        </div>
                    <div class="row-span-3 ...">

                          <select class="block  border border-grey-light text-gray-500 w-full p-3 rounded mb-4" name="gender" id="gender">
                            <option disabled selected value="">Select Gender</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                          </select>
                    </div>
                    </div> 

                    <div class="grid grid-rows-3 grid-flow-col">
                    <div class="row-span-3">
                    @error('email')
                          <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                          </div>
                    @enderror
                        </div>
                    <div class="row-span-3 ...">
                    @error('Mtype')
                          <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                          </div>
                    @enderror
                    </div>
                    </div> 


                    <div class="grid grid-rows-3 grid-flow-col gap-4">
                    <div class="row-span-3">
                    <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="email"
                        value="{{ old('email') }}" 
                        placeholder="Email" />
                      </div>

                    <div class="row-span-3 ...">

                          <select class="block border border-grey-light text-gray-500 w-full p-3 rounded mb-4" name="Mtype" id="Mtype">
                            <option disabled selected value="">Manager Type</option>
                            <option value="it">IT Manager</option>
                            <option value="tutor">Tutor Manager</option>
                          </select>
                    </div>
                    </div>

                    @error('password')
                          <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                          </div>
                    @enderror
                     <label for="password" class="text-gray-400 text-sm">Password:</label>
                    <input 
                        type="text"
                        readonly 
                        class="bg-gray-200 block border border-grey-light w-full p-3 rounded mb-4"
                        name="password"
                        value="WecansManager2020" />

                    <input 
                        value="WecansManager2020" 
                        type="hidden"
                        name="password_confirmation"
                        placeholder="Confirm Password" />

                    <button type="submit" class="bg-green-500 text-white px-4 py-3 rounded font-medium w-full focus:outline-none my-1">
                      Create Manager Account
                    </button>

                    </form>
                
        
      </div>
    </div>
  </div>




  <script>
    tinymce.init({
      selector: 'textarea',
      height : 400,
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
   });
  </script>

