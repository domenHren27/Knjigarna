<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Select extends Component
{
    public $selected;

    // public $name;
    /**
     * Create a new component instance.
     
     *
     * @return void
     */
    public function __construct($selected = "")
    {
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.select');
    }
}
