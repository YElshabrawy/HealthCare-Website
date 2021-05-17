document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
          },
          themeSystem: 'bootstrap',
          eventColor: '#e6455a',
          height: 730,
          initialDate: Date.now(),
          navLinks: true, // can click day/week names to navigate views
          editable: true,
          selectable: true,
          nowIndicator: true,
          dayMaxEvents: true, // allow "more" link when too many events
            events: [
            {
              title: 'Appointment With Ahmed',
              start: '2021-05-17'
            },
            {
              title: 'Surgery #212',
              start: '2021-05-18',
              end: '2021-05-20'
            },
            {
              groupId: 999,
              title: 'Repeating Event',
              start: '2021-05-25T16:00:00'
            },
            {
              groupId: 999,
              title: 'Repeating Event',
              start: '2021-05-25T17:00:00'
            },
            {
              title: 'Appointment With Menna',
              start: '2021-05-11T10:30:00',
              end: '2021-05-11T12:30:00'
            },
            {
              title: 'Click for Google',
              url: 'http://google.com/',
              start: '2020-09-28'
            }
          ],
          initialView: 'dayGridMonth'
        });
        calendar.render();
      });