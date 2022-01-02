<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <x-button class="flex justify-center rounded-md mt-5 shadow-sm border border-2 border-gray-900 hover:bg-white hover:text-black focus:outline-none mx-auto"
              onclick="window.location.href='/projects/create'">
        New Project
    </x-button>

    <!-- Pagination -->
    <div x-data="{open: {{ \App\Models\Project::count() >= 10 ? 'true' : 'false'}}}">
        <div class="py-12"  x-show="open">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        {{ $projects->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Pagination -->

    <!-- Project Cards -->
    <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-20">
        @foreach($projects as $project)
            <div class="rounded overflow-hidden shadow-lg bg-white">

                <div class="flex">
                    <form method="POST" action="/projects/delete/{{ $project->slug }}" class="ml-auto mr-2 mt-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit"  class="ml-auto mr-2 mt-2">
                            <img src="{{ asset('images/delete-icon.png') }}" alt="delete-project" class="xxs:w-5 xs:w-5 sm:w-5 md:w-5 lg:w-5 xl:w-5">
                        </button>
                    </form>
                </div>
                <div class="px-10 py-10">
                    <a href="/projects/{{ $project->slug }}" class="font-bold text-xl mb-2 underline ">{{ $project->name }}</a>
                    <div>
                        <div class="text-gray-500 text-base font-bold text-lg">

                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
    <!-- End Project Cards -->


</x-app-layout>
