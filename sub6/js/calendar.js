
    var calendarEl = document.getElementById('calendar');

    var dt = new Date();
    var dYear = dt.getFullYear();
    var dMonth = dt.getMonth()+1;
    var dDay = dt.getDate();
    var dDate = dYear + '-' + dMonth + '-' +dDay;

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prevYear,prev,next,nextYear today',
        center: 'title',
        right: 'dayGridMonth,dayGridWeek,dayGridDay'
      },
      initialDate: dDate,
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: [
        {
          title: '코로나바이러스-19로 인한 장기휴관',
          start: '2020-04-04',
          end: '2022-03-01'
        }
      ]
    });

    calendar.render();
