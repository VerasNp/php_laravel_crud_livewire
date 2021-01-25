<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Book;

class Index extends Component
{
    /**
     * The advantage is that with this trait the window do not need to be reloaded.
     */
    use WithPagination;

    public function deleteBook($id)
    {
        Book::whereId($id)->first()->delete();
    }

    public function render()
    {
        return view('livewire.book.index', ['books' => Book::paginate()]);
    }
}
