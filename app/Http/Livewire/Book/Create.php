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

    /**
     * Make validation in real time
     */
    // public function updated($field)
    // {
    //     if ($field == "book.name") {
    //         $this->validate();
    //     }
    // }

    /**
     * Make validation in real time to each input
     */
    // public function updatedBookName()
    // {
    //     $this->validade();
    // }

    public function save()
    {
        /**
         * Check the property $rules
         */
        $this->validate();
        Book::create($this->book->toArray());
        return redirect()->route('books.index');
    }

    public function render()
    {
        return view('livewire.book.create');
    }
}
