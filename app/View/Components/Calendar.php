<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Carbon\Carbon;

class calendar extends Component
{
    public $year;
    public $month;
    public $days;
    public $events;

    public function __construct($month= null, $year= null)
    {
        $this->year= (int) ($year ?? now()->year);
        $this->month= (int) ($month ?? now()->month);
        $this->days= $this->generateDays();
        $this->events= [];
    }

    private function generateDays()
    {
        $carbon= Carbon::create($this->year, $this->month, 1);
        $daysInMonth= $carbon->daysInMonth;
        $startDayOfWeek= $carbon->dayOfWeek;
        
        $days= [];
        for ($i= 0; $i <= $startDayOfWeek; $i++) {
            $days[]= null;
        }
        for ($i= 1; $i <= $daysInMonth; $i++) {
            $days[]= $i;
        }

        return $days;
    }

    public function setMonth($month)
    {
        $this->month= $month;
        $this->days= $this->generateDays();
    }

    public function setYear($year)
    {
        $this->year= $year;
        $this->days= $this->generateDays();
    }

    public function render()
    {
        return view('components.calendar', [
            'year' => $this->year,
            'month' => $this->month,
            'days' => $this->days
        ]);
    }
}
