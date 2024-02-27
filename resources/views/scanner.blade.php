<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <title>ScannerCode</title>

    @vite(['resources/css/app.css','resources/js/app.js']);
</head>
<body>
    <div class="container mx-auto px-4">
        <div class="flex justify-center items-center min-h-screen">
            <div class="w-full max-w-xs">
                <video id="preview" class="w-full h-auto"></video>
            </div>
            <div class="ml-10">
                <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SCAN QR CODE</label>
                <input type="text" id="default-input" class="bg-gray-50 border rounded-md">
            </div>
        </div>
    </div>
    <script>
        let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
        scanner.addListener('scan', function (content) {
            console.log(content);
            // Here you can handle the scanned content, e.g., display it or send it to a server
        });
        Instascan.Camera.getCameras().then(function (cameras) {
            if (cameras.length >  0) {
                scanner.start(cameras[0]);
            } else {
                console.error('No cameras found.');
            }
        }).catch(function (e) {
            console.error(e);
        });
    </script>
</body>
</html>