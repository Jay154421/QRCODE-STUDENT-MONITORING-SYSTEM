@extends('layouts.admin')

@section('content')
    <div class="fixed right-10 w-[980px] border rounded-md shadow-md p-6">
        <div class="bg-red-400 ">
            <h1 class="text-5xl left-[270px] mb-4 font-inter p-4">Students List</h1>
            <x-modal.student-modal />
        </div>
        <div class="flex flex-col">
            <div class="flex flex-end justify-end mb-5">
                <p class="flex  mr-3 text-center pt-2">Search</p>
                <input type="search" id="username" name="username" class=" border border-gray-300 rounded-md">
            </div>
            <div class="-m-1.5 overflow-x-auto">
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
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">John Brown</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Male</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">45</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">New York No. 1 Lake Park
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <button type="submit"
                                            class="item px-2 py-2 text-white font-semibold rounded-lg bg-red-600 hover:bg-red-500">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button class="border text-white rounded-md px-4 py-1 bg-blue-700 mt-2">previous</button>
                    <button class=" text-md text-white border rounded-md px-4 py-1 bg-blue-700 mt-2">next</button>
                </div>
            </div>
        </div>
    @endsection
