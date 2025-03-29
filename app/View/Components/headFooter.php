<?php

namespace App\View\Components;

use Illuminate\View\Component;

class headFooter extends Component
{
    public $text;

    public function __construct($text = 'Section Name')
    {
        $this->text = $text;
    }

    public function render()
    {
        return view('components.head-footer');
    }
}
