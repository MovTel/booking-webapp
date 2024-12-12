@include('webapp.partials.header', ['title' => 'Check Schedule'])
<x-navigation />
<x-sidebar />

<div class="wt-admin-right-page-header clearfix">
    <h2>Schedules</h2>
    <div class="breadcrumbs"><a href="{{ url('dashboard') }}">Home</a><span>Schedules</span></div>
</div>

<div class="panel panel-default">
    <div class="panel-body wt-panel-body p-a30">

        <!-- Invoice -->
        <div id="invoice">
            <div id="invoice-title">
                <span>Schedule</span>
            </div>
            <!-- Header -->
            <div class="row">
                <div class="col-md-6">
                    <div id="logo"><img src="{{ asset('assets') }}/images/movietelle.png" alt=""></div>
                </div>
                <div class="col-md-6">
                    <p id="details">
                        <strong>Request Date:</strong>{{ $schedule->created_formatted }} <br>
                        <strong>Booking Date:</strong>{{ $schedule->date_formatted }} <br>
                        <strong>Check-in Time:</strong>{{ $schedule->checkin_formatted }} <br>
                        <strong>Check-out Time:</strong>{{ $schedule->checkout_formatted }} <br>
                        <strong>Overall Cost</strong>₱{{ number_format($schedule->dp, 2, '.', ','); }}<br>
                    </p>
                </div>
            </div>


            <!-- Client & Supplier -->
            <div class="row">


                <div class="col-md-6">
                    <strong>Guests</strong>
                    <p>
                        {{ $schedule->guests }}
                    </p>
                </div>

                <div class="col-md-6 text-right">
                    <strong>Client</strong>
                    <p>
                        {{ $schedule->user->first_name . ' ' . $schedule->user->last_name }} <br>
                        {{ $schedule->user->contact_no }} <br>
                    </p>
                </div>
            </div>


            <!-- Invoice -->
            <div class="row">
                <div class="col-md-12 schedule-btn-wrap">
                  <div>
                    @if($schedule->status == 0)<form action="{{ url('schedule/' . $schedule->id . '/approve') }}" method="POST">@method('PUT')@csrf<input type="submit" value="Approve" class="approve"></form>@endif
                    @if($schedule->status == 0)<form action="{{ url('schedule/' . $schedule->id . '/decline') }}" method="POST">@method('PUT')@csrf<input type="submit" value="Decline" class="decline"></form>@endif
                  </div>
                </div>
            </div>
        </div>

    </div>

</div>
</div>

@include('webapp.partials.footer')
