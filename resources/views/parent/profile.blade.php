@extends('layouts.app')

@section('title')
    Profile
@endsection

{{-- SideBar --}}
@include('layouts.parent-nav')

@section('content')
    <div class=" mx-24 my-8 flex flex-row items-center">
        <div class="text-xl font-bold w-14">Name</div>
        <div class="text-md pl-28">Issac A. Edge</div>
    </div>
    <div class="mx-24 my-8 flex flex-row items-center">
        <div class="text-xl font-bold w-14">Gender</div>
        <div class="text-md pl-28">Male</div>
    </div>
    <div class=" mx-24 my-8 flex flex-row items-center">
        <div class=" text-xl font-bold w-14">Age</div>
        <div class="text-md pl-28">59</div>
    </div>
    <div class=" mx-24 my-8 flex flex-row items-center">
        <div class=" text-xl font-bold w-14">Address</div>
        <div class="text-md pl-28">2640 Brown Street Walnut Creek, CA 94596</div>
    </div>
    <div class=" mx-24 my-8 flex flex-row items-center">
        <div class=" text-xl font-bold w-14">Phone</div>
        <div class="text-md pl-28">09263626498</div>
    </div>
    <div class=" mx-24 mt-5">
        <x-changepassword-modal />
    </div>
@endsection
