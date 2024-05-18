@extends('layouts.app')

@section('title')
    Schedule
@endsection

{{-- SideBar --}}
@include('layouts.parent-nav')

@section('content')
    <div class="relative overflow-x-auto">
        <div class="flex flex-shrink justify-center">
            <p class="mb-6 tracking-widest relative text-4xl">SCHEDULE</p>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        SubjCode
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Section
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Schedule
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Units
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($schedules as $schedule)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th class="px-6 py-4">
                            {{ $schedule->subjcode }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $schedule->section }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $schedule->description }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $schedule->schedule }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $schedule->unit }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
