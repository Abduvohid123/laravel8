<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $massiv;

    /**
     * Card constructor.
     * @param $name
     * @param array $massiv
     */
    public function __construct($name, array $massiv)
    {
        $this->name = $name;
        $this->massiv = $massiv;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
