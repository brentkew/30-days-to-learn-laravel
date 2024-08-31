<x-layout>

    <x-slot:subHeading>
        Login
    </x-slot:subHeading>



    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <x-form-field>
                    <x-form-label form="email">Email</x-form-label>
                    <div class="mt-2">
                        <x-form-input type="email" name="email" id="email" autocomplete="email" placeholder="Enter user email" required ></x-form-input>
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
            </div>
        </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-form-button>Login</x-form-button>
        </div>
    </form>



</x-layout>
