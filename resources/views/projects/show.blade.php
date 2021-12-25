<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($project->name) }}
        </h2>
    </x-slot>
    @foreach($project->tasks as $task)
        {{ $task->name }}
    @endforeach
</x-app-layout>
