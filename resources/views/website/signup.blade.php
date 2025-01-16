@include('website.partials.header', ['title' => 'Sign Up', 'description' => 'Find your perfect rental property! Sign up to browse listings, manage bookings, and reserve your ideal rental home today.'])


<div class="sign-in-dialog">
    <div class="sign-in-dialog-header">
        <h4 class="dialog-h-title">Sign Up</h4>
    </div>
    <div class="sign-in-dialog-form">
        <div>
            <div class="wt-tabs tabs-default single-mod">
                <div class="tab-content">
                    <div id="register-one" class="tab-pane no-pd active">

                        <div class="wt-tabs tabs-default">
                            <ul class="nav nav-tabs">
                                <li><a class="active" data-toggle="tab" href="#guest-one"><i class="sl-icon-user m-r10"></i>Guest</a></li>
                                <li><a data-toggle="tab" href="#owner-one"><i class="sl-icon-briefcase m-r10"></i>Owner</a></li>
                            </ul>

                            <div class="tab-content">

                                <div id="guest-one" class="tab-pane active">
                                    <form action="{{ url('registration/attempt') }}" method="POST">
                                        @csrf
                                        <div class="guest_form">
                                            <div class="form-group">
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control" name="first_name" type="text" placeholder="First Name">
                                                    <i class="fs-input-icon sl-icon-user "></i>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control" name="middle_name" type="text" placeholder="Middle Name">
                                                    <i class="fs-input-icon sl-icon-pencil "></i>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control" name="last_name" type="text" placeholder="Last Name">
                                                    <i class="fs-input-icon sl-icon-pencil "></i>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control" name="contact_no" type="text" placeholder="Contact Number">
                                                    <i class="fs-input-icon sl-icon-pencil "></i>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control" name="email" type="email" placeholder="Email Address">
                                                    <i class="fs-input-icon fa fa-envelope-o"></i>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control" name="password" type="Password" placeholder="Password">
                                                    <i class="fs-input-icon sl-icon-lock "></i>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control" name="password_confirmation" type="Password" placeholder="Confirm Password">
                                                    <i class="fs-input-icon sl-icon-lock "></i>
                                                </div>
                                            </div>

                                            <div class="login-btn-bx text-right">
                                                <button type="submit" class="site-button-secondry site-btn-effect">Register</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div id="owner-one" class="tab-pane no-pd">
                                    <form action="{{ url('registration/owner/attempt') }}" method="POST">
                                        @csrf
                                        <div class="guest_form">
                                            <div class="form-group">
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control" name="first_name" type="text" placeholder="First Name">
                                                    <i class="fs-input-icon sl-icon-user "></i>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control" name="middle_name" type="text" placeholder="Middle Name">
                                                    <i class="fs-input-icon sl-icon-pencil "></i>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control" name="last_name" type="text" placeholder="Last Name">
                                                    <i class="fs-input-icon sl-icon-pencil "></i>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control" name="contact_no" type="text" placeholder="Contact Number">
                                                    <i class="fs-input-icon sl-icon-pencil "></i>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control" name="email" type="email" placeholder="Email Address">
                                                    <i class="fs-input-icon fa fa-envelope-o"></i>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control" name="password" type="Password" placeholder="Password">
                                                    <i class="fs-input-icon sl-icon-lock "></i>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control" name="password_confirmation" type="Password" placeholder="Confirm Password">
                                                    <i class="fs-input-icon sl-icon-lock "></i>
                                                </div>
                                            </div>

                                            <div class="login-btn-bx text-right">
                                                <button type="submit" class="site-button-secondry site-btn-effect">Register</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('website.partials.footer')
