<div>

    @if($task->name !== '')

        <div class="flex mt-5 p-2 border border-gray-400 rounded-md">
            @if(!$task->done)
                <p class="break-all rounded w-4/5">{{ $task->name }}</p>
            @else
                <p class="break-all rounded w-4/5 text-gray-500 line-through">{{ $task->name }}</p>
            @endif
            <div class="flex ml-auto" >
                <div class="mr-5 shrink-0 mt-1" x-data="{open:true}">
                    <button  wire:click="done"  x-show="open" @click="open = false">
                        <img src="{{ asset('images/done-icon.png') }}" alt="done" class="xs:w-5 sm:w-5 md:w-5 lg:w-5 xl:w-5">
                    </button>
                    <button  wire:click="undone"  x-show="!open" @click="open = true">
                        <img src="{{ asset('images/undo-icon.png') }}" alt="done" class="xs:w-5 sm:w-5 md:w-5 lg:w-5 xl:w-5">
                    </button>
                </div>
                <button class="shrink-0" wire:click="delete">
                    <img src="{{ asset('images/delete-icon.png') }}" alt="delete" class="xs:w-4 sm:w-4 md:w-4 lg:w-4 xl:w-4">
                </button>
            </div>

        </div>
    @endif

</div>
