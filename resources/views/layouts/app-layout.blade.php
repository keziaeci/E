<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KawanAlinea</title>
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js'])
    @stack('cdn')
</head>
<body>
    {{ $slot }}    
</body>
</html>