// const baseURL = window.location.origin;
// const currentUrl = window.location.href;
// const pathname = window.location.pathname;
// const segments = pathname.split('/').filter(segment => segment);
// const lastSegment = segments[segments.length - 1];
// const params = new URLSearchParams(new URL(currentUrl).search);
// const date = params.get('date');

// document.addEventListener('DOMContentLoaded', function () {
//   var calendarEl = document.getElementById('calendar');
//   var calendar = new FullCalendar.Calendar(calendarEl, {
//     initialView: 'dayGridMonth',
//     dayCellDidMount: function (info) {
//       if (info.dateStr === '2024-10-24') {
//         info.el.classList.add('marked-date');
//       }
//     },
//     dateClick: function (info) {
//       var dateStr = info.dateStr;
//       window.location.href = baseURL + '/booking/' + lastSegment + '?date=' + dateStr;
//     },
//   });
//   calendar.render();
// });

const baseURL = window.location.origin;
const currentUrl = window.location.href;
const pathname = window.location.pathname;
const segments = pathname.split('/').filter(segment => segment);
const lastSegment = segments[segments.length - 1];
const params = new URLSearchParams(new URL(currentUrl).search);
const date = params.get('date');

document.addEventListener('DOMContentLoaded', function () {
  var calendarEl = document.getElementById('calendar');
  var today = new Date();
  today.setHours(0, 0, 0, 0);

  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    validRange: {
      start: today
    },
    dayCellDidMount: function (info) {
      if (info.dateStr === '2024-10-24') {
        info.el.classList.add('marked-date');
      }
    },
    dateClick: function (info) {
      var dateStr = info.dateStr;
      window.location.href = baseURL + '/booking/' + lastSegment + '?date=' + dateStr;
    },
  });
  calendar.render();
});