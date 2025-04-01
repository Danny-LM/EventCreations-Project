<!-- No surplus words or unnecessary actions. - Marcus Aurelius -->

<div x-data="calendarComponent()" class="container">
    <div class="d-flex justify-content-center align-items-center my-3">
        <!-- Left Arrow -->
        <i class="fi fi-rr-angle-small-left mx-3 clickable-icon" @click="previousMonth()"></i>

        <span class="fs-4 fw-bold d-flex align-items-center calendar-header">
            <!-- Month Dropdown -->
            <div class="drowdown me-2">
                <span class="selectable dropdown-toggle" data-bs-toggle="dropdown">
                    <span x-text="monthName"></span>
                </span>
                <ul class="dropdown-menu">
                    <template x-for="(m, index) in months" :key="index">
                        <li>
                            <a href="#" class="dropdown-item" @click="setMonth(index + 1)">
                                <span x-text="m"></span>
                            </a>
                        </li>
                    </template>
                </ul>
            </div>

            <!-- Year Dropdown -->
            <div class="dropdown">
                <span class="selectable dropdown-toggle" data-bs-toggle="dropdown">
                    <span x-text="year"></span>
                </span>
                <ul class="dropdown-menu">
                    <template x-for="(y) in yearRange">
                        <li>
                            <a href="#" class="dropdown-item" @click="setYear(y)">
                                <span x-text="y"></span>
                            </a>
                        </li>
                    </template>
                </ul>
            </div>

        </span>

        <!-- Right Arrow -->
        <i class="fi fi-rr-angle-small-right mx-3 clickable-icon" @click="nextMonth()"></i>
    </div>

    <div class="calendar-grid">
        <template x-for="day in days">
            <div class="calendar-day" :class="{ 'active-day': day !== null, 'inactive-day': day === null }">
                <span x-text="day !== null ? day : ''"></span>
            </div>
        </template>
    </div>
</div>

<script src="{{ asset('js/dashboard/calendar.js') }}"></script>
