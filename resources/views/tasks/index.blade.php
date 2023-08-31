<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2">
                {{ __('Tasks') }}
            </h2>
            <x-button @click="openModale = true">add task</x-button>
            <x-button ><a href="{{ route('tasks.index', ['tri' => true]) }}" class="btn btn-primary">Sort by asc</a></x-button>
            {{-- 1er bouton pour le tri asc avec une route lié à la condition dans la fonction index  du TaskController --}}
            <x-button ><a href="{{ route('tasks.index', ['sort' => true]) }}" class="btn btn-primary">Sort by desc</a></x-button>
            {{-- 2eme bouton pour le tri desc --}}
        </div>
    </x-slot>

    <div class="sm:py-12 py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex sm:flex-row flex-col sm:gap-4 gap-6">
                <div class="sm:basis-1/3">
                    @include('_partials.column', ['status' => 'pending', 'color' => 'gray'])
                </div>
                <div class="sm:basis-1/3">
                    @include('_partials.column', ['status' => 'in_progress', 'color' => 'yellow'])
                </div>
                <div class="sm:basis-1/3">
                    @include('_partials.column', ['status' => 'completed', 'color' => 'green'])
                </div>
            </div>
        </div>
    </div>

    @include('_partials.modal')

</x-app-layout>
