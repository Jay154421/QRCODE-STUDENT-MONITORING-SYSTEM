<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <title>Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']);
</head>

<body>

    {{-- SideBar --}}
    @include('layouts.admin-nav')

    {{-- Main --}}
    @yield('content')

</body>

</html>
