<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HeadCard extends Component
{
    public $icon;
    public $text;
    public $link;

    public function __construct($icon = 'lni lni-lineicons', $text = 'Your Text', $link = '#')
    {
        $this->icon = $icon;
        $this->text = $text;
        $this->link = $link;
    }

    public function render()
    {
        return view('components.head-card');
    }
}
