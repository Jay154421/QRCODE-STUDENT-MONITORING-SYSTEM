<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <title>LoginPage</title>
    <style>
        .glass-container {
            background: rgba(253, 253, 253, 0.068);
            backdrop-filter: blur(10px);
            border-radius:  10px;         
        }
    </style>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div class="flex items-center justify-center min-h-screen bg-center bg-no-repeat bg-gray-300 bg-blend-multiply" style="background-image: url('{{ asset('image/login.png') }}'); background-size: cover;">
        <div class="w-full max-w-md p-6 glass-container rounded-md shadow-md ">
            <div class="flex justify-center mb-5">
                <img src="{{ asset('image/Logo.PNG') }}" alt="Logo" >
            </div>
            <h1 class="text-4xl font-semibold italic font-inter text-center mb-10" style="color: #200707;">Student.QR code</h1>
            <form action="/login" method="post">
                <div class="mb-8 flex flex-col sm:flex-row justify-center">
                    <input type="text" placeholder="Username" id="username" name="username" class="mt-1 block w-full sm:w-96 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div class="mb-8 flex flex-col sm:flex-row justify-center">
                    <input type="password" placeholder="Password" id="password" name="password" class="mt-1 block w-full sm:w-96 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div class="flex items-center justify-center">
                    <button type="submit" class="item px-6 py-2 text-white font-semibold rounded-lg" style="background-color: #6C1B1B;">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>