<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($project->name) }}
        </h2>
    </x-slot>


    <div class="flex items-center justify-center">
        <div class="w-full xs:w-full sm:w-full md:w-2/3 lg:w-1/3 xl:w-1/3 bg-white rounded-md mt-20 pb-8 px-4 shadow-lg flex flex-col">
            <p class="font-semibold text-2xl mt-3 left-0 text-center mb-5">Tasks</p>
            <div class="flex flex-col h-128">
                <div class="rounded shadow-md pl-3 pr-3 pt-2 border border-gray-400">
                    <x-task-form>
                        <x-slot name="project_id">
                            <input type="hidden" name="project_id" value="{{ $project->id }}">
                        </x-slot>
                    </x-task-form>


                </div>
        <div class="h-full overflow-auto">
                @foreach($project->tasks as $task)

                    <livewire:task-crud :task="$task" :project="$project"/>
                @endforeach
        </div>

            </div>
        </div>
    </div>

</x-app-layout>
