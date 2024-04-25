@extends('layouts.app')

@section('title')
    Scanner
@endsection


@section('content')
    <a href="/admin/dashboard" class="absolute right-2 text-4xl hover:text-gray-300">X</a>
    <div class="container mx-auto px-4">
        <div class="flex justify-center  min-h-screen top-0">
            <div class="w-[850px] max-w-lx mt-4">
                <video id="preview" class="w-full h-auto"></video>
                <form action="{{ route('scan') }}" method="POST" id="form">
                    @csrf
                    <input type="hidden" name="id_student" id="id_student">
                </form>
                @if (session()->has('error'))
                    <p class="mt-5 text-md text-red-500">{{ session('error') }}</p>
                @endif
                @if (session()->has('success'))
                    <p class="mt-5 text-md text-green-500">{{ session('success') }}</p>
                @endif
            </div>
            <div class="ml-10">
                <label for="default-input" class="block mt-4 mb-2 text-4xl font-inter text-center  dark:text-white">
                    SCAN QR CODE</label>
                <input type="text" id="text" readonly value=""
                    class="bg-gray-50 justify-center border rounded-lg w-full">
                <table class="min-w-full divide-y divide-gray-200 mt-4">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase tracking-wider">
                                Date
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase tracking-wider">
                                Name
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase tracking-wider">
                                IN
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase tracking-wider">
                                OUT
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($Records as $record)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $record->date }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $record->student->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $record->login_time }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $record->logout_time }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <script>
        let scanner = new Instascan.Scanner({
            video: document.getElementById('preview')
        });
        scanner.addListener('scan', function(c) {
            document.getElementById('text').value = c;
            document.getElementById('id_student').value = c;
            document.getElementById('form').submit();
        });
        Instascan.Camera.getCameras().then(function(cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
            } else {
                console.error('No cameras found.');
            }
        }).catch(function(e) {
            console.error(e);
        });
    </script>
@endsection
