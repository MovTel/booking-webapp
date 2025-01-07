@component('mail::message')

<h2 style="text-align: center;">YOU'VE GOT A NEW BOOKING!</h2>
<p>
    Name: {{ $name }}<br>
    Contact No: {{ $contact }}<br>
    Email: {{ $email }}<br>
    Unit: {{ $unit }}<br>
    Checkin Date: {{ $checkin }}<br>
    Checkout date: {{ $checkout }}<br>
    Guests: {{ $guests }}
</p>

@component('mail::button', ['url' => 'https://movietelle.com/schedules'])
    GO TO SCHEDULES
@endcomponent

@endcomponent