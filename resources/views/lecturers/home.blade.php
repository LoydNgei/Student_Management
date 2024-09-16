<x-layout>
    <x-navbar></x-navbar>

    <div class="grid grid-cols-3 gap-4 pt-32">
        <!-- Lecturers section (3/4 of the width) -->
        <div class="col-span-3">
            <div class="grid grid-cols-3 gap-4">
                @foreach ($lecturers as $lecturer)
                <div class="lecture-item relative h-0 pb-3/4" style="background-image: url('{{ asset('images/course_images/' . $lecturer->course_images) }}');">
                    <div class="absolute bottom-0 left-0 right-0 bg-black p-2 text-white">
                        <p><strong>Lecturer Name:</strong> {{ $lecturer->lecturer_name }}</p>
                        <p><strong>Course Taught:</strong> {{ $lecturer->course_taught }}</p>
                        <a href="{{ route('inquiry') }}">Submit Query</a>
                    </div>
                </div>
                @endforeach
            </div>
    
            {{-- Pagination --}}

            <div class="m-4">{{ $lecturers->links() }}</div>
        </div>
    
        <!-- Dropdown menu (1/4 of the width) -->
        {{-- <div class="col-span-1">
            @include('courseNav')
        </div>
    </div> --}}
    
</x-layout>

<x-footer></x-footer>
