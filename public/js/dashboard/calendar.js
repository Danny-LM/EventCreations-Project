
function calendarComponent() {
    return {
        year: new Date().getFullYear(),
        month: new Date().getMonth() + 1,
        days: [],
        months: [
            "January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ],
        get monthName() {
            return this.months[this.month - 1];
        },
        get yearRange() {
            return Array.from({ length: 11 }, (_, i) => this.year - 5 + i);
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
            this.generateDays();
        },
        previousMonth() {
            this.month--;
            if (this.month < 1) {
                this.month = 12;
                this.year--;
            }
            this.generateDays();
        },
        nextMonth() {
            this.month++;
            if (this.month > 12) {
                this.month = 1;
                this.year++;
            }
            this.generateDays();
        },
        init() {
            this.generateDays();
        }
    };
}
