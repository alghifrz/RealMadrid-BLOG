<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Orang extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $ket;
    public function __construct($name, $ket)
    {
        $this->name = $name;
        $this->ket = $ket;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.orang');
    }
}
