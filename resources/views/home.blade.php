<x-guest-layout>
    <x-auth-card>
        <form method="POST" action="/login">
            @csrf
            <p class="text-center mb-10 text-2xl"> Login </p>
            <x-slot name="logo"> <img src='{{ asset('/images/logo_black.png') }}'  class="w-16 md:w-32 lg:w-48" alt="logo"> </x-slot>
            <x-label for="email" class="mt-5">Email</x-label>
            <x-input type="email" name="email" required size="35" value="{{ old('email') }}"></x-input>
            <x-label for="password" class="mt-5">Password</x-label>
            <x-input type="password" name="password" required size="35"></x-input>
            <x-button class="mt-5"> Login! </x-button>
            <x-auth-validation-errors></x-auth-validation-errors>
        </form>
    </x-auth-card>
</x-guest-layout>
