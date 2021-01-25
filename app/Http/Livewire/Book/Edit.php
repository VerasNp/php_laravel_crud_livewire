<?php

namespace App\Http\Livewire\Book;

use App\Models\Book;
use Livewire\Component;

class Edit extends Component
{
    public Book $book;

    protected $rules = [
        'book.name' => 'required',
        'book.pages' => 'required|integer',
        'book.author' => 'required|string',
    ];

    public function mount(Book $book)
    {
        $this->book = $book;
    }

    public function save()
    {
        /**
         * Check the property $rules
         */
        $this->validate();
        $this->book->update($this->book->toArray());
        /**
         * These flash message will be available only on this request
         */
        session()->flash('message', 'Updated with success!');
        return redirect()->route('books.index');
    }

    public function render()
    {
        return view('livewire.book.edit');
    }
}
