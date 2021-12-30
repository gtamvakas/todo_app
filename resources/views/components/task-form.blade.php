
        <form method="POST" action="/tasks/create">
            @csrf
            {{ $project_id }}
            <x-label for="name" class="mb-1">
                Task Name
            </x-label>
            <x-input type="text" name="name" class="block w-full" required autofocus placeholder="Maximum 255 characters"></x-input>
            <x-button class="mt-5">Add Task</x-button>
            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </form>
