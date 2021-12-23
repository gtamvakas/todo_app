{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--            @csrf--}}

{{--            <!-- Name -->--}}
{{--            <div>--}}
{{--                <x-label for="name" :value="__('Name')" />--}}

{{--                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Email Address -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password"--}}
{{--                                required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <!-- Confirm Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--                <x-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password_confirmation" required />--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--                </a>--}}

{{--                <x-button class="ml-4">--}}
{{--                    {{ __('Register') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}
<x-guest-layout>
    <x-auth-card>
        <form method="POST" action="/register">
            @csrf
            <p class="text-center mb-10 text-2xl"> Register </p>
            <x-slot name="logo"> <img src='{{ asset('/images/logo_black.png') }}'  class="w-48 md:w-45 lg:w-48" alt="logo"> </x-slot>
            <x-label for="name" class="mt-5">Name</x-label>
            <x-input type="text" class="block w-full" name="name" required  value="{{ old('name') }}"></x-input>
            <x-label for="email" class="mt-5">Email</x-label>
            <x-input type="email" class="block w-full" name="email" required value="{{ old('email') }}"></x-input>
            <x-label for="password" class="mt-5">Password</x-label>
            <x-input type="password" class="block w-full" name="password" required ></x-input>
            <x-label for="password_confirmation" class="mt-5">Confirm Password</x-label>
            <x-input id="password_confirmation" class="block w-full" type="password" name="password_confirmation" required size="35"></x-input>
            <x-button class="mt-5"> REGISTER </x-button>

            <div class="flex items-center justify-end mt-4">
                <a  class="underline" href="/">
                    Already Registered?
                </a>
            </div>
                <x-auth-validation-errors></x-auth-validation-errors>
        </form>
    </x-auth-card>

</x-guest-layout>
