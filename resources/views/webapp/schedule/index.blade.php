@include('webapp.partials.header', ['title' => 'All Schedules'])
<x-navigation />
<x-sidebar />

<div class="wt-admin-right-page-header clearfix">
    <h2>Schedules</h2>
    <div class="breadcrumbs"><a href="{{ url('dashboard') }}">Home</a><span>Schedules</span></div>
</div>

<div class="wt-admin-dashboard-msg-2">

    <div class="wt-dashboard-msg-user-list">
        <!-- Search Section Start-->
        <div class="wt-dashboard-msg-search">
            <div class="input-group">
                <input class="form-control" placeholder="Search Provider" type="text">
                <button class="btn" type="button"><i class="fa fa-search"></i></button>
            </div>
        </div>
        <!-- Search Section End-->

        <!-- user msg list start-->
        <div id="msg-list-wrap" class="wt-dashboard-msg-search-list">

          @foreach($schedules as $schedule)
            <div class="wt-dashboard-msg-search-list-wrap">
                <a href="{{ url('schedule/' . $schedule->id ) }}" class="msg-user-info clearfix">
                    <div class="msg-user-info-text booking-info">
                      <div class="booking-info-left">
                        <div class="msg-user-name">{{ $schedule->date_formatted }}</div>
                        <div class="msg-user-discription">{{ $schedule->user->first_name . " " . $schedule->user->last_name }}</div>
                        <div class="msg-user-discription">{{ $schedule->checkin_formatted . " - " . $schedule->checkout_formatted }}</div>
                      </div>
                      <div class="booking-status {{ $schedule->status_formatted }}">{{ $schedule->status_formatted }}</div>
                    </div>
                </a>
            </div>
          @endforeach

        </div>
        <!-- user msg list End-->

    </div>

</div>

@include('webapp.partials.footer')