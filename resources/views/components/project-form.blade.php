<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-2xl overflow-hidden sm:rounded-lg">
<form method="POST" action="/projects/create">
    @csrf
    <p class="text-center mb-10 text-2xl"> New Project </p>
    <x-label for="name" class="mb-5">
        Project Name
    </x-label>
    <x-input type="text" name="name" class="block w-full"></x-input>
    <x-button class="mt-5">Create Project</x-button>
    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</form>
    </div>
</div>
