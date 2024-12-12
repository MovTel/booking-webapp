@include('webapp.partials.header', ['title' => 'Agents'])
<x-navigation />
<x-sidebar />

<div class="wt-admin-right-page-header clearfix">
    <h2>Agents</h2>
    <div class="breadcrumbs"><a href="{{ url('dashboard') }}">Home</a><span>Agents</span></div>
</div>

<div class="wt-admin-dashboard-msg-2">

    <div class="wt-dashboard-msg-user-list">
        <div class="user-msg-list-btn-outer">
            <button class="user-msg-list-btn-close">Close</button>
            <button class="user-msg-list-btn-open">User Message</button>
        </div>
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

          @foreach($agents as $agent)
            <div class="wt-dashboard-msg-search-list-wrap">
                <a href="{{ url('agents/' . $agent->id . '/edit') }}" class="msg-user-info clearfix">
                    <div class="msg-user-info-text">
                        <div class="msg-user-name">{{ $agent->first_name . " " . $agent->last_name }}</div>
                    </div>
                </a>
            </div>
          @endforeach

        </div>
        <!-- user msg list End-->

    </div>

</div>
@include('webapp.partials.footer')