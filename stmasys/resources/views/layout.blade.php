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
        <nav class="flex bg-black h-50 text-white">
            <div>
                <a href="/">
                    <img src="{{asset('images/Ecosa.jpg')}}" class="h-24 w-30 object-contain p-2" alt="Logo"/>
                </a>
            </div>
            <ul class="flex space-x-10 p-4">
                <li><a href="#" class="hover:bg-yellow-600 px-2 py-1 rounded">Home</a></li>
                <li><a href="#" class="hover:bg-yellow-600 px-2 py-1 rounded">About</a></li>
                <li><a href="#" class="hover:bg-yellow-600 px-2 py-1 rounded">Search</a></li>
                <li><a href="#" class="hover:bg-yellow-600 px-2 py-1 rounded">Register</a></li>
            </ul>
        </nav>


    </body>

</html>