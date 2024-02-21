{{-- The Navigation Bar --}}
<nav class="flex h-50">
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