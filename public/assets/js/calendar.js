const baseURL = window.location.origin;
const currentUrl = window.location.href;
const pathname = window.location.pathname;
const segments = pathname.split('/').filter(segment => segment);
const lastSegment = segments[segments.length - 1];
const params = new URLSearchParams(new URL(currentUrl).search);
const date = params.get('date');
var today = new Date();

const baseUrl = window.location.origin;
const bookingUrl = baseUrl + '/api/bookings/' + lastSegment;
const calculateUrl = baseUrl + '/api/calculate/' + lastSegment;
var bookings;

document.addEventListener('DOMContentLoaded', function () {
  var calendarEl = document.getElementById('calendar');
  today.setHours(0, 0, 0, 0);

  fetch(bookingUrl)
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
        // validRange: {
        //   start: today
        // },
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

async function fetchDataFromUrlParams(apiBaseUrl) {
  try {
      const currentUrl = new URL(window.location.href);
      const params = new URLSearchParams(currentUrl.search);

      const apiUrl = new URL(apiBaseUrl);
      params.forEach((value, key) => apiUrl.searchParams.append(key, value));

      const response = await fetch(apiUrl.toString(), {
          method: 'GET',
          headers: {
              'Content-Type': 'application/json',
          },
      });

      if (!response.ok) {
          throw new Error(`HTTP error! Status: ${response.status}`);
      }

      const data = await response.json();
      const details = data.data;

      document.getElementById('checkin_value').innerText = details.checkin;
      document.getElementById('checkout_value').innerText = details.checkout;
      document.getElementById('total_hours_value').innerText = details.total_hours;
      document.getElementById('per_hour_value').innerText = details.per_hour;
      document.getElementById('booking_fee_value').innerText = details.booking_fee;
      document.getElementById('cost_value').innerText = details.cost;
  } catch (error) {
      console.error('Error fetching data:', error);
  }
}

document.getElementById('checkout_date').addEventListener('change', (e) => {
  const checkin_date = document.getElementById('checkin_date').value;
  const checkout_date = e.target.value;
  const checkin_time = document.querySelector('input[name="checkin_time"]:checked').value;
  const checkout_time = document.querySelector('input[name="checkout_time"]:checked').value;

  const apiUrl = `${calculateUrl}?checkin_date=${checkin_date}&checkout_date=${checkout_date}&checkin_time=${checkin_time}&checkout_time=${checkout_time}`;
  fetchDataFromUrlParams(apiUrl);
});
