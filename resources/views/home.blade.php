<x-guest-layout>
    <x-auth-card>
        <form method="POST" action="/login">
            @csrf
            <p class="text-center mb-10 text-2xl"> Login </p>
            <x-slot name="logo"> <img src='{{ asset('/images/logo_black.png') }}'  class="w-48 md:w-45 lg:w-48" alt="logo"> </x-slot>
            <x-label for="email" class="mt-5">Email</x-label>
            <x-input type="email" class="block w-full" name="email" required value="{{ old('email') }}"></x-input>
            <x-label for="password" class="mt-5">Password</x-label>
            <x-input type="password" class="block w-full" name="password" required></x-input>
            <x-button class="mt-5"> LOGIN </x-button>
            <div class="flex items-center justify-end mt-4">
            <a href="/register" class="underline" >Don't have an account?</a>
            </div>
            <x-auth-validation-errors></x-auth-validation-errors>
        </form>
    </x-auth-card>

</x-guest-layout>
