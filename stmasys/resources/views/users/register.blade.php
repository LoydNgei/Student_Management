<x-layout>
    <div class="min-h-screen flex items-center justify-center">
        <div class="mt-5">
            @if($errors->any())
                <div class="div">
                    @foreach($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
                </div>
            @endif
            @if(session()->has('error'))
                <div>{{session('error')}}</div>               
            @endif

            @if(session()->has('success'))
                <div>{{session('success')}}</div>               
            @endif
        </div>

        <form method="POST" action="{{ route('register.post') }}" class="bg-blue-300 shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="registration_number">
                    Registration Number
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="registration_number" type="text" placeholder="Registration Number" name="registration_number">

                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Student Name" name="name">


                <label class="block text-gray-700 text-sm font-bold mb-2" for="password1">
                    Password
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password1" type="password" placeholder="Password" name="password">

                <label class="block text-gray-700 text-sm font-bold mb-2" for="password2">
                    Confirm Password
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password2" type="password" placeholder="Password" name="confirm_password">
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-blue-500 text-white font-bold py-2 px-4 hover:bg-blue-700 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Register
                </button>
            </div>

        </form>
    </div>
</x-layout>
