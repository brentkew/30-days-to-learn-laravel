<x-layout>

    <x-slot:subHeading>
        Job Create
    </x-slot:subHeading>



    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">New Job Details</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">This is my new sample job creation form.</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                <x-form-field>
                    <x-form-label form="title">Title</x-form-label>
                    <div class="mt-2">
                        <x-form-input type="text" name="title" id="title" autocomplete="title" placeholder="New Job" required :value="old('title')"></x-form-input>
                    </div>
                    <x-form-error name="title" />
                </x-form-field>

                <x-form-field>
                    <x-form-label form="salary">Salary</x-form-label>
                    <div class="mt-2">
                        <x-form-input type="text" name="salary" id="salary" autocomplete="salary" placeholder="Salary for Job" required ></x-form-input>
                    </div>
                    <x-form-error name="salary" />
                </x-form-field>

            </div>
            {{-- <ul>
                @if($errors->any())
                    @foreach ($errors->all() as $item)
                        <li class="text-red-500 italic">{{ $item }}</li>
                    @endforeach
                @endif
            </ul> --}}
        </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-form-button>Submit</x-form-button>
        </div>
    </form>



</x-layout>
