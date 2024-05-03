<nav class="flex h-50 bg-blue-950 fixed w-full top-0 z-10">
    <div>
        <a href="/">
            <img src="{{asset('images/Ecosa.jpg')}}" class="h-24 w-30 object-contain p-2" alt="Logo"/>
        </a>
    </div>

    <div class="flex items-center ml-auto px-16 space-x-20">
        <input placeholder="Search" class="rounded p-2">
        <a href="{{route('logout')}}" class="text-white">
            <span>Logout</span>
        </a>
    </div>
</nav>

