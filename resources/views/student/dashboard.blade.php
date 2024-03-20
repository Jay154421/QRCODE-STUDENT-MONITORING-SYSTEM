@extends('layouts.app')

@section('title')
    Student Dashboard
@endsection

{{-- SideBar --}}
@include('layouts.student-nav')

@section('content')
    <div class="relative overflow-x-auto">
        <div class="flex flex-shrink justify-center">
            <p class="relative text-4xl font-bold font-serif">SCHOOL IN AND OUT</p>
        </div>
        <table class="w-full  text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        DATE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        NAME
                    </th>
                    <th scope="col" class="px-6 py-3">
                        IN
                    </th>
                    <th scope="col" class="px-6 py-3">
                        OUT
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        2024/01/12
                    </th>
                    <td class="px-6 py-4">
                        JAY E. BODIONGAN
                    </td>
                    <td class="px-6 py-4">
                        7:30AM
                    </td>
                    <td class="px-6 py-4">
                        9:30AM
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
