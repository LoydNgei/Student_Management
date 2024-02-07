<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>My Website</title>
        <link rel="stylesheet" href="./style.css">
        <link rel="icon" href="./favicon.ico" type="image/x-icon">
        @vite('resources/css/app.css')
    </head>
    <body>

        {{-- The Navigation Bar --}}

        <nav class="flex h-50 text-white">
            <div>
                <a href="/">
                    <img src="{{asset('images/Ecosa.jpg')}}" class="h-24 w-30 object-contain p-2" alt="Logo"/>
                </a>
            </div>
            <ul class="flex space-x-10 p-4 ml-auto">
                <li><a href="/" class="hover:bg-yellow-600 px-2 py-1 rounded">Home</a></li>
                <li><a href="/about" class="hover:bg-yellow-600 px-2 py-1 rounded">About</a></li>
                <li><a href="/search" class="hover:bg-yellow-600 px-2 py-1 rounded">Search</a></li>
                <li><a href="/register" class="hover:bg-yellow-600 px-2 py-1 rounded">Register</a></li>
            </ul>
        </nav>

        {{-- Main content --}}

        <main>

        </main>

        {{-- Footer --}}

        <footer class="fixed bottom-0 w-full h-40 bg-slate-400 ">
            <ul>
                <li>University of Nairobi</li>

                <li>P. O. Box 30197 00100 Nairobi-Kenya</li>
            </ul>
        </footer>
    </body>

</html>