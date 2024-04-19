@extends('layouts.app')

@section('title')
    Admin Dashboard
@endsection

{{-- SideBar --}}
@include('layouts.admin-nav')

@section('content')
    <div class="fix absolute left-[270px] text-5xl font-bold mb-4 text-gray-800">
        Dashboard
    </div>
    <div class=" flex flex-row pt-24 justify-center items-center">
        <div class="mr-8 ml-20 bg-red-500 w-56 h-40 p-2 rounded-md">
            <label for="" class="text-3xl text-center">Students</label>
            <div>
                <span class="text-2xl">{{ $totalStudents }}</span>
            </div>
        </div>
        <div class="mr-8 ml-20 bg-blue-300 w-56 h-40 p-2 rounded-md">
            <label for="" class="text-3xl text-center">Parents</label>
            <div>
                <span class="text-2xl">{{ $totalParents }}</span>
            </div>
        </div>
        <div class="mr-8 ml-20 bg-green-300 w-56 h-40 p-2 rounded-md">
            <label for="" class="text-3xl text-center">Total</label>
            <div>
                <span class="text-2xl">{{ $total }}</span>
            </div>
        </div>
    </div>
@endsection
