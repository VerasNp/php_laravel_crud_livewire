<div>
    <form wire:submit.prevent="save" class="w-full">
        <div class="w-full px-3 mb-6 md:mb-0">
            <label for="name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                Nome
            </label>
            <!-- Using book. informs that book will be a array -->
            <input wire:model="book.name" type="text" class="appearance-none block w-full bg-gray-100 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="name">
            @if($errors->has('book.name'))
            <p class="text-red-500 text-xs italic">
                {{$errors->first('book.name')}}
            </p>
            @endif
        </div>
        <div class="w-full px-3 mb-6 md:mb-0">
            <label for="pages" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                Pages number
            </label>
            <!-- Using book. informs that book will be a array -->
            <input wire:model="book.pages" type="number" class="appearance-none block w-full bg-gray-100 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="pages">
            @if($errors->has('book.pages'))
            <p class="text-red-500 text-xs italic">
                {{$errors->first('book.pages')}}
            </p>
            @endif
        </div>
        <div class="w-full px-3 mb-6 md:mb-0">
            <label for="author" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                Author
            </label>
            <!-- Using book. informs that book will be a array -->
            <input wire:model="book.author" type="text" class="appearance-none block w-full bg-gray-100 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="author">
            @if($errors->has('book.author'))
            <p class="text-red-500 text-xs italic">
                {{$errors->first('book.author')}}
            </p>
            @endif
        </div>
        <button type="submit">Register</button>
    </form>
</div>