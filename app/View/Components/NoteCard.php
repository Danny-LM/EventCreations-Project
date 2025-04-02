<?php

namespace App\View\Components;

use Illuminate\View\Component;

class noteCard extends Component
{
    public $title;
    public $description;
    public $day;
    public $month;

    public function __construct(
        $title="Note Name",
        $description="This is only an example about some note that you can have here.",
        $month="MM",
        $day="DD"
        )
    {
        //
        $this->title = $title;
        $this->description = $description;
        $this->month = $month;
        $this->day = $day;
    }

    public function render()
    {
        return view('components.cards.note-card');
    }
}
