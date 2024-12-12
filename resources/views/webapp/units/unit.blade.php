@include('webapp.partials.header', ['title' => $unit->unit_name ])
<x-navigation />
<x-sidebar />
<div class="wt-admin-right-page-header clearfix">
  <h2>{{ $unit->unit_name }}</h2>
  <div class="breadcrumbs"><a href="{{ url('dashboard') }}">Home</a><a href="{{ url('unit') }}">Unit</a><span>{{ $unit->unit_name }}</span></div>
</div>
@include('webapp.partials.footer')