<x-layout>
    <x-slot:subHeading>
        Job Listing 
    </x-slot:subHeading>

    {{-- Jobs listing --}}
    <ul class="space-y-1 text-gray-500 list-decimal list-inside dark:text-gray-400">
        @foreach ($jobs as $item)
            <li class="bg-white p-4 rounded-lg shadow-md hover:bg-gray-50 transition duration-300">
                <a href="{{ url('/jobs/' . $item['id']) }}" class="flex justify-between items-center">
                    <div class="flex flex-col">
                        <span class="font-semibold text-gray-900">{{ $item['title'] }}</span>
                        <span class="text-gray-600">Location: {{ $item['location'] }}</span>
                    </div>
                    <div class="text-right">
                        <span class="block text-gray-800">{{ $item['salary'] }}</span>
                        <span class="block text-gray-500">{{ $item['experience'] }}</span>
                        <span class="block text-gray-500">{{ $item['company'] }}</span>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>
