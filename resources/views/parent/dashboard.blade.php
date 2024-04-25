@extends('layouts.app')

@section('title')
    Parent Dashboard
@endsection

{{-- SideBar --}}
@include('layouts.parent-nav')

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
                @foreach ($logs as $log)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $log->date }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $log->student->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $log->login_time }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $log->logout_time }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
