@include('webapp.partials.header', ['title' => 'Edit Agent'])

<div class="panel panel-default">
  <div class="panel-heading wt-panel-heading p-a20">
      <h4 class="panel-tittle m-a0">Edit Agent</h4>
  </div>
  <div class="panel-body wt-panel-body p-a20 m-b30 bg-white">
      <form action="{{ url('agents/' . $agent->id . '/update') }}" method="POST">
          @csrf
          @method('PUT')
          <div class="row">

              <div class="col-lg-12 col-md-12">
                  <div class="dashboard-profile-section clearfix">
                      <div class="dasboard-profile-form overflow-hide">
                          <div class="row">
                              <div class="col-xl-4 col-lg-12 col-md-12">
                                  <div class="form-group">
                                      <label>First Name</label>
                                      <div class="ls-inputicon-box">
                                          <input class="form-control" name="first_name" type="text" value="{{ $agent->first_name }}">
                                          <i class="fs-input-icon sl-icon-user"></i>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-xl-4 col-lg-12 col-md-12">
                                  <div class="form-group">
                                      <label>Middle Name</label>
                                      <div class="ls-inputicon-box">
                                          <input class="form-control" name="middle_name" type="text" value="{{ $agent->middle_name }}">
                                          <i class="fs-input-icon sl-icon-user"></i>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-xl-4 col-lg-12 col-md-12">
                                  <div class="form-group">
                                      <label>Last Name</label>
                                      <div class="ls-inputicon-box">
                                          <input class="form-control" name="last_name" type="text" value="{{ $agent->last_name }}">
                                          <i class="fs-input-icon sl-icon-user"></i>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-xl-4 col-lg-12 col-md-12">
                                  <div class="form-group">
                                      <label>Contact Number</label>
                                      <div class="ls-inputicon-box">
                                          <input class="form-control" name="contact_no" type="text" value="{{ $agent->contact_no }}">
                                          <i class="fs-input-icon sl-icon-phone"></i>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-4 col-lg-12 col-md-12">
                                  <div class="form-group">
                                      <label>Email</label>
                                      <div class="ls-inputicon-box">
                                          <input class="form-control" name="email" type="email" value="{{ $agent->email }}">
                                          <i class="fs-input-icon fa fa-envelope-o"></i>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-12 col-md-12">
                  <div class="text-left">
                      <button type="submit" class="site-button-secondry site-btn-effect">Update Changes</button>
                  </div>
              </div>

              {{-- <form action="{{ url('agents/' . $agent->id . '/delete') }}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="Delete Agent">
              </form> --}}

          </div>
      </form>
  </div>
</div>
@include('webapp.partials.footer')