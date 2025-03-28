<?php

namespace App\View\Components;

use Illuminate\View\Component;

class newElementCard extends Component
{
    public $icon;
    public $text;

    public function __construct($icon="lni lni-plus", $text="Card Text")
    {
        $this->icon = $icon;
        $this->text = $text;
    }

    public function render()
    {
        return view('components.new-element-card');
    }
}
