<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Cardcategory extends Component
{
    public $link;
    public $image;
    public $title;
    public $detail;
    public function __construct($link, $image = 'img/ucl.jpg', $title = 'UEFA Champions League', $detail = 'Real Madrid')
    {
        $this->link = $link;
        $this->image = $image;
        $this->title = $title;
        $this->detail = $detail;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cardcategory');
    }
}
