<nav class="mb-4 bg-red-900 border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/student/dashboard" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('image/Logo.PNG') }}" alt="Logo" width="80">
            <span
                class="self-center text-4xl text-white font-semibold whitespace-nowrap hover:text-red-300 dark:text-white">
                Student</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-red-900 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="/student/profile"
                        class="block text-xl  py-2 px-3  text-white rounded hover:bg-red-300 md:hover:bg-transparent md:border-0 md:hover:text-red-300 md:p-2"
                        aria-current="page">Profile</a>
                </li>
                <li>
                    <a href="/student/schedule"
                        class="block text-xl  py-2 px-3  text-white rounded hover:bg-red-300 md:hover:bg-transparent md:border-0 md:hover:text-red-300  md:p-2  ">
                        Schedule</a>
                </li>
                <li>
                    <a href="#"
                        class="block text-xl  py-2 px-3  text-white rounded hover:bg-red-300  md:hover:bg-transparent md:border-0 md:hover:text-red-300  md:p-2">
                        Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
