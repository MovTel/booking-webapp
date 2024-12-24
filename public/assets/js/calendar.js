const baseURL = window.location.origin;
const currentUrl = window.location.href;
const pathname = window.location.pathname;
const segments = pathname.split('/').filter(segment => segment);
const lastSegment = segments[segments.length - 1];
const params = new URLSearchParams(new URL(currentUrl).search);
const date = params.get('date');
var today = new Date();

const baseUrl = window.location.origin;
const apiUrl = baseUrl + '/api/bookings/' + lastSegment;
var bookings;

document.addEventListener('DOMContentLoaded', function () {
  var calendarEl = document.getElementById('calendar');
  today.setHours(0, 0, 0, 0);

  fetch(apiUrl)
    .then(response => {
      if (!response.ok) {
        throw new Error('Network response was not ok ' + response.statusText);
      }
      return response.json();
    })
    .then(data => {
      bookings = data.data;
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        validRange: {
          start: today
        },
        events: bookings,
        timeFormat: 'h:mm',
        eventDidMount: function (info) {

          const hoverModal = document.createElement('div');
          hoverModal.className = 'hover-modal';
          hoverModal.innerHTML = info.event.extendedProps.description || '';
          hoverModal.style.display = 'none';

          info.el.appendChild(hoverModal);

          info.el.addEventListener('mouseenter', () => {
            hoverModal.style.display = 'block';
            hoverModal.classList.add('active');
          });

          info.el.addEventListener('mouseleave', () => {
            hoverModal.style.display = 'none';
            hoverModal.classList.remove('active');
          });
        },
        dateClick: function (info) {
          var dateStr = info.dateStr;
          window.location.href = baseURL + '/booking/' + lastSegment + '?date=' + dateStr;
        },
      });
      calendar.render();
    })
    .catch(error => {
      console.error('There has been a problem with your fetch operation:', error);
    });
});