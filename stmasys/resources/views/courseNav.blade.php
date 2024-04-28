<div class="flex justify-end m-8">
    <div class="relative inline-block text-left" x-data="{ open: false }">
        <div>
            <button @click="open = !open" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100">
                My Courses
                <!-- Heroicon name: solid/chevron-down -->
                <svg :class="{ 'transform rotate-180': open, 'mr-2': !open, 'ml-2': open }" class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10.293 7.293a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L10 9.414l-2.293 2.293a1 1 0 01-1.414-1.414l3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>

        <!-- Dropdown panel, show/hide based on dropdown state -->
        <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
            <div class="py-1" role="none">

                <!-- Iterate over years -->
                @foreach ($years as $year)
                <div role="none" x-data="{ openYear: false }">

                    <button @click="open = false; openYear = !openYear" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100">
                        <p class="block px-4 py-2 text-sm font-semibold text-gray-700">{{ $year }}</p>
                        <!-- Heroicon name: solid/chevron-down -->
                        <svg :class="{ 'transform rotate-180': openYear, 'mr-2': !openYear, 'ml-2': openYear }" class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10.293 7.293a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L10 9.414l-2.293 2.293a1 1 0 01-1.414-1.414l3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Dropdown items for each year -->
                    <div x-show="openYear" class="py-1" role="none">
                        @foreach ($coursesByYear[$year] as $course)
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">{{ $course->course_taught }}</a>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
