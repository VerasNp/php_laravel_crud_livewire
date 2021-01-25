<div class="flex, flex-col">
    <!-- Notification using flash message -->
    @if(session()->has('message'))
    <div class="w-auto py-4 px-4 mb-4 pointer-events-none bg-green-100">
        <p class="text-sm leading-5 font-medium text-green-700 text-2xl">
            {{ session()->get('message') }}
        </p>
    </div>
    @endif
    <div class="-my-2 py-2 overflow-x-auto sm:px-6 lg:-mx-8 lg:px-8">
        <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200 space-y-4">
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            #
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Nome
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Páginas
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Autor
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Ações
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @forelse($books as $book)
                    <!-- Its necessary to use an key when using livewire (Like Vue.js does) to avoid errors -->
                    <tr wire:key="{{ $book->id }}">
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            {{ $book->id }}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            {{ $book->name }}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            {{ $book->pages }}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            {{ $book->author }}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <a href="{{ route('books.edit', ['book' => $book->id]) }}" class="">
                                Editar
                            </a>
                            <a href="{{ route('books.show', ['book' => $book->id]) }}" class="">
                                Ver
                            </a>
                            <button wire:click="deleteBook('{{ $book->id }}')" onclick="return confirm('Do you really want to remove the book {{ $book->name }}') || event.stopImmediatePropagation()">
                                Apagar
                                </<button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            Nothing here srry :( ...
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $books->links() }}
        </div>
    </div>
</div>