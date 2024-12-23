@include('webapp.partials.header', ['title' => 'Create unit'])

<div class="wt-admin-right-page-header clearfix">
    <h2>Create Unit</h2>
    <div class="breadcrumbs"><a href="{{ url('dashboard') }}">Home</a><a href="{{ url('unit') }}">Unit</a><span>Create Unit</span></div>
</div>

<form action="{{ url('properties/store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="panel panel-default">
        <div class="panel-heading wt-panel-heading p-a20">
            <h4 class="panel-tittle m-a0">Basic Information</h4>
        </div>
        <div class="panel-body wt-panel-body p-a20 p-b0 bg-white m-b30">
            <div class="row">
                <div class="col-lg-6 col-md-4">
                    <div class="form-group">
                        <label>Property Name</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control wt-form-control" name="property_name" type="text" required>
                            <i class="fs-input-icon fa fa-user-o "></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-4">
                    <div class="form-group city-outer-bx has-feedback">
                        <label>Location</label>
                        <div class="ls-inputicon-box">
                            <select class="wt-select-box selectpicker" name="location" data-live-search="true" title="Select Location" id="city" data-bv-field="city" required>
                                <option class="" value="Manila">Manila</option>
                                <option class="" value="Cebu">Cebu</option>
                                <option class="" value="Tagaytay">Tagaytay</option>
                            </select>
                            <i class="fs-input-icon sl-icon-list"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-4">
                    <div class="form-group city-outer-bx has-feedback">
                        <label>Category</label>
                        <div class="ls-inputicon-box">
                            <select class="wt-select-box selectpicker" name="category" data-live-search="true" title="Select Category" id="city" data-bv-field="city" required>
                                <option class="" value="stay">Stay</option>
                                <option class="" value="space">Space</option>
                                <option class="" value="spa">Spa</option>
                                <option class="" value="sweat">Sweat</option>
                                <option class="" value="sing">Sing</option>
                            </select>
                            <i class="fs-input-icon sl-icon-list"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <label>Property Description</label>
                        <div class="ls-inputicon-box">
                            <textarea class="form-control wt-form-control" name="property_description" type="text" required rows="5"></textarea>
                            <i class="fs-input-icon fa fa-user-o "></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading wt-panel-heading p-a20">
            <h4 class="panel-tittle m-a0">Specifications</h4>
        </div>
        <div class="panel-body wt-panel-body p-a20 p-b0 bg-white m-b30">
            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <div class="form-group city-outer-bx has-feedback">
                        <label>Property Type</label>
                        <div class="ls-inputicon-box">
                            <select class="wt-select-box selectpicker" name="property_type" data-live-search="true" title="Select Property Type" id="city" data-bv-field="city" required>
                                <option class="" value="House">House</option>
                                <option class="" value="Condo">Condo</option>
                                <option class="" value="Apartment">Apartment</option>
                            </select>
                            <i class="fs-input-icon sl-icon-list"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group city-outer-bx has-feedback">
                        <label>Space</label>
                        <div class="ls-inputicon-box">
                            <select class="wt-select-box selectpicker" name="space" data-live-search="true" title="Select Property Type" id="city" data-bv-field="city" required>
                                <option class="" value="Entire">Entire</option>
                                <option class="" value="Shared">Shared</option>
                                <option class="" value="Private">Private</option>
                            </select>
                            <i class="fs-input-icon sl-icon-list"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Maximum Capacity</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control wt-form-control" name="capacity" type="number" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading wt-panel-heading p-a20">
            <h4 class="panel-tittle m-a0">Location</h4>
        </div>
        <div class="panel-body wt-panel-body p-a20 p-b0 m-b30 bg-white">
            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <label>Property Address</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control wt-form-control" name="property_address" type="text" required>
                            <i class="fs-input-icon sl-icon-location"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group city-outer-bx has-feedback">
                        <label>Maps URL</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control wt-form-control" name="maps_url" type="text" id="maps_url">
                            <i class="fs-input-icon sl-icon-location"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Property View</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control wt-form-control" name="property_view" type="text">
                            <i class="fs-input-icon sl-icon-location"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <div id="singleListingMap-container">
                            <iframe
                                src=""
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="maps_iframe"></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading wt-panel-heading p-a20">
            <h4 class="panel-tittle m-a0">Media</h4>
        </div>
        <div class="panel-body wt-panel-body p-a20 p-b0 m-b30 bg-white">

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <label>Property Images</label>
                        <input type="file" id="fileInput" multiple name="property_images[]" accept="image/*" class="fileInput">
                        <label class="dropzone" id="image-container" for="fileInput"></label>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading wt-panel-heading p-a20">
            <h4 class="panel-tittle m-a0">Amenities</h4>
        </div>
        <div class="panel-body wt-panel-body p-a20 m-b30 bg-white">
            <div class="dashboard-amenities equal-wraper">
                <ul class="clearfix">

                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="Pool" name="amenities[]" value="1" type="checkbox">
                                <label for="Pool">Pool</label>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="Gym" name="amenities[]" value="2" type="checkbox">
                                <label for="Gym">Gym</label>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="Playground" name="amenities[]" value="3" type="checkbox">
                                <label for="Playground">Playground</label>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="Bathtub" name="amenities[]" value="4" type="checkbox">
                                <label for="Bathtub">Bathtub</label>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="Sauna" name="amenities[]" value="5" type="checkbox">
                                <label for="Sauna">Sauna</label>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="BBQ Grill" name="amenities[]" value="6" type="checkbox">
                                <label for="BBQ Grill">BBQ Grill</label>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="Outdoor Dining Area" name="amenities[]" value="7" type="checkbox">
                                <label for="Outdoor Dining Area">Outdoor Dining Area</label>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="Fire Pit" name="amenities[]" value="8" type="checkbox">
                                <label for="Fire Pit">Fire Pit</label>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="Pool Table" name="amenities[]" value="9" type="checkbox">
                                <label for="Pool Table">Pool Table</label>
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="Indoor Fireplace" name="amenities[]" value="10" type="checkbox">
                                <label for="Indoor Fireplace">Indoor Fireplace</label>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="Piano" name="amenities[]" value="11" type="checkbox">
                                <label for="Piano">Piano</label>
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="Exercise Equipment" name="amenities[]" value="12" type="checkbox">
                                <label for="Exercise Equipment">Exercise Equipment</label>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="Lake Access" name="amenities[]" value="13" type="checkbox">
                                <label for="Lake Access">Lake Access</label>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="Beach Access" name="amenities[]" value="14" type="checkbox">
                                <label for="Beach Access">Beach Access</label>
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="Outdoor Shower" name="amenities[]" value="15" type="checkbox">
                                <label for="Outdoor Shower">Outdoor Shower</label>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="TV 40 Inch" name="amenities[]" value="16" type="checkbox">
                                <label for="TV 40 Inch">TV 40 Inch</label>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="TV 55 Inch" name="amenities[]" value="17" type="checkbox">
                                <label for="TV 55 Inch">TV 55 Inch</label>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="TV 65 Inch" name="amenities[]" value="18" type="checkbox">
                                <label for="TV 65 Inch">TV 65 Inch</label>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="Bed Size (Semi - Double)" name="amenities[]" value="19" type="checkbox">
                                <label for="Bed Size (Semi - Double)">Bed Size (Semi - Double)</label>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="Bed Size (Double)" name="amenities[]" value="20" type="checkbox">
                                <label for="Bed Size (Double)">Bed Size (Double)</label>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="Bed Size (Single)" name="amenities[]" value="21" type="checkbox">
                                <label for="Bed Size (Single)">Bed Size (Single)</label>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="Bed Size (Queen)" name="amenities[]" value="22" type="checkbox">
                                <label for="Bed Size (Queen)">Bed Size (Queen)</label>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="Bed Size (Bunk Bed)" name="amenities[]" value="23" type="checkbox">
                                <label for="Bed Size (Bunk Bed)">Bed Size (Bunk Bed)</label>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="Bed Size (Twin)" name="amenities[]" value="24" type="checkbox">
                                <label for="Bed Size (Twin)">Bed Size (Twin)</label>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="Bed Size (Pull-out Bed)" name="amenities[]" value="25" type="checkbox">
                                <label for="Bed Size (Pull-out Bed)">Bed Size (Pull-out Bed)</label>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="Bed Size (Sofa Bed)" name="amenities[]" value="26" type="checkbox">
                                <label for="Bed Size (Sofa Bed)">Bed Size (Sofa Bed)</label>
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="Parking (Car)" name="amenities[]" value="27" type="checkbox">
                                <label for="Parking (Car)">Parking (Car)</label>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dashboard-amenities-wrap equal-col">
                            <div class="checkbox wt-radio-checkbox">
                                <input id="Parking (Motorcycle)" name="amenities[]" value="28" type="checkbox">
                                <label for="Parking (Motorcycle)">Parking (Motorcycle)</label>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading wt-panel-heading p-a20">
            <h4 class="panel-tittle m-a0">Prices</h4>
        </div>
        <div class="panel-body wt-panel-body p-a20 p-b0 bg-white m-b30">
            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Asking Price per hour (min of 4hrs)</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control wt-form-control" name="per_hour_4_hrs" type="number"
                                required>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Discounted per hour (min of 12hrs)</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control wt-form-control" name="per_hour_12_hrs" type="number"
                                required>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Discounted per hour (min of 24hrs)</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control wt-form-control" name="per_hour_24_hrs" type="number"
                                required>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Discount for more than 48hrs</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control wt-form-control" name="plus_48_hrs" type="text" required>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Downpayment</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control wt-form-control" name="downpayment" type="text" required>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Minimum Hours</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control wt-form-control" name="minimum_hours" type="number" required>
                            <i class="fs-input-icon fa fa-hourglass-half"></i>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Status</label>
                        <div class="ls-inputicon-box">
                            <select class="form-control wt-form-control" name="status" required>
                                <option value="0">Pending</option>
                                <option value="1">Active</option>
                            </select>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="text-left">
        <button type="submit" class="site-button-secondry site-btn-effect">Save Changes</button>
    </div>

</form>

@include('webapp.partials.footer')
