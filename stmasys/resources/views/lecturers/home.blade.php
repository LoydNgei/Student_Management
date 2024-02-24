<x-layout>
    <x-navbar>
        <div class="grid grid-cols-3 gap-4">
            @foreach ($lecturers as $lecturer)
                {{-- <div class="border p-4">
                    <img src="{{ $lecturer->image }}" alt="{{ $lecturer->name }}">
                    <p><strong>Lecturer Name:</strong> {{ $lecturer->lecturer_name }}</p>
                    <p><strong>Email:</strong> {{ $lecturer->course_taught }}</p>
                </div> --}}
            @endforeach
        </div>
    </x-navbar>
</x-layout>    