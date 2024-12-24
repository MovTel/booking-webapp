@include('webapp.partials.header', ['title' => 'Purchase Keycard'])
<x-navigation />
<x-sidebar />

<div class="wt-admin-right-page-header clearfix">
    <h2>Purchase Keycard</h2>
    <div class="breadcrumbs"><a href="{{ url('dashboard') }}">Home</a><a
            href="{{ url('booking') }}">Booking</a><span>Purchase Keycard</span></div>
</div>

<div class="panel panel-default">
    <div class="panel-heading wt-panel-heading p-a20">
        <h4 class="panel-tittle m-a0">Keycard Purchase</h4>
    </div>
    <div class="panel-body wt-panel-body p-a20 m-b30 bg-white">
        <form action="{{ url('booking/keycard/purchase') }}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="dashboard-profile-section clearfix">
                        <div class="dashboard-profile-pic">
                            <div class="dashboard-profile-photo">
                                <img src="{{ asset('assets') }}/images/user-avtar/pic1.jpg" alt="" id="img_preview" style="width: 240px; height: 240px; object-fit: cover; object-position: center;">
                                <div class="upload-btn-wrapper">
                                    <button class="site-button-secondry site-btn-effect button-sm">Upload ID Image</button>
                                    <input type="file" name="id_image" id="img_upload">
                                </div>
                            </div>
                        </div>
                        <div class="dasboard-profile-form overflow-hide">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Full Address</label>
                                        <textarea class="form-control" rows="3" name="full_address" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="text-left">
                        <button type="submit" class="site-button-secondry site-btn-effect">Request Keycard</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>

@include('webapp.partials.footer')
