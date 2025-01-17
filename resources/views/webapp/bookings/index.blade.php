@include('webapp.partials.header', ['title' => 'Bookings'])
<div class="wt-admin-right-page-header clearfix">
    <h2>Booking</h2>
    <div class="breadcrumbs"><a href="{{ url('dashboard') }}">Home</a><span>Booking</span></div>
</div>

<div class="panel panel-default">
  <div class="panel-body wt-panel-body p-a20 bg-white">
      @foreach ($units as $unit)
          <div class="dashboard-my-listing-tabs dashboard-badge">
              <div class="wt-listing-container dashboard-my-listing">
                  <div class="list-item-container m-b30 clearfix">
                      <div class="list-image-box bg-cover bg-no-repeat" style="background-image:url(@if($unit->coverImage){{ url( $unit->coverImage->image_path ) }}@endif)">
                      </div>

                      <div class="list-category-content">
                          <h4 class="listing-place-name"><a href="{{ url('booking/' . $unit->id . '?date=' . $date) }}">{{ $unit->property_name }}</a></h4>
                          <span class="listing-cat-address"><i class="sl-icon-location"></i>{{ $unit->property_description }}</span>
                      </div>
                  </div>
              </div>
              <span></span>
          </div>
      @endforeach
  </div>
</div>
</div>
@include('webapp.partials.footer')
