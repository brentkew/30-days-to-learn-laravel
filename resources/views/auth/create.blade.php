<x-layout>

    <x-slot:subHeading>
        Register User
    </x-slot:subHeading>



    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                <x-form-field>
                    <x-form-label form="name">Name</x-form-label>
                    <div class="mt-2">
                        <x-form-input type="text" name="name" id="name" autocomplete="name" placeholder="Enter User name" required :value="old('name')"></x-form-input>
                    </div>
                    <x-form-error name="name" />
                </x-form-field>

                <x-form-field>
                    <x-form-label form="email">Email</x-form-label>
                    <div class="mt-2">
                        <x-form-input type="email" name="email" id="email" autocomplete="email" placeholder="Enter user email" required :value="old('email')"></x-form-input>
                    </div>
                    <x-form-error name="email" />
                </x-form-field>

                <x-form-field>
                    <x-form-label form="email">Password</x-form-label>
                    <div class="mt-2">
                        <x-form-input type="password" name="password" id="password" autocomplete="password" placeholder="Enter user password" required ></x-form-input>
                    </div>
                    <x-form-error name="password" />
                </x-form-field>

                <x-form-field>
                    <x-form-label form="password_confirmation">Confirm Password</x-form-label>
                    <div class="mt-2">
                        <x-form-input type="password" name="password_confirmation" id="password_confirmation" autocomplete="password_confirmation" placeholder="Enter user confirm password" required ></x-form-input>
                    </div>
                    <x-form-error name="password_confirmation" />
                </x-form-field>
            </div>

        </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-form-button>Register</x-form-button>
        </div>
    </form>



</x-layout>
