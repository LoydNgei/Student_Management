<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- <link rel="stylesheet" href="/style.css"> --}}
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

        @vite('resources/css/app.css')

        <title>ECOSA</title>
        
    </head>
    <body>

        {{-- Main content --}}
        <main>
            {{ $slot }}
        </main>

        {{-- Footer --}}
        <footer class="fixed bottom-0 w-full h-40 flex justify-between">
            {{-- Left List --}}
            <div class="m-5">
                <ul class="space-y-3">
                    <li>University of Nairobi</li>
                    <li>P. O. Box 30197 00100 Nairobi-Kenya</li>
                </ul>
            </div>
            {{-- Right List --}}
            <div class="m-5">
                <ul>
                    <li><i class="fas fa-envelope"></i> <span>ecosa@uonbi.ac.ke</span></li>
                    <div class="space-x-5 space-y-5">
                        <i class="fab fa-facebook hover:bg-blue-600 rounded"></i>
                        <i class="fab fa-twitter hover:bg-blue-600 rounded"></i>
                        <i class="fas fa-globe hover:bg-blue-600 rounded"></i>
                    </div>
                </ul>
            </div>
        </footer>
    </body>
</html>