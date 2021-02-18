
<nav
        class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-no-wrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6"
      >
        <div
          class="md:flex-col md:items-stretch md:min-h-full md:flex-no-wrap px-0 flex flex-wrap items-center justify-between w-full mx-auto"
        >
          <button
            class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
            type="button"
            onclick="toggleNavbar('example-collapse-sidebar')"
          >
            <i class="fas fa-bars"></i></button
          >
          <a
            class="md:block text-left md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0"
            href="javascript:void(0)"
          >
            ADMINISTRATOR
          </a>
          <div
            class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
            id="example-collapse-sidebar"
          >
            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
              <li class="items-center">
                <a
                  class="text-gray-800 hover:text-pink-600 text-xs uppercase py-3 font-bold block"
                  href="{{ route('adminHome') }}"
                  ><i class="fas fa-tv opacity-75 mr-2 text-sm"></i>
                  Dashboard</a
                >
              </li>
              <li class="items-center">
                <a
                  class="text-gray-800 hover:text-pink-600 text-xs uppercase py-3 font-bold block"
                  href="{{ route('adminHome') }}"
                  ><i class="fas fa-newspaper text-gray-500 mr-2 text-sm"></i>
                  Landing Page</a
                >
              </li>
              <li class="items-center">
                <a
                  class="text-gray-800 hover:text-pink-600 text-xs uppercase py-3 font-bold block"
                  href="#/profile"
                  ><i class="fas fa-user-circle text-gray-500 mr-2 text-sm"></i>
                  Create Account</a
                >
              </li>
            </ul>
            <hr class="my-4 md:min-w-full" />
            <h6
              class="md:min-w-full text-gray-600 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
            >
              ACTION
            </h6>
            <ul
              class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4"
            >
              <li class="inline-flex">
                <a
                  class="text-gray-800 hover:text-pink-600  text-sm block mb-4 no-underline font-semibold"
                  href="#/documentation/javascript/alerts"
                  ><i class="fab fa-js-square mr-2 text-gray-500 text-base"></i>
                  Javascript</a
                >
              </li>
              <li>
              	<form action="{{ route('logout') }}" method="post">
						@csrf
						<button  class="text-red-500 hover:text-pink-600  text-sm block mb-4 no-underline font-semibold" type="submit"><i class="fas fa-power-off  mr-2 text-red-500 text-base"></i></i>Logout</button>
					</form>
              </li>
            </ul>
          </div>
        </div>
      </nav>