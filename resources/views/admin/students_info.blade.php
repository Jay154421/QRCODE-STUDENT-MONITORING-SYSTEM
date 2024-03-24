@extends('layouts.app')

@section('title')
    Student Info
@endsection

{{-- SideBar --}}
@include('layouts.admin-nav')

@section('content')
    <div class="fixed  right-10 top-4 w-[1080px] border rounded-md shadow-md p-6">
        <div class="bg-red-400 ">
            <h1 class="text-5xl left-[270px] mb-4 font-inter p-4">Students List</h1>
            <x-student-modal />
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
                                        class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ID No.</th>
                                    <th scope="col"
                                        class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        qrcode</th>
                                    <th scope="col"
                                        class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        name</th>
                                    <th scope="col"
                                        class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        gender</th>
                                    <th scope="col"
                                        class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Age</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        year</th>
                                    <th scope="col"
                                        class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        course</th>
                                    <th scope="col"
                                        class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Address</th>
                                    <th scope="col"
                                        class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Parent</th>
                                    <th scope="col"
                                        class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                <tr>
                                    <td class="px-2 py-1 whitespace-nowrap text-sm text-gray-500">2022-00769</td>
                                    <td class="px-2 py-1 whitespace-nowrap text-sm text-gray-500"><img
                                            src="https://chart.googleapis.com/chart?cht=qr&chl=Jay%20E.%20Bodiongan&chs=180x180&choe=UTF-8&chld=L|2"
                                            width="40" alt="qr code"><a href="www.qr-code-generator.com/"
                                            border="0" style="cursor:default" rel="nofollow"></a></td>
                                    <td class="px-2 py-1 whitespace-nowrap text-sm text-gray-500">Jay E. Bodiongan</td>
                                    <td class="px-2 py-1 whitespace-nowrap text-sm text-gray-500">Male</td>
                                    <td class="px-2 py-1 whitespace-nowrap text-sm text-gray-500">20</td>
                                    <td class="px-2 py-1 whitespace-nowrap text-sm text-gray-500">2</td>
                                    <td class="px-2 py-1 whitespace-nowrap text-sm text-gray-500">BSCS</td>
                                    <td class="px-2 py-1 whitespace-nowrap text-sm text-gray-500">
                                        <div class="w-[80px] truncate">
                                            Prk 12 Saray, Iligan City</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <div class="w-[50px] truncate">
                                            Joseph D. Bodiongan</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <button type="submit"
                                            class="item px-2 py-2 text-white font-semibold rounded-lg bg-red-600 hover:bg-red-500">update</button>
                                        <button type="submit"
                                            class="item px-2 py-2 text-white font-semibold rounded-lg bg-red-600 hover:bg-red-500">Delete</button>
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
