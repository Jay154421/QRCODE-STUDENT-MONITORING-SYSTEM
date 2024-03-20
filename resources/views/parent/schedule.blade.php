@extends('layouts.app')

@section('title')
    Schedule
@endsection

{{-- SideBar --}}
@include('layouts.parent-nav')

@section('content')
    <div class="relative overflow-x-auto">
        <div class="flex flex-shrink justify-center">
            <p class="relative text-4xl font-bold font-serif">SCHEDULE</p>
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
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="px-6 py-4">
                        CC106
                    </th>
                    <td class="px-6 py-4">
                        83504
                    </td>
                    <td class="px-6 py-4">
                        Applications Development & Emerging Technologies
                    </td>
                    <td class="px-6 py-4">
                        <p>F 03:30PM-05:30PM(A203);</p>
                        <p>S 08:30AM-11:30AM(A202)</p>
                    </td>
                    <td class="px-6 py-4">
                        3
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="px-6 py-4">
                        AL 101
                    </th>
                    <td class="px-6 py-4">
                        83506
                    </td>
                    <td class="px-6 py-4">
                        Design & Analysis of Algorithms
                    </td>
                    <td class="px-6 py-4">
                        F 05:30PM-08:30PM(A203);
                    </td>
                    <td class="px-6 py-4">
                        3
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="px-6 py-4">
                        PL 101
                    </th>
                    <td class="px-6 py-4">
                        83505
                    </td>
                    <td class="px-6 py-4">
                        Programming Language (Design & Implementation)
                    </td>
                    <td class="px-6 py-4">
                        <p>W 06:00PM-08:00PM(A203);</p>
                        <p>Th 02:30PM-04:30PM(A202)</p>
                    </td>
                    <td class="px-6 py-4">
                        3
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="px-6 py-4">
                        AR 101
                    </th>
                    <td class="px-6 py-4">
                        83507
                    </td>
                    <td class="px-6 py-4">
                        Architecture & Organization
                    </td>
                    <td class="px-6 py-4">
                        <p>T 10:30AM-12:00PM(LR5);</p>
                        <p>M 05:30PM-08:30PM(A204)</p>
                    </td>
                    <td class="px-6 py-4">
                        3
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="px-6 py-4">
                        OS 101
                    </th>
                    <td class="px-6 py-4">
                        83508
                    </td>
                    <td class="px-6 py-4">
                        Fundamentals of Operating Systems
                    </td>
                    <td class="px-6 py-4">
                        <p>W 04:00PM-06:00PM(A203);</p>
                        <p>M 05:30PM-06:30PM(A204)</p>
                    </td>
                    <td class="px-6 py-4">
                        3
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="px-6 py-4">
                        G.E.C 10
                    </th>
                    <td class="px-6 py-4">
                        52026
                    </td>
                    <td class="px-6 py-4">
                        History of the Muslim Filipinos and the Ips of Mindanao
                    </td>
                    <td class="px-6 py-4">
                        TTh 07:30AM-09:00AM(LR2);
                    </td>
                    <td class="px-6 py-4">
                        3
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="px-6 py-4">
                        G.E.C 11
                    </th>
                    <td class="px-6 py-4">
                        52035
                    </td>
                    <td class="px-6 py-4">
                        Language, Gender and Society
                    </td>
                    <td class="px-6 py-4">
                        TTh 09:00AM-10:30AM(EL1);
                    </td>
                    <td class="px-6 py-4">
                        3
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="px-6 py-4">
                        G.E.C 12
                    </th>
                    <td class="px-6 py-4">
                        52042
                    </td>
                    <td class="px-6 py-4">
                        Ecocriticism & Conservation of Nature
                    </td>
                    <td class="px-6 py-4">
                        TTh 01:00PM-02:30PM(VR7);
                    </td>
                    <td class="px-6 py-4">
                        3
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="px-6 py-4">
                        PE 4
                    </th>
                    <td class="px-6 py-4">
                        52124
                    </td>
                    <td class="px-6 py-4">
                        PATH-FIT 4
                    </td>
                    <td class="px-6 py-4">
                        W 09:00AM-11:00AM(VR7);
                    </td>
                    <td class="px-6 py-4">
                        3
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
@endsection
