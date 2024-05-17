@extends('layouts.app')

@section('title')
    Scanner
@endsection


@section('content')
    <a href="/admin/dashboard" class="flex justify-end text-4xl hover:text-gray-300">X</a>
    <div class="flex justify-between mx-auto px-4">
        <div class="flex justify-center  min-h-screen top-0">
            <div class="w-[750px] mt-4">
                <div class="bg-gray-200 w-[620px] ml-5">
                    <div class="px-4 py-4">
                        <video id="preview" class="w-[600px] h-auto"></video>
                        {{-- top-left --}}
                        <div class="border-2 border-blue-500 w-16 absolute top-[130px] left-[180px]"></div>
                        <div class="border-2 border-blue-500 w-16 absolute top-[160px] transform rotate-90 left-[150px]">
                        </div>
                        {{-- bottom-left --}}
                        <div class="border-2 border-blue-500 w-16 absolute top-[320px] transform rotate-90 left-[150px]">
                        </div>
                        <div class="border-2 border-blue-500 w-16 absolute top-[350px] left-[180px]"></div>
                        {{-- top-right --}}
                        <div class="border-2 border-blue-500 w-16 absolute top-[130px] left-[430px]"></div>
                        <div class="border-2 border-blue-500 w-16 absolute top-[160px] transform rotate-90 left-[460px]">
                        </div>
                        {{-- bottom-right --}}
                        <div class="border-2 border-blue-500 w-16 absolute top-[320px] transform rotate-90 left-[460px]">
                        </div>
                        <div class="border-2 border-blue-500 w-16 absolute top-[350px] left-[430px]"></div>

                        <form action="{{ route('scan') }}" method="POST" id="form">
                            @csrf
                            <input type="hidden" name="id_student" id="id_student">
                        </form>
                    </div>
                    @if (session()->has('error'))
                        <div class="px-2 py-2 bg-red-500 text-md text-white">{{ session('error') }}</div>
                    @endif
                    @if (session()->has('success'))
                        <div class="px-2 py-2 bg-green-500 text-md text-white">{{ session('success') }}</div>
                    @endif
                </div>
            </div>
            <div class="ml-10 w-[550px]">
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
            // setTimeout(function() {
            // document.getElementById('text').classList.remove('hidden');
            document.getElementById('id_student').value = c;
            document.getElementById('form').submit();
            // }, 2000);
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
