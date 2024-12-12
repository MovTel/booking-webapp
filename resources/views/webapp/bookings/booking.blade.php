@include('webapp.partials.header', ['title' => 'Book Unit'])
<x-navigation />
<x-sidebar />

<div class="wt-admin-right-page-header clearfix">
    <h2>Book {{ $unit->unit_name }}</h2>
    <div class="breadcrumbs"><a href="{{ url('dashboard') }}">Home</a><a href="{{ url('booking') }}">Booking</a><span>Book Unit</span></div>
</div>

<div class="panel panel-default">
    <div class="panel-heading wt-panel-heading p-a20">
        <h4 class="panel-tittle m-a0">Book: {{ $unit->property_name }}</h4>
    </div>
    <div class="panel-body wt-panel-body p-a20 m-b30 bg-white">
        <form action="{{ url('booking/' . $unit->id . '/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12 col-md-12">
                      <div class="dashboard-profile-section clearfix">
                        <div class="dashboard-profile-pic">
                            <div class="dashboard-profile-photo">
                                <img src="{{ asset('assets') }}/images/user-avtar/pic1.jpg" alt="" id="img_preview" style="width: 240px; height: 240px; object-fit: cover; object-position: center;">
                                <div class="upload-btn-wrapper">
                                    <button class="site-button-secondry site-btn-effect button-sm">Upload Photo ID</button>
                                    <input type="file" name="id_image" required id="img_upload">
                                </div>
                            </div>
                        </div>
                        <div class="dasboard-profile-form overflow-hide">
                            <div class="row">
                            
                                <div class="col-xl-4 col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Check-in Date</label>
                                        <div class="ls-inputicon-box">
                                            <input class="form-control" name="checkin_date" type="date" value="{{ $date }}" readonly>
                                            <i class="fs-input-icon sl-icon-month"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Guests</label>
                                        <textarea class="form-control" rows="3" name="guests"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label>Check-in Time</label>
                        <div class="ls-inputicon-box time">
                            @foreach ($hours as $hour)
                                @if ($hour['status'] == 1)
                                    <label class="radio"><input type="radio" name="checkin_time" value="{{ $hour['24hr'] }}">{{ $hour['12hr'] }}</label>
                                @else
                                    <label class="radio occupied">{{ $hour['12hr'] }}</label>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label>Check-out Time</label>
                        <div class="ls-inputicon-box time">
                            @foreach ($hours as $hour)
                                @if ($hour['status'] == 1)
                                    <label class="radio"><input type="radio" name="checkout_time"
                                            value="{{ $hour['24hr'] }}">{{ $hour['12hr'] }}</label>
                                @else
                                    <label class="radio occupied">{{ $hour['12hr'] }}</label>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="form-group calendar">
                        <label>Choose Date</label>
                        <div id="calendar"></div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="text-left">
                        @if(count($status_keycard))
                            <button type="submit" class="site-button-secondry site-btn-effect">Schedule Booking</button>
                        @else
                            <p class="note">Do you want to purchase a keycard?<a href="{{ url('booking/keycard') }}" class="note-link">Click here.</a></p>
                            <button type="submit" class="site-button-secondry site-btn-effect">Book Now</button>
                        @endif
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@include('webapp.partials.footer')
