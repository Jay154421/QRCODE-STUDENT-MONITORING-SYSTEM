@extends('layouts.app')

@section('title')
    Profile
@endsection

{{-- SideBar --}}
@include('layouts.parent-nav')

@section('content')
    @include('error.changepassword')
    <div class=" mx-24 my-8 flex flex-row items-center">
        <div class="text-xl font-bold w-14">Name</div>
        <div class="text-md pl-28">{{ $parent->name }}</div>
    </div>
    <div class="mx-24 my-8 flex flex-row items-center">
        <div class="text-xl font-bold w-14">Gender</div>
        <div class="text-md pl-28">{{ $parent->gender }}</div>
    </div>
    <div class=" mx-24 my-8 flex flex-row items-center">
        <div class=" text-xl font-bold w-14">Age</div>
        <div class="text-md pl-28">{{ $parent->age }}</div>
    </div>
    <div class=" mx-24 my-8 flex flex-row items-center">
        <div class=" text-xl font-bold w-14">Address</div>
        <div class="text-md pl-28">{{ $parent->address }}</div>
    </div>
    <div class=" mx-24 my-8 flex flex-row items-center">
        <div class=" text-xl font-bold w-14">Phone</div>
        <div class="text-md pl-28">{{ $parent->phone }}</div>
    </div>
    <div class=" mx-24 mt-5">
        <x-parent-changepassword />
    </div>
@endsection
