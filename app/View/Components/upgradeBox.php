<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class upgradeBox extends Component
{

    public $title;
    public $text;

    /**
     * Create a new component instance.
     */
    public function __construct($text, $title)
    {
        $this->title = $title;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.upgrade-box');
    }

}
