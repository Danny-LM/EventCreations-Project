function calendarComponent() {
    return {
        year: new Date().getFullYear(),
        month: new Date().getMonth() + 1,
        days: [],
        months: [
            "January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ],
        yearRange: [],
        get monthName() {
            return this.months[this.month - 1];
        },
        generateYearRange() {
            this.yearRange = Array.from({ length: 11 }, (_, i) => this.year - 5 + i);
        },
        generateDays() {
            let firstDay = new Date(this.year, this.month - 1, 1).getDay();
            let daysInMonth = new Date(this.year, this.month, 0).getDate();
            this.days = [...Array(firstDay).fill(null), ...Array.from({ length: daysInMonth }, (_, i) => i + 1)];
        },
        setMonth(month) {
            this.month = month;
            this.generateDays();
        },
        setYear(year) {
            this.year = year;
            this.generateYearRange();
            this.generateDays();
        },
        previousMonth() {
            this.month--;
            if (this.month < 1) {
                this.month = 12;
                this.year--;
            }
            this.generateYearRange();
            this.generateDays();
        },
        nextMonth() {
            this.month++;
            if (this.month > 12) {
                this.month = 1;
                this.year++;
            }
            this.generateYearRange();
            this.generateDays();
        },
        init() {
            console.log("Calendar Initialized", this);
            this.generateYearRange();
            this.generateDays();
            console.log("Year Range:", this.yearRange);
            console.log("Current Year:", this.year); 
        }
    };
}
