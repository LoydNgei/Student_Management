{{-- {{ dd($lecturers) }} --}}

<x-layout>
    <x-navbar>
        <div class="grid grid-cols-3 gap-4">
            @foreach ($lecturers as $lecturer)
                <div class="border p-4">
                    <p><strong>Lecturer Name:</strong> {{ $lecturer->lecturer_name }}</p>
                    <p><strong>Course Taught:</strong> {{ $lecturer->course_taught }}</p>
                </div>
            @endforeach
        </div>
    </x-navbar>
</x-layout>
