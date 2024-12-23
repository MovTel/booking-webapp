@include('webapp.partials.header', ['title' => 'Booking Records'])
<x-navigation />
<x-sidebar />

<div class="wt-admin-right-page-header clearfix">
  <h2>Booking Records</h2>
  <div class="breadcrumbs"><a href="{{ url('dashboard') }}">Home</a><a href="{{ url('booking') }}">Booking</a><span>Records</span></div>
</div>

<div class="panel panel-default">
    <div class="panel-heading wt-panel-heading p-a20">
        <h4 class="panel-tittle m-a0">Booking Records</h4>
    </div>
    <div class="panel-body wt-panel-body  bg-white">
      @foreach ($bookings as $booking)
        <div class="dashboard-booking-box p-b20 m-b20">
            <div class="dashboard-booking-avtar"><img src="{{ asset('assets') }}/images/user-avtar/pic2.jpg" alt=""></div>
            <div class="dashboard-booking-area">
                <div class="dashboard-booking-detail">
                    <h5>{{ $booking->unit->unit_name }}</h5>
                    <ul class="booking-list">
                        <li>
                            <span>{{ $booking->created_formatted }}</span>
                            <span class="booking-status {{ $booking->status_formatted }}">{{ $booking->status_formatted }}</span>
                        </li>
                    </ul>
                </div>
                <div class="dashboard-booking-detail">
                    <span class="booking-title">Booking Date</span>
                    <ul class="booking-list">
                        <li><span>{{ $booking->checkin_formatted }} - {{ $booking->checkout_formatted }}</span></li>
                    </ul>
                </div>
                <div class="dashboard-booking-detail">
                    <span class="booking-title">Guests</span>
                    <ul class="booking-list">
                        <li><span>{{ $booking->guests }}</span></li>
                    </ul>
                </div>
            </div>
        </div>
      @endforeach
    </div>
</div>
@include('webapp.partials.footer')
