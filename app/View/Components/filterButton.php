<?php

namespace App\View\Components;

use Illuminate\View\Component;

class filterButton extends Component
{
    public $modalId;
    public $icon;

    public function __construct($modalId="baseModal", $icon="fi fi-rr-square-small")
    {
        $this->modalId = $modalId;
        $this->icon = $icon;
    }

    public function render()
    {
        return view('components.buttons.bar-button');
    }
}
