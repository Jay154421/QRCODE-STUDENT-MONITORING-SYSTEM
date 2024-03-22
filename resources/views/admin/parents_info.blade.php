@extends('layouts.app')

@section('title')
    Parent Info
@endsection

{{-- SideBar --}}
@include('layouts.admin-nav')

@section('content')
    <div class="fixed right-10 top-4 w-[1080px] border rounded-md shadow-md p-6">
        <div class="bg-red-400">
            <h1 class="text-5xl left-[270px] mb-4 font-inter p-4">Parents List</h1>
            <x-parent-modal />
        </div>
        <div class="flex flex-col">
            <div class="flex flex-end justify-end mb-5">
                <p class="flex  mr-3 text-center pt-2">Search</p>
                <input type="search" id="username" name="username" class=" border border-gray-300 rounded-md">
            </div>
            <div class="-m-1.5 overflow-x-auto ">
                <div class="p-1.5 min-w-full inline-block align-middle bg-gray-200">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        No.</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Name</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Gender</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Age</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Address</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Phone</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Colin J. Michael
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">male
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">56
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <div class="w-[40px] truncate">
                                            New Orleans, LA 70112</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        09654512123
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <form action="" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="item px-2 py-2 text-white font-semibold rounded-lg bg-red-600 hover:bg-red-500">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button
                        class="text-md text-black border border-gray-500 rounded-md px-4 py-1 mr-2 mt-2">previous</button>
                    <button class=" text-md text-black border border-gray-500 rounded-md px-4 py-1  mt-2">next</button>
                </div>
            </div>
        </div>
    @endsection
