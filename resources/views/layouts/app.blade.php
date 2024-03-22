<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <title>@yield('title')</title>
    <style>
        .glass-container {
            background: rgba(253, 253, 253, 0.068);
            backdrop-filter: blur(10px);
            border-radius: 10px;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    {{-- Main --}}
    @yield('content')

</body>

</html>
