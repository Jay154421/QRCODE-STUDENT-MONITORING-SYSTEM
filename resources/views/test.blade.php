<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Scanner</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsQR/1.3.1/jsQR.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/p5.js"></script>
</head>

<body>
    {{-- <video id="qr-video" width="300" height="300"></video>

    <script>
        let video;
        let canvas;
        let scanning = false;

        function setup() {
            canvas = createCanvas(300, 300);
            video = createCapture(VIDEO);
            video.size(300, 300);
            video.hide(); // Hide the video element, but still read from it
            scanning = true;
        }

        function draw() {
            if (scanning) {
                image(video, 0, 0, width, height);
                scanQRCode();
            }
        }

        function scanQRCode() {
            const imageData = video.canvas.getContext('2d').getImageData(0, 0, video.width, video.height);
            const code = jsQR(imageData.data, imageData.width, imageData.height, {
                inversionAttempts: 'dontInvert',
            });
            if (code) {
                drawSquare(code.location);
            }
        }

        function drawSquare(location) {
            strokeWeight(4);
            stroke(255, 0, 0); // Red color for the square
            noFill();
            rect(location.topLeftCorner.x, location.topLeftCorner.y, location.bottomRightCorner.x - location.topLeftCorner
                .x, location.bottomRightCorner.y - location.topLeftCorner.y);
        }
    </script> --}}
</body>


</html>
