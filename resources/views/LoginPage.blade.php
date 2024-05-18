@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-center bg-no-repeat bg-gray-200 bg-blend-multiply"
        style="background-image: url('{{ asset('image/login.png') }}'); background-size: cover;">
        <div class="w-full max-w-md p-6 glass-container rounded-md shadow-md ">
            <div class="flex justify-center mb-5">
                <img src="{{ asset('image/Logo.PNG') }}" alt="Logo">
            </div>
            <h1 class="text-4xl font-semibold italic font-inter text-center mb-10" style="color: #200707;">Student.QR
                code</h1>
            <form method="POST" action="login">
                @csrf
                @if (session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-3 py-1 rounded relative" role="alert">
                        <strong class="font-bold">Error!</strong>
                        <span class="block sm:inline">{{ session('error') }}</span>
                    </div>
                @endif
                <div class="mb-8 flex flex-col sm:flex-row justify-center">
                    <input type="text" placeholder="Username" id="username" name="username"
                        class="mt-1 block w-full sm:w-96 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div class="mb-8 flex flex-col sm:flex-row justify-center">
                    <input type="password" placeholder="Password" id="password" name="password"
                        class="mt-1 block w-full sm:w-96 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div class="flex items-center justify-center">
                    <button type="submit" class="px-6 py-2 hover:scale-110 text-white font-semibold rounded-lg "
                        style="background-color: #6C1B1B;">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
