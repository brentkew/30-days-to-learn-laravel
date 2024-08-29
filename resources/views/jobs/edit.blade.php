<x-layout>

    <x-slot:subHeading>
        Update Job: {{ $job->title }}
    </x-slot:subHeading>



    <form method="POST" action="/jobs/{{$job->id}}">

        @method("PATCH")
        @csrf

        <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input value="{{$job->title}}" type="text" name="title" id="title" autocomplete="title" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="New Job" required>
                        </div>
                    </div>
                    @error('title')
                        <p class="text-red-500 text-xs font-semibold mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="sm:col-span-4">
                    <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input value="{{$job->salary}}" type="text" name="salary" id="salary" autocomplete="salary" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="salary" required>
                        </div>
                    </div>
                    @error('salary')
                        <p class="text-red-500 text-xs font-semibold mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        </div>


        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div>
                <button form="delete-form" type="submit" class="text-red-500 text-sm font-bold">Delete</button>
            </div>
            <div class="flex items-center gap-x-6">
                <a href="/jobs/{{$job['id']}}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <div class="">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Update</button>
                </div>
            </div>
        </div>
    </form>


    <form id="delete-form" method="POST" action="/jobs/{{$job->id}}" class="hidden">
        @csrf
        @method('delete')

    </form>



</x-layout>
