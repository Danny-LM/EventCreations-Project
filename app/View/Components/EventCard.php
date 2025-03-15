<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EventCard extends Component
{
    public $event_image;
    public $event_date;
    public $event_title;
    public $event_description;

    public function __construct($event_image="https://placehold.jp/300x150.png",$event_date="DD-MM-YYYY",$event_title="Card Title",$event_description="Here the card description")
    {
        $this->event_image = $event_image;
        $this->event_date = $event_date;
        $this->event_title = $event_title;
        $this->event_description = $event_description;
    }

    public function render()
    {
        return view('components.event-card');
    }
}
