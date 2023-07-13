
// class inheritance:
// div calendar
//      ul month
//          li month-prev
//          li month-name
//          li month-next
//      div view
//          ul weekdays
//              li * 7
//          ul days
//              (li prev)
//              li * daysCount
//              (li next)
//

// Сдвигаем дни по следующей логике FOR Date(y, m).getDay() => [0..6];
const offset = [6, 0, 1, 2, 3, 4, 5];

// day: 0 => 32 - 6     Sun
// day: 1 => 32 - 0     Mon
// day: 2 => 32 - 1     Tue
// day: 3 => 32 - 2     Wed
// day: 4 => 32 - 3     Thu
// day: 5 => 32 - 4     Fri
// day: 6 => 32 - 5     Sat

const defaultLocale = 'uk-UK'; // вставнолюємо українську локалізацію
const defaultType = 'long';


class Calendar { 
    constructor(element, locale = defaultLocale) {

        this.element = this.getCalendarItem(element);
        this.locale = locale;

        this.today = new Date();
        this.month = this.today.getMonth();
        this.year = this.today.getFullYear();

        this.weekdays = getWeekdays(this.locale);

        this.firstDayOfMonth = (m = this.month, y = this.year) => {
            return offset[new Date(y, m, 1).getDay()];
        }

        this.lastDateOfMonth = (m = this.month, y = this.year) => {
            return new Date(y, m + 1, 0).getDate();
        }

        this.lastDayOfMonth = (m = this.month, y = this.year) => {
            return new Date(y, m, this.lastDateOfMonth(m, y)).getDay();
        }

        this.lastDateOfPrevMonth = (m = this.month, y = this.year) => {
            return new Date(y, m, 0).getDate();
        }
    }

    monthName = (month = this.month) => {
       return new Date(0, month).toLocaleString(this.locale, {month: defaultType});
    }

    init() {
        this.generateHTML();

        this.render();
    }


    render() {

        let HTML = "";
        
        let monthName = this.element.querySelector('.month-name');
        let days = this.element.querySelector('.days');
        let buttons = this.element.querySelectorAll('.month-btn');

        monthName.innerHTML = `${this.monthName()} ${ this.year }`;

        // console.log("First day of " + this.monthName() + " is " + this.firstDayOfMonth());
        // console.log("Last date of " + this.monthName() + " is " + this.lastDateOfMonth());
        // console.log("Last day of " + this.monthName() + " is " + this.lastDayOfMonth());
        // console.log("Last date of prev to " + this.monthName() + " is " + this.lastDateOfPrevMonth());

        for(let i = this.firstDayOfMonth(); i > 0 ; i--) {
            if(this.month - 1 < 0) {
                HTML += `<li class="prev" data-value="${(this.year - 1) + '/' + '12' + '/' + (this.lastDateOfPrevMonth() - i + 1)}">${this.lastDateOfPrevMonth() - i + 1}</li>`;
            } else {
                HTML += `<li class="prev" data-value="${this.year + '/' + (this.month) + '/' + (this.lastDateOfPrevMonth() - i + 1)}">${this.lastDateOfPrevMonth() - i + 1}</li>`;
            }
           
        }   

        for(let i = 1; i <= this.lastDateOfMonth(); i++) {
            let isToday = (i === this.today.getDate() && 
                this.month === new Date().getMonth() &&
                this.year === new Date().getFullYear() ) ? 'today' : '';

            HTML += `<li class="${isToday}" data-value="${this.year + '/' + (this.month + 1) + '/' + i}">${i}</li>`;
        }


        for(let i = this.lastDayOfMonth(); i < 7; i++) {
            if(this.month + 1 > 11) {
                HTML += `<li class="next" data-value="${(this.year + 1) + '/' + '1' + '/' + (i - this.lastDayOfMonth() + 1)}">${i - this.lastDayOfMonth() + 1}</li>`
            } else {
                HTML += `<li class="next" data-value="${(this.year) + '/' + (this.month + 2) + '/' + (i - this.lastDayOfMonth() + 1)}">${i - this.lastDayOfMonth() + 1}</li>`
            }
        }


        buttons.forEach(btn => {
            btn.onclick = e => {
                e.preventDefault();
                this.month = (btn.dataset.action === 'prev') ? this.month - 1 : this.month + 1;

                if(this.month < 0 || this.month > 11) {
                    this.today = new Date(this.year, this.month, new Date().getDate());
                    this.year = this.today.getFullYear();
                    this.month = this.today.getMonth();
                } else {
                    this.today = new Date();
                }

                this.render();
            }
        });

        days.innerHTML = HTML;
    }


    getCalendarItem(element) {
        return (element instanceof Element || element instanceof Document) ?
            element : Error("Not an element provided!");  
    }

    generateHTML() {
        try {
            let d = this.element.ownerDocument;
    
            const month = d.createElement('ul');
            month.className = 'month';
            this.element.appendChild(month);

            const monthName = d.createElement("li");
            monthName.className = 'month-name';
            month.appendChild(monthName);
    
            const prevBtn = d.createElement('li');
            prevBtn.className = 'month-btn';
            prevBtn.innerHTML = "&#10094;";
            prevBtn.dataset.action = 'prev';
            month.appendChild(prevBtn);

            const nextBtn = d.createElement('li');
            nextBtn.className = 'month-btn';
            nextBtn.innerHTML = "&#10095;";
            nextBtn.dataset.action = 'next';
            month.appendChild(nextBtn);

    
            const viewport = d.createElement('div');
            viewport.className = 'view';
            this.element.appendChild(viewport);
    
            const wd = d.createElement('ul');
            wd.className = 'weekdays';
            viewport.appendChild(wd);
    
            for(let i = 0; i < this.weekdays.length; i++) {
                let weekday = d.createElement("li");
                weekday.innerHTML = this.weekdays[i];
                wd.appendChild(weekday);
            }

            const days = d.createElement('ul');
            days.className = 'days';
            viewport.appendChild(days);
    
        } catch (e) {
            console.error(e);
        }
    }
}



const getWeekdays = (locale) => {
    let baseDate = new Date(Date.UTC(2023, 0, 2)); // Monday
        let daysNames = [];

        for(let i = 0; i < 7; i++) {
            daysNames.push(baseDate.toLocaleDateString(locale, { weekday: "short" }));
            baseDate.setDate(baseDate.getDate() + 1);
        }
        return daysNames;
}

 