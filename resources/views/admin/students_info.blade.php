@extends('layouts.app')

@section('title')
    Student Info
@endsection

{{-- SideBar --}}
@include('layouts.admin-nav')

@section('content')
    @include('error.student')
    <div class="fixed right-10 top-4 w-[1080px] border rounded-md shadow-md p-6 overflow-auto max-h-lvh ">
        <div class="bg-red-400">
            <h1 class="text-5xl left-[270px] mb-4 font-inter p-4">Students List</h1>

            {{-- Add student --}}
            <x-student-modal />
        </div>
        <div class="flex flex-col">
            <table id="example" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>ID number</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Year</th>
                        <th>Course</th>
                        {{-- <th>Address</th>
                        <th>Parent</th> --}}
                        <th>Created_date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->idnumber }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->age }}</td>
                            <td>{{ $student->year }}</td>
                            <td>{{ str_limit($student->course, 10) }}</td>
                            {{-- <td>{{ str_limit($student->address, 10) }}</td>
                            <td>{{ str_limit($student->parent, 10) }}</td> --}}
                            <td>{{ $student->created_at->format('d/m/Y') }}</td>
                            <td>
                                <x-student-update-modal :student="$student" />
                                <x-student-delete-modal :student="$student" />
                            </td>
                        </tr>
                    @endforeach
                <tfoot>
                    <tr>
                        <th>ID number</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Year</th>
                        <th>Course</th>
                        {{-- <th>Address</th>
                        <th>Parent</th> --}}
                        <th>Created_date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    @endsection
