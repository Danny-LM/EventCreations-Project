<?php

namespace App\View\Components;

use Illuminate\View\Component;

class eventCard extends Component
{
    public $title;
    public $date;
    public $type;
    public $theme;

    public function __construct( $title="Event Title", $date="00/00/00", $type="Bithday", $theme="Celebrities")
    {
        $this->title = $title;
        $this->date = $date;
        $this->type = $type;
        $this->theme = $theme;
    }

    public function render()
    {
        return view('components.event-card');
    }
}
