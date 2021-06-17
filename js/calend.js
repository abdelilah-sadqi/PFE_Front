document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      initialDate: new Date(),
      navLinks: true, // can click day/week names to navigate views
      businessHours: true, // display business hours
      editable: true,
      selectable: true,
      locale : 'fr',
      buttonText:{
        today:"aujourdh'ui",
        month :"mois",
        week :"semaine",
        day : "jour",
        list : "liste" ,

      },
      events: [
        {
          title: 'M.alami',
          start: '2021-06-03T15:00:00',
          end: '2021-06-03T16:00:00',
          
        },
        {
          title: 'Mme chegdali',
          start: '2021-06-03T17:00:00',
          end: '2021-06-03T18:00:00',
          color: '#257e4a'
        },
        {
          title: 'M.najib',
          start: '2021-06-05T15:15:00',
          end: '2021-06-05T16:15:00',
        },
        {
          title: 'Séance foyer',
          start: '2021-06-09T17:00:00',
          end: '2021-06-09T18:30:00',
        },

        // areas where "Meeting" must be dropped
        {
          groupId: 'availableForMeeting',
          start: '2020-09-11T10:00:00',
          end: '2020-09-11T16:00:00',
          display: 'background'
        },
        {
          groupId: 'availableForMeeting',
          start: '2020-09-13T10:00:00',
          end: '2020-09-13T16:00:00',
          display: 'background'
        },

        // red areas where no events can be dropped
        {
          start: '2020-09-24',
          end: '2020-09-28',
          overlap: false,
          display: 'background',
          color: '#ff9f89'
        },
        {
          start: '2020-09-06',
          end: '2020-09-08',
          overlap: false,
          display: 'background',
          color: '#ff9f89'
        }
      ]
    });

    calendar.render();
  });