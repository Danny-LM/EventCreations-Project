<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NewEventCard extends Component
{
    public $icon;
    public $text;

    public function __construct($icon="lni lni-lineicons", $text="Card Text")
    {
        $this->icon = $icon;
        $this->text = $text;
    }

    public function render()
    {
        return view('components.new-event-card');
    }
}
