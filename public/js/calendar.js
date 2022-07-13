document.addEventListener('DOMContentLoaded', function () {

    let calendarEl = document.getElementById('calendar');
    let calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'es',
        headerToolbar: {
            left: 'title',
            right: 'prev,next,today'
        },
        height: 630
    });
    calendar.render();
});