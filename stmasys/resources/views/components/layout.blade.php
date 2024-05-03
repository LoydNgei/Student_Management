<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- <link rel="stylesheet" href="/style.css"> --}}
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <link href="{{ asset('css/homelayout.css') }}" rel="stylesheet">

        
        @vite('resources/css/app.css')

        <title>ECOSA</title>
    </head>
    <body class="relative min-h-screen">

        {{-- Main content --}}
        <main class="pb-16">
            {{ $slot }}
        </main>
    </body>
</html>