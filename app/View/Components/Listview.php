<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Listview extends Component
{
    /**
     * Create a new component instance.
     */
    public $img;
    public $comp;
    public $title;
    public $detail;

    public function __construct($img, $comp, $title, $detail)
    {
        $this->img = $img;
        $this->comp = $comp;
        $this->title = $title;
        $this->detail = $detail;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.listview');
    }
}
