<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BookCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $id,
        public string $judul,
        public string $pengarang,
        public ?string $cover = null
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.book-card');
    }
}
