@include('webapp.partials.header', ['title' => 'Properties'])
<x-navigation />
<x-sidebar />

<div class="wt-admin-right-page-header clearfix">
    <h2>Properties</h2>
    <div class="breadcrumbs"><a href="{{ url('dashboard') }}">Home</a><span>Properties</span></div>
</div>

{{-- <div class="panel panel-default">
    <div class="panel-body wt-panel-body p-a20 bg-white">
        @foreach ($units as $unit)
            <div class="dashboard-my-listing-tabs dashboard-badge">
                <div class="wt-listing-container dashboard-my-listing">
                    <div class="list-item-container m-b30 clearfix">
                        <div class="list-image-box bg-cover bg-no-repeat"
                            style="background-image:url(images/visited-palce/pic4.jpg)">
                            <div class="listing-place-logo"><img src="images/place-logo/4.jpg" alt=""></div>
                        </div>

                        <div class="list-category-content">
                            <h4 class="listing-place-name"><a href="{{ url('booking/' . $unit->id . '?date=' . $date) }}">{{ $unit->unit_name }}</a></h4>
                            <span class="listing-cat-address"><i class="sl-icon-location"></i>{{ $unit->unit_description }}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div> --}}
@include('webapp.partials.footer')
