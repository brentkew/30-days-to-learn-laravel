<x-layout>
    <x-slot:subHeading>
        Job Details
    </x-slot:subHeading>

    {{-- Check if $job is set (for job details) --}}
    @if (isset($job))
        <div class="bg-white p-4 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold text-gray-800">{{ $job['title'] }}</h1>
            <p class="text-gray-600">Company: {{ $job['company'] }}</p>
            <p class="text-gray-600">Location: {{ $job['location'] }}</p>
            <p class="text-gray-600">Salary: {{ $job['salary'] }}</p>
            <p class="text-gray-600">Experience: {{ $job['experience'] }}</p>
            <p class="text-gray-600">Type: {{ $job['type'] }}</p>
            <p class="text-gray-600">Posted on: {{ $job['datePosted'] }}</p>
        </div>

        @can('edit', $job)
            <div class="pt-10">
                <x-nav-link href="/jobs/{{ $job['id'] }}/edit">Edit Job</x-nav-link>
            </div>
        @endcan

        @else
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h1 class="text-2xl font-bold text-gray-800">No matching jobs available</h1>
            </div>
    @endif

</x-layout>
