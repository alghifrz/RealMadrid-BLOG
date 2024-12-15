<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Categoriesblog extends Component
{
    /**
     * Create a new component instance.
     */
    public $link;
    public $img;
    public $name;
    public function __construct($link, $img, $name)
    {
        $this->link = $link;
        $this->img = $img;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.categoriesblog');
    }
}
