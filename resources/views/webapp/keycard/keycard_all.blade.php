@include('webapp.partials.header', ['title' => 'All Keycards'])
<x-navigation />
<x-sidebar />

<div class="wt-admin-right-page-header clearfix">
    <h2>Keycards</h2>
    <div class="breadcrumbs"><a href="{{ url('dashboard') }}">Home</a><span>Keycards</span></div>
</div>

<div class="wt-admin-dashboard-msg-2">

    <div class="wt-dashboard-msg-user-list">
        <div class="user-msg-list-btn-outer">
            <button class="user-msg-list-btn-close">Close</button>
            <button class="user-msg-list-btn-open">User Message</button>
        </div>
        <!-- Search Section Start-->
        <form class="wt-dashboard-msg-search">
            <div class="input-group searchbox">
                <input class="form-control" placeholder="Search Provider" type="text" name="string" value="@isset($_GET['string']){{ $_GET['string'] }}@endisset">
                <button class="btn" type="button"><i class="fa fa-search"></i></button>
            </div>
            <div class="params">
                <select name="text_search">
                  <option selected disabled>Search by</option>
                  <option value="user_id" @isset($_GET['text_search'])@if($_GET['text_search'] == 'user_id'){{'selected'}}@endif @endisset>User ID</option>
                  <option value="keycard_number" @isset($_GET['text_search'])@if($_GET['text_search'] == 'keycard_number'){{'selected'}}@endif @endisset>Keycard Number</option>
                </select>
            </div>
            <div class="params">
                <select name="keycard_status">
                  <option selected disabled>Select Status</option>
                  <option value="1" @isset($_GET['keycard_status'])@if($_GET['keycard_status'] == '1'){{'selected'}}@endif @endisset>Running</option>
                  <option value="2" @isset($_GET['keycard_status'])@if($_GET['keycard_status'] == '2'){{'selected'}}@endif @endisset>Active</option>
                  <option value="3" @isset($_GET['keycard_status'])@if($_GET['keycard_status'] == '3'){{'selected'}}@endif @endisset>Inactive</option>
                </select>
            </div>
            <div class="params">
                <select name="keycard_type">
                  <option selected disabled>Select Type</option>
                  <option value="1" @isset($_GET['keycard_type'])@if($_GET['keycard_type'] == '1'){{'selected'}}@endif @endisset>Permanent</option>
                  <option value="2" @isset($_GET['keycard_type'])@if($_GET['keycard_type'] == '2'){{'selected'}}@endif @endisset>Temporary</option>
                </select>
            </div>
            <div class="params">
                <button type="submit">Search</button>
              </div>
              <div class="params">
                <a href="{{ url('keycard') }}" class="reset">Reset</a>
              </div>
        </form>
        <!-- Search Section End-->

        <!-- user msg list start-->
        <div id="msg-list-wrap" class="wt-dashboard-msg-search-list">

          @foreach($keycards as $keycard)
            <div class="wt-dashboard-msg-search-list-wrap">
                <a href="{{ url('keycard/' . $keycard->id . '/edit') }}" class="msg-user-info clearfix">
                    <div class="msg-user-info-text keycard-info">
                        <div class="msg-user-name">{{ $keycard->keycard_number }}</div>
                        <div class="keycard-status {{ $keycard->keycard_status_formatted }}">{{ $keycard->keycard_status_formatted }}</div>
                    </div>
                </a>
            </div>
          @endforeach

        </div>
        <!-- user msg list End-->

    </div>

</div>

@include('webapp.partials.footer')
