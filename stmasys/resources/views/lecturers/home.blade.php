{{-- {{ dd($lecturers) }} --}}

<x-layout>
    <x-navbar></x-navbar>
        <div class="grid grid-cols-3 gap-4">
            @foreach ($lecturers as $lecturer)
                <div class="border p-4">
                    <p><strong>Lecturer Name:</strong> {{ $lecturer->lecturer_name }}</p>
                    <p><strong>Course Taught:</strong> {{ $lecturer->course_taught }}</p>
                    <a href="{{ route('inquiry') }}">Submit Query</a>
                </div>
            @endforeach
        </div>
</x-layout>
