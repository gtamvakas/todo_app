<div>
    @if($task->name !== '')
    <div>
        <div class="flex mt-5 p-2 border border-gray-400 rounded-md">
            @if(!$task->done)
                <p class="break-all rounded mr-10">{{ $task->name }}</p>
            @else
                <p class="break-all rounded mr-10 text-gray-500 line-through">{{ $task->name }}</p>
            @endif
            <div class="ml-auto">
            <button class="mr-5" wire:click="completed">
                <img src="{{ asset('images/done-icon.png') }}" alt="delete" class="xs:w-4 sm:w-4 md:w-4 lg:w-4 xl:w-4">
            </button>
            <button wire:click="delete">
                <img src="{{ asset('images/delete-icon.png') }}" alt="delete" class="xs:w-4 sm:w-4 md:w-4 lg:w-4 xl:w-4">
            </button>
            </div>
        </div>

    </div>
@endif
</div>
