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
        <form action="{{ route('storePost') }}" method="POST">
        @csrf
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
                        CREATE POST
                      </h3>
                    </div>

                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">

                      <div class="flex-row">

                      <button
                        class="bg-transparent bg-gray-700 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
                        type="submit">
                        <i class="fas fa-upload m-2"></i>PUBLISH POST
                      </buttno>
                    </div>
                  </div>
                </div>
                <div class="block w-full overflow-x-auto">

                 
                </div>
              </div>


               <div class="bg-white rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">

                <div class="-mx-3 md:flex mb-6">
                  <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                      Post Title
                    </label>
                    <input value="{{ old('title') }}" name="title" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="title" type="text" placeholder="How To Make Lumpia">
                    
                  </div>
                  <div class="md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                      Subtitle
                    </label>
                    <input value="{{ old('subtitle') }}" name="subtitle" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="subtitle" type="text" placeholder="Lorem Ipsum Doloret Ipsum">
                  </div>
                </div>
                
                <div class="-mx-3 md:flex mb-6">

                  <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
                      Image Header
                    </label>
                    <input name="image" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="image" type="file">
                  </div>


                  <div class="md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                      Category
                    </label>
                    <div class="relative">
                      <select name="category" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-state">
                        <option value="general">General</option>
                        <option value="food">Food</option>
                        <option value="lifestyle">LifeStyle</option>
                        <option value="sports">Sports</option>
                      </select>
                      
                    </div>
                  </div>
                  
                </div>

                <div class="mb-6">
                  <div class="md:w-12/12">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="description">
                      Post Content
                    </label>
                    <textarea value="{{ old('description') }}" id="description" name="description" required placeholder="Add the Post description here">
                        
                    </textarea>
                  </div>
                  
                </div>
                </form>

              </div>

            
            </div>




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
      height : 1200,
      plugins: "link image code media table",
      toolbar: 'undo redo | styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image | code | media | table tabledelete | tableprops tablerowprops tablecellprops | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol',
      menubar: false,
   });
  </script>
    

@endsection