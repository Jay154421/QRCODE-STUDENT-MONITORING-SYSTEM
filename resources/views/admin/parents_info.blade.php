@extends('layouts.app')

@section('title')
    Parent Info
@endsection

{{-- SideBar --}}
@include('layouts.admin-nav')

@section('content')
    <div class="fixed right-10 top-4 w-[1080px] border rounded-md shadow-md p-6 overflow-auto max-h-lvh ">
        <div class="bg-red-400">
            <h1 class="text-5xl left-[270px] mb-4 font-inter p-4">Parents List</h1>
            <x-parent-modal />
        </div>
        <div class="flex flex-col">
            <table id="example" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Created_date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($parents as $parent)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $parent->name }}</td>
                            <td>{{ $parent->gender }}</td>
                            <td>{{ $parent->age }}</td>
                            <td>{{ str_limit($parent->address, 20) }}</td>
                            <td>{{ str_limit($parent->phone, 20) }}</td>
                            <td>{{ $parent->created_at->format('d/m/Y') }}</td>
                            <td>delete</td>

                        </tr>
                    @endforeach
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Created_date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <script></script>
    @endsection
