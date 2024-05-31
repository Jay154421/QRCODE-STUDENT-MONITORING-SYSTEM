@extends('layouts.app')

@section('title')
    Admin Dashboard
@endsection

{{-- SideBar --}}
@include('layouts.admin-nav')

@section('content')
    <div class="fix absolute left-[270px] text-3xl font-bold mt-2 mb-4 text-gray-800">
        Dashboard
    </div>
    <div class=" flex flex-row pt-24 justify-center items-center">
        <div class="mr-8 ml-20 border border-gray-500 w-56 h-40 p-2 rounded-md text-center">
            <label for="" class="text-2xl text-center">Students</label>
            <div class="mt-5">
                <span class="text-4xl">{{ $totalStudents }}</span>
            </div>
        </div>
        <div class="mr-8 ml-20 border border-gray-500 w-56 h-40 p-2 rounded-md text-center">
            <label for="" class="text-2xl text-center">Parents</label>
            <div class="mt-5">
                <span class="text-4xl">{{ $totalParents }}</span>
            </div>
        </div>
        <div class="mr-8 ml-20 border border-gray-500 w-56 h-40 p-2 rounded-md text-center">
            <label for="" class="text-2xl text-center">Total</label>
            <div class="mt-5">
                <span class="text-3xl">{{ $total }}</span>
            </div>
        </div>
    </div>
@endsection
