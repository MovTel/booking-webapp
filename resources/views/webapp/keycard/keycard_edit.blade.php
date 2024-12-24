@include('webapp.partials.header', ['title' => 'Update Keycard'])
<x-navigation />
<x-sidebar />

<div class="wt-admin-right-page-header clearfix">
    <h2>Update Keycard</h2>
    <div class="breadcrumbs"><a href="{{ url('dashboard') }}">Dashboard</a><a href="{{ url('keycard') }}">Keycard</a><span>Update Keycard</span></div>
</div>

<div class="panel panel-default">
    <div class="panel-heading wt-panel-heading p-a20">
        <h4 class="panel-tittle m-a0">Update Keycard</h4>
    </div>
    <div class="panel-body wt-panel-body p-a20 m-b30 bg-white">
        <form action="{{ url('keycard/' . $keycard->id . '/update') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <div class="dashboard-profile-section clearfix">
                        <div class="dasboard-profile-form overflow-hide">
                            <div class="row">
                                <div class="col-xl-4 col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Keycard Number</label>
                                        <div class="ls-inputicon-box">
                                            <input class="form-control" name="keycard_number" type="text" value="{{ $keycard->keycard_number }}">
                                            <i class="fs-input-icon fa fa-barcode"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Keycard Status</label>
                                        <div class="ls-inputicon-box">
                                            <select class="form-control" name="keycard_status" type="text">
                                                <option value="1" {{ $keycard->keycard_status == 1 ? 'selected' : '' }}>Running</option>
                                                <option value="2" {{ $keycard->keycard_status == 2 ? 'selected' : '' }}>Active</option>
                                                <option value="3" {{ $keycard->keycard_status == 3 ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                            <i class="fs-input-icon fa fa-bars"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>User</label>
                                        <div class="ls-inputicon-box">
                                            <select class="form-control" name="user_id" type="text">
                                                <option value="1">Admin</option>
                                                @foreach ($guests as $guest)
                                                    <option value="{{ $guest->id }}" @if($guest->id == $keycard->user_id ) {{"selected"}} @endif>{{ $guest->first_name . " " . $guest->last_name }}</option>
                                                @endforeach
                                            </select>
                                            <i class="fs-input-icon fa fa-chain"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Keycard Type</label>
                                        <div class="ls-inputicon-box">
                                            <select class="form-control" name="keycard_type" type="text">
                                                <option value="1" {{ $keycard->keycard_type == 1 ? 'selected' : '' }}>Permanent</option>
                                                <option value="2" {{ $keycard->keycard_type == 2 ? 'selected' : '' }}>Temporary</option>
                                            </select>
                                            <i class="fs-input-icon fa fa-list-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="text-left">
                        <button type="submit" class="site-button-secondry site-btn-effect">Update Keycard</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
@include('webapp.partials.footer')
