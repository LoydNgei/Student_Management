<x-layout>
    <div class="min-h-screen flex items-center justify-center">
        <form method="POST" action="{{ route('login.post') }}" class="bg-blue-300 shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-bold mb-2" for="registration_number">
                    Registration Number
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="registration_number" type="text" placeholder="Registration Number" name="registration_number">

                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Password" name="password">
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-blue-500 text-white font-bold py-2 px-4 hover:bg-blue-700 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Log in
                </button>
            </div>
            <div class="mt-4">
                <p>Don't have an account<a href="/register"> Create one</a></p>
            </div>
        </form>
    </div>
</x-layout>
