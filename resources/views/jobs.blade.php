<x-layout>
    <x-slot:subHeading>
        Job Listing
    </x-slot:subHeading>

    {{-- Jobs listing --}}
    <ul class="space-y-1 text-gray-500 list-inside dark:text-gray-400">
        @foreach ($jobs as $job)
            <li class="bg-white p-4 rounded-lg shadow-md hover:bg-gray-50 transition duration-300">
                <div class="flex flex-col">
                    <a href="{{ url('/jobs/' . $job['id']) }}" class="flex justify-between items-center">
                        <span class="font-semibold text-gray-900">{{ $job['title'] }}</span>
                    </a>
                    <span class="text-gray-600">Location: {{ $job['location'] }}</span>

                    <span class="text-blue-600 pt-2">
                        <a href="{{ url('employer/'.$job->employer->id) }}">{{ $job->employer->name }}</a>
                    </span>
                </div>
                <div class="text-right">
                    <span class="block text-gray-800">{{ $job['salary'] }}</span>
                    <span class="block text-gray-500">{{ $job['experience'] }}</span>
                    <span class="block text-gray-500">{{ $job['company'] }}</span>
                </div>
            </li>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>

    </ul>

</x-layout>
