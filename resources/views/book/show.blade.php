<x-app-layout>
    <!-- Here will be placed inside $header -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mostrando livro') }}
        </h2>
    </x-slot>

    <!-- Here will be placed inside $slot -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <!--  To the show part its not necessary to use livewire (only if this part has many interaction with user) -->
                    @livewire('book.show', ['book' => $book])
                </div>
            </div>
        </div>
    </div>
</x-app-layout>