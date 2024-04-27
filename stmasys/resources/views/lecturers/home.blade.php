<x-layout>
    <x-navbar></x-navbar>

    <!-- Grid layout -->
    <div class="grid grid-cols-3 gap-4 pt-32">
        <!-- Lecturers section (3/4 of the width) -->
        <div class="col-span-2">
            <div class="grid grid-cols-3 gap-4">
                @foreach ($lecturers as $lecturer)
                    <div class="border p-4 mb-4">
                        <p><img src="stmasys/public/images/Ecosa.jpg" alt="">{{ $lecturer->image }}</p>
                        <p><strong>Lecturer Name:</strong> {{ $lecturer->lecturer_name }}</p>
                        <p><strong>Course Taught:</strong> {{ $lecturer->course_taught }}</p>
                        <p><strong>Year:</strong> {{ $lecturer->year }}</p>
                        <a href="{{ route('inquiry') }}">Submit Query</a>
                    </div>
                @endforeach
            </div>

            {{ $lecturers->links() }}

        </div>

        <!-- Dropdown menu (1/4 of the width) -->
        <div class="col-span-1">
            @include('courseNav')
        </div>
    </div>
</x-layout>

<x-footer></x-footer>
