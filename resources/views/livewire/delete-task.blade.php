<div>
    @if($name !== '')
    <div id="task-row">
        <div class="flex mt-5 p-2 border border-gray-400 rounded-md">
            <p class="break-all rounded mr-10">{{ $name }}</p>
            <button wire:click="delete" class="ml-auto" onclick="t()">
                <img src="{{ asset('images/delete-icon.png') }}" alt="delete" class="xs:w-4 sm:w-4 md:w-4 lg:w-4 xl:w-4">
            </button>
        </div>

    </div>
@endif

</div>

