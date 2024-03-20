<aside id="default-sidebar" class=" absolute top-0 left-0 z-40 w-64 h-screen " aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800" style="background-color: #6C1B1B;">
        <a href="/admin/dashboard">
            <div class="flex justify-center">
                <img src="{{ asset('image/Logo.PNG') }}" alt="Logo">
            </div>
            <h1 class="text-2xl font-inter text-center text-white mb-10">Admin</h1>
        </a>
        <ul class="space-y-4 font-medium ">
            <li>
                <a href="/admin/dashboard" class="flex items-center p-2 bg-gray-100 rounded-md hover:bg-red-300">
                    <img src="https://cdn-icons-png.flaticon.com/128/4581/4581816.png" class="w-[30px] h-[30px]"
                        alt="" srcset="">
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/scan" class="flex items-center p-2 bg-gray-100 rounded-md hover:bg-red-300">
                    <img src="https://cdn-icons-png.flaticon.com/128/3409/3409518.png" class="w-[30px] h-[30px] "
                        alt="" srcset="">
                    <span class="flex-1 ms-3 whitespace-nowrap">Scan QR</span>
                </a>
            </li>
            <li>
                <a href="parentInfo" class="flex items-center p-2 bg-gray-100 rounded-md hover:bg-red-300">
                    <img src="https://cdn-icons-png.flaticon.com/128/4259/4259760.png" class="w-[30px] h-[30px] "
                        alt="" srcset="">
                    <span class="flex-1 ms-3 whitespace-nowrap">Parents</span>
                </a>
            </li>
            <li>
                <a href="/admin/studentInfo" class="flex items-center p-2 bg-gray-100 rounded-md hover:bg-red-300">
                    <svg class="w-[30px] h-[30px] text-gray-500 " viewBox="0 0 48 48" fill="none"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="48" height="48" fill="url(#pattern0)" />
                        <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                height="1">
                                <use xlink:href="#image0_235_84" transform="scale(0.0078125)" />
                            </pattern>
                            <image id="image0_235_84" width="128" height="128"
                                xlink:href="data:image/png;base64,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" />
                        </defs>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Students</span>
                </a>
            </li>
        </ul>
        <a href="{{ route('admin.logout') }}"
            class="absolute bottom-4 left-3 flex items-center p-2 w-32 bg-gray-100 rounded-xl hover:bg-red-300">
            <img src="https://cdn-icons-png.flaticon.com/128/1716/1716274.png" class="w-[25px] h-[25px] "
                alt="">
            <span class="flex-1 ml-2 mr-2 whitespace-nowrap font-semibold italic font-inter">
                Logout</span>
        </a>
    </div>
</aside>
