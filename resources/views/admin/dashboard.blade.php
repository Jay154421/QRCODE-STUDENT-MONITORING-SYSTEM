@extends('layouts.app')

@section('title')
    Admin Dashboard
@endsection

{{-- SideBar --}}
@include('layouts.admin-nav')

@section('content')
    <main class=" flex flex-col items-center">
        <h1 class="absolute text-5xl font-bold left-[270px]">Dashboard</h1>
        <div class="fix absolute top-[110px] flex items-center justify-center">
            <div class="mr-8 ml-20 bg-red-500 w-56 h-40 p-2 rounded-md">
                <label for="" class="text-3xl text-center ">STUDENTS</label>
                <div>
                    <span class="text-2xl">1</span>
                </div>
            </div>
            <div class="mr-8 ml-20 bg-blue-300 w-56 h-40 p-2 rounded-md">
                <label for="" class="text-3xl text-center">PARENTS</label>
                <div>
                    <span class="text-2xl">1</span>
                </div>
            </div>
            <div class="mr-8 ml-20 bg-green-300 w-56 h-40 p-2 rounded-md">
                <label for="" class="text-3xl text-center">TOTALS</label>
                <div>
                    <span class="text-2xl">1</span>
                </div>
            </div>
        </div>
    </main>
@endsection
