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
                        <strong>check-in Date:</strong>{{ $schedule->checkin_formatted }} <br>
                        <strong>Check-out Date:</strong>{{ $schedule->checkout_formatted }} <br>
                        <strong>Overall Cost</strong>₱{{ number_format($schedule->total, 2, '.', ','); }}<br>
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
                        {{ $schedule->user->email }} <br>
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

    <div class="panel-body wt-panel-body p-a20 m-b30 bg-white">
        <form action="{{ url('booking/'.$schedule->id.'/comment') }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="dashboard-profile-section clearfix">
                        <div class="dasboard-profile-form overflow-hide">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Comment</label>
                                        <textarea class="form-control" rows="3" name="comment" placeholder="Add Comment">{{ $schedule->comment }}</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <div id="singleListingMap-container">
                                            <img src="{{ url($schedule->proof_of_payment) }}" alt="" class="image_container">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <div id="singleListingMap-container">
                                            <img src="{{ url($schedule->id_image) }}" alt="" class="image_container">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="text-left">
                        <button type="submit" class="site-button-secondry site-btn-effect">Save</button>
                    </div>
                </div>

            </div>
        </form>
    </div>

</div>
</div>

@include('webapp.partials.footer')
