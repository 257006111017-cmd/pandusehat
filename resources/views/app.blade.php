<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Android Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#fafcfc">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#fafcfc">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <!-- iOS Safari (alternative) -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="description" content="Aplikasi untuk memudahkan pengguna dalam memantau kesehatan buah hati">
    <meta name="keywords" content="Pandu Sehat">
    <meta name="author" content="Rafi ahfa">
    <title>Pandu Sehat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="manifest" href="{{ asset('/manifest.webmanifest') }}">
    <link rel="shortcut icon" href="/icons/icon-48x48.webp" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        html, body{
            overflow: auto;
            scrollbar-width: none;
        }
        body::-webkit-scrollbar{
            display: none;
        }192.168.100.85
        .bg-primary{
            background-color: #0048ffe9 !important;
        }
    </style>
</head>
<body>
    <div id="app"></div>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>