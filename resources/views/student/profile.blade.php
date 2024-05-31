@extends('layouts.app')

@section('title')
    Profile
@endsection

{{-- SideBar --}}
@include('layouts.student-nav')

@section('content')
    @include('error.changepassword')
    <button class=" relative top-[80px] left-[125px] p-1 text-md  bg-white hover:bg-gray-200 rounded-md  ">Click me</button>
    <div class=" mx-24 w-28  flex flex-row items-center">
        <a href="" id="container">{{ $qrCodes }}</a><br />
    </div>
    <div class="mx-24 my-4 flex flex-row items-center">
        <div class="text-xl font-bold w-14">Name</div>
        <div class="text-md pl-28">{{ $student->name }}</div>
    </div>
    <div class="mx-24 my-4 flex flex-row items-center">
        <div class="text-xl font-bold w-14">Age</div>
        <div class="text-md pl-28">{{ $student->age }}</div>
    </div>
    <div class="mx-24 my-4 flex flex-row items-center">
        <div class="text-xl font-bold w-14">Gender</div>
        <div class="text-md pl-28">{{ $student->gender }}</div>
    </div>
    <div class="mx-24 my-4 flex flex-row items-center">
        <div class="text-xl font-bold w-14">Year</div>
        <div class="text-md pl-28">{{ $student->year }}</div>
    </div>
    <div class="mx-24 my-4 flex flex-row items-center">
        <div class="text-xl font-bold w-14">Course</div>
        <div class="text-md pl-28">{{ $student->course }}</div>
    </div>
    <div class="mx-24 my-4 flex flex-row items-center">
        <div class="text-xl font-bold w-14">Address</div>
        <div class="text-md pl-28">{{ $student->address }}</div>
    </div>
    <div class="mx-24 my-4 flex flex-row items-center">
        <div class="text-xl font-bold w-14">Parent</div>
        <div class="text-md pl-28">{{ $student->parent }}</div>
    </div>
    <div class=" mx-24 mt-5">
        <x-student-changepassword />
    </div>
@endsection
