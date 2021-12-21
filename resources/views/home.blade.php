<x-guest-layout>
    <x-auth-card>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <x-slot name="title"> Login </x-slot>
            <x-label for="email" class="mt-5">Email</x-label>
            <x-input type="email" name="email" required></x-input>
            <x-label for="password" class="mt-5">Password</x-label>
            <x-input type="password" name="password" required></x-input>
            <x-button class="mt-5"> Login! </x-button>
            <x-auth-validation-errors></x-auth-validation-errors>
        </form>
    </x-auth-card>
</x-guest-layout>
