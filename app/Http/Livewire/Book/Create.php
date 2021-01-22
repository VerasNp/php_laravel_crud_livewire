<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;
use App\Models\Book;

class Create extends Component
{
    /**
     * This property will be an Book type
     */
    public Book $book;

    /**
     * Its necessary to specify each validation of fillable!
     */
    protected $rules = [
        'book.name' => 'required',
        'book.pages' => 'required|integer',
        'book.author' => 'required|string',
    ];

    /**
     * To use $book its necessary to initialize this property 
     */
    public function mount()
    {
        $this->book = new Book();
    }

    public function save()
    {
        Book::create($this->book->toArray());
        return redirect()->route('books.index');
    }

    public function render()
    {
        return view('livewire.book.create');
    }
}
