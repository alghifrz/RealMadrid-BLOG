<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Cardreadnext extends Component
{
    /**
     * Create a new component instance.
     */
    public $img;
    public $name;
    public $date;
    public $title;
    public $desc;
    public function __construct($img, $name, $date, $title, $desc)
    {
        $this->img = $img;
        $this->name = $name;
        $this->date = $date;
        $this->title = $title;
        $this->desc = $desc;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cardreadnext');
    }
}
