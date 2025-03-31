<!-- No surplus words or unnecessary actions. - Marcus Aurelius -->

<div class="container">
    <div class="d-flex justify-content-center align-items-center my-3">
        <i class="fi fi-rr-angle-small-left mx-3" wire:click="previousMonth"></i>
        <span class="fs-4 fw-bold d-flex align-items-center">
            <div class="drowdown">
                <span class="selectable me-2 dropdown-toggle"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ \Carbon\Carbon::create((int) $year, (int) $month, 1)->translatedFormat('F') }}
                </span>
                <ul class="dropdown-menu">
                    @foreach(range(1,12) as $m)
                        <li>
                            <a href="#" class="dropdown-item" wire:click="setMonth({{ $m }})">
                                {{ \Carbon\Carbon::create(null, $m, 1)->translatedFormat('F') }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="dropdown">
                <span class="selectable dropdown-toggle"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ $year }}
                </span>
                <ul class="dropdown-menu">
                    @foreach(range($year-5, $year+5) as $y)
                        <li><a href="#" class="dropdown-item" wire:click="setYear({{ $y }})">
                            {{ $y }}
                        </a></li>
                    @endforeach
                </ul>
            </div>

        </span>
        <i class="fi fi-rr-angle-small-right mx-3" wire:click="nextMonth"></i>
    </div>

    <div class="calendar-grid">
        @foreach($days as $day)
            <div class="calendar-day {{ $day ? 'active-day' : 'inactive-day' }}">
                @if($day)
                    <span class="day-number">{{ $day }}</span>
                    <div class="events-container">
                        <!-- Here will be added the user events -->
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</div>