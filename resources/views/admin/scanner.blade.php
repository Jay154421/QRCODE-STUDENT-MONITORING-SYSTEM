@extends('layouts.app')

@section('title')
    Scanner
@endsection


@section('content')
    <a href="/admin/dashboard" class="absolute right-2 text-4xl hover:text-gray-300">X</a>
    <div class="container mx-auto px-4">
        <div class="flex justify-center  min-h-screen top-0">
            <div class="w-full max-w-lx mt-4">
                <video id="preview" class="w-full h-auto"></video>
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
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                2024/01/12
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                JAY E. BODIONGAN
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                7:30AM
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                9:30AM
                            </td>
                        </tr>
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
