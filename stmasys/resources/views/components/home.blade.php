<x-layout>
    <div class="grid grid-cols-3 gap-4">
        @foreach ($lecturers as $lecturer)
            <div class="border p-4">
                <img src="{{ $lecturer->image }}" alt="{{ $lecturer->name }}">
                <p><strong>Lecturer Name:</strong> {{ $lecturer->name }}</p>
                <p><strong>Email:</strong> {{ $lecturer->email }}</p>
                <!-- Add more details as needed -->
            </div>
        @endforeach
    </div>
</x-layout>
