@include('webapp.partials.header', ['title' => 'Create Keycard'])
<x-navigation />
<x-sidebar />

<div class="wt-admin-right-page-header clearfix">
    <h2>Create Keycard</h2>
    <div class="breadcrumbs"><a href="{{ url('dashboard') }}">Dashboard</a><a
            href="{{ url('keycard') }}">Keycard</a><span>Create Keycard</span></div>
</div>



<div class="panel panel-default">
    <div class="panel-heading wt-panel-heading p-a20">
        <h4 class="panel-tittle m-a0">Create Keycard</h4>
    </div>
    <div class="panel-body wt-panel-body p-a20 m-b30 bg-white">
        <form action="{{ url('keycard/store') }}" method="POST">
            @csrf
            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <div class="dashboard-profile-section clearfix">
                        <div class="dasboard-profile-form overflow-hide">
                            <div class="row">
                                <div class="col-xl-4 col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Keycard Number</label>
                                        <div class="ls-inputicon-box">
                                            <input class="form-control" name="keycard_number" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Keycard Status</label>
                                        <div class="ls-inputicon-box">
                                            <select class="form-control" name="keycard_status" type="text">
                                                <option value="3">Inactive</option>
                                                <option value="2">Active</option>
                                                <option value="1">Running</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>User</label>
                                        <div class="ls-inputicon-box">
                                            <select class="form-control" name="user_id" type="text">
                                                <option disabled selected="">Select Guest</option>
                                                <option value="1">Admin</option>
                                                @foreach ($guests as $guest)
                                                    <option value="{{ $guest->id }}">{{ $guest->first_name . " " . $guest->last_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Keycard Type</label>
                                        <div class="ls-inputicon-box">
                                            <select class="form-control" name="keycard_type" type="text">
                                                <option value="2">Temporary</option>
                                                <option value="1">Permanent</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="text-left">
                        <button type="submit" class="site-button-secondry site-btn-effect">Save Keycard</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
@include('webapp.partials.footer')
