<x-layout>
    <x-navbar></x-navbar>
    <div class="flex items-center justify-center">
        <form method="POST" action="/sendquery" class="rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-lg font-bold mb-2" for="name">
                    Name
                </label>
                <input placeholder="Student name" class="shadow appearance-none border rounded w-full py-2 px-3">

                <label class="block text-sm font-bold mb-2" for="name">
                    Email
                </label>
                <input placeholder="Student email" class="shadow appearance-none border rounded w-full py-2 px-3">

                <label class="block text-sm font-bold mb-2" for="registration_number">
                    Registration Number
                </label>
                <input placeholder="Registration Number" class="shadow appearance-none border rounded w-full py-2 px-3">
                
                <label class="block text-sm font-bold mb-2" for="message">
                    Message
                </label>
                <textarea placeholder="Message" class="shadow appearance-none border rounded w-full py-2 px-3"></textarea>

                <button class="bg-blue-500 rounded p-2 hover:bg-blue-700">Submit</button>
            </div>
        </form>
    </div>
</x-layout>