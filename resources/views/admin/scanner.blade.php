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
                        <div class="border-2 border-white w-16 absolute top-[130px] left-[180px]"></div>
                        <div class="border-2 border-white w-16 absolute top-[160px] transform rotate-90 left-[150px]">
                        </div>
                        {{-- bottom-left --}}
                        <div class="border-2 border-white w-16 absolute top-[320px] transform rotate-90 left-[150px]">
                        </div>
                        <div class="border-2 border-white w-16 absolute top-[350px] left-[180px]"></div>
                        {{-- top-right --}}
                        <div class="border-2 border-white w-16 absolute top-[130px] left-[430px]"></div>
                        <div class="border-2 border-white w-16 absolute top-[160px] transform rotate-90 left-[460px]">
                        </div>
                        {{-- bottom-right --}}
                        <div class="border-2 border-white w-16 absolute top-[320px] transform rotate-90 left-[460px]">
                        </div>
                        <div class="border-2 border-white w-16 absolute top-[350px] left-[430px]"></div>

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
            <div class="ml-10 w-[520px] h-[600px] px-14 py-5 border-4 border-gray-500">
                <div class="text-3xl mx-2 mb-6 text-center tracking-[4px]">SCAN STUDENT</div>
                <div id="text"
                    class="hidden w-[400px] px-5 py-5 text-center border border-black rounded-md flex justify-center items-center flex-col">
                    <div class="flex flex-row justify-evenly items-center mb-3">
                        <div class="w-12 mx-2">
                            <img src="{{ asset('image/Logo.PNG') }}" alt="Logo">
                        </div>
                        <div class=" text-xl text-center tracking-[2px]  text-red-800">ST. PETER'S COLLEGE</div>
                    </div>
                    <div class="w-[160px] mx-4 mb-2 ">
                        <img src="https://cdn-icons-png.flaticon.com/512/64/64572.png " width="256" height="256"
                            alt="" title="" class="img-small">
                    </div>
                    <div class="mx-2 mb-8 text-xl tracking-[5px] ">STUDENT</div>
                    <div id="student_id" class="mx-2 my-1 text-[15px] tracking-[2px] "></div>
                    <div id="student" class="mx-2 my-1 text-[24px]   uppercase "></div>
                    <div id="course" class="mx-2 my-2 text-xs tracking-[2px] uppercase "></div>
                </div>
            </div>
        </div>
        <script>
            let scanner = new Instascan.Scanner({
                video: document.getElementById('preview')
            });
            scanner.addListener('scan', function(c) {
                // document.getElementById('text').value = c;
                // setTimeout(function() {
                document.getElementById('text').classList.remove('hidden');
                document.getElementById('id_student').value = c;
                document.getElementById('form').submit();



                // Fetch student data
                fetch(`/admin/student/${c}`)
                    .then(response => response.json())
                    .then(student => {
                        // Display student data
                        document.getElementById('student').innerText = student.name;
                        document.getElementById('student_id').innerText = student.idnumber;
                        document.getElementById('course').innerText = student.course;
                    }).fadeOut(3000);
                .catch(error => console.error('Error fetching student data:', error));
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
