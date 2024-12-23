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
        <form class="wt-dashboard-msg-search" method="GET" action="{{ url('schedules') }}">
            <div class="input-group searchbox">
                <input class="form-control" placeholder="Search Provider" type="text" name="string" value="@isset($_GET['string']){{ $_GET['string'] }}@endisset">
                <button class="btn" type="button"><i class="fa fa-search"></i></button>
            </div>
            <div class="params">
              <select name="text_search">
                <option selected disabled>Search by</option>
                <option value="user_id" @isset($_GET['text_search'])@if($_GET['text_search'] == 'user_id'){{'selected'}}@endif @endisset>User ID</option>
                <option value="id" @isset($_GET['text_search'])@if($_GET['text_search'] == 'id'){{'selected'}}@endif @endisset>Booking ID</option>
              </select>
            </div>
            <div class="params">
              <select name="status">
                <option selected disabled>Select Status</option>
                <option value="0" @isset($_GET['status'])@if($_GET['status'] == '0'){{'selected'}}@endif @endisset>Pending</option>
                <option value="1" @isset($_GET['status'])@if($_GET['status'] == '1'){{'selected'}}@endif @endisset>Approved</option>
                <option value="2" @isset($_GET['status'])@if($_GET['status'] == '2'){{'selected'}}@endif @endisset>Declined</option>
                <option value="3" @isset($_GET['status'])@if($_GET['status'] == '3'){{'selected'}}@endif @endisset>Cancelled</option>
              </select>
            </div>
            <div class="params">
              <label for="checkin_date">Check-in Date</label>
              <input type="date" name="checkin_date" id="checkin_date" value="@isset($_GET['checkin_date']){{ $_GET['checkin_date'] }}@endisset">
            </div>
            {{-- <div class="params">
              <label for="checkout_date">Check-out Date</label>
              <input type="date" name="checkout_date">
            </div> --}}
            <div class="params">
              <button type="submit">Search</button>
            </div>
            <div class="params">
              <a href="{{ url('schedules') }}" class="reset">Reset</a>
            </div>
          </form>
        <!-- Search Section End-->

        <!-- user msg list start-->
        <div id="msg-list-wrap" class="wt-dashboard-msg-search-list">

          @foreach($schedules as $schedule)
            <div class="wt-dashboard-msg-search-list-wrap">
                <a href="{{ url('schedule/' . $schedule->id ) }}" class="msg-user-info clearfix">
                    <div class="msg-user-info-text booking-info">
                      <div class="booking-info-left">
                        <div class="msg-user-name">{{ $schedule->user->first_name . " " . $schedule->user->last_name }}</div>
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