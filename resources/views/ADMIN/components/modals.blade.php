<!--Modal for adding opening-->
  <div class="openingModal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
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
                                required
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
