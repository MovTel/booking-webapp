<!-- FOOTER START -->
<footer class="site-footer footer-large footer-light text-white">

    <!-- FOOTER BLOCKES START -->
    <div class="footer-top  dot2-left-top-img">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget widget_about">
                        <div class="logo-footer clearfix p-b15">
                            <a href="index.html"><img src="{{ asset('assets') }}/images/movietelle.png" alt=""></a>
                        </div>
                        <p>MOVIETELLE is an hourly property rental Booking Platform offering check-in
                            anytime with pay-at-the-door payment system. MOVIETELLE Host earns TWICE than
                            AIRBNB!</p>
                        <div class="widget_social_inks">
                            <ul class="social-icons social-square social-darkest">
                                <li><a href="https://www.facebook.com/movieapartelle" class="fa fa-facebook" target="_blank"></a></li>
                                <li><a href="https://www.tiktok.com/@movietellelapulapucebu" target="_blank"><img src="{{ asset('assets') }}/images/social_media_logo/tiktok.png" width="12" height="12" alt="" /> </a></li>
                            </ul>
                        </div>
                    </div>

                </div>

                {{-- <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="widget widget_services">
                      <h4 class="widget-title">Useful links</h4>
                      <ul>
                          <li><a href="javascript:;">About</a><a href="javascript:;">My Account</a>
                          </li>
                          <li><a href="javascript:;">Pricing Plan </a><a href="javascript:;">Dashboard
                              </a></li>
                          <li><a href="javascript:;">Career </a><a href="javascript:;">Add listing</a>
                          </li>
                          <li><a href="javascript:;">Our Team </a><a href="javascript:;">Booking </a>
                          </li>
                          <li><a href="javascript:;">Services </a><a href="javascript:;">Review</a>
                          </li>
                      </ul>
                  </div>

              </div> --}}

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget recent-posts-entry">
                        <h4 class="widget-title">Contact Us</h4>
                        <ul class="widget_address">
                            <li><i class="sl-icon-location "></i>Movietelle, Bagumbayan 2, Maribago
                                Lapulapu City Cebu, Philippines</li>
                            <li><i class="sl-icon-envelope-open "></i>movietelle.partners@gmail.com</li>
                            <li> <i class="sl-icon-phone "></i>(+63) 997 6044 637</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

</footer>
<!-- FOOTER END -->

<!-- BUTTON TOP START -->
<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

<!-- Login sign uo popup -->
<div class="modal fade sign-in-modal" role="dialog">
    <div class="modal-dialog">
        <!-- MODAL CONTENT-->
        <div class="modal-content">

            <div class="sign-in-dialog">
                <div class="sign-in-dialog-header">
                    <h4 class="dialog-h-title">Sign in</h4>
                    <button type="button" class="close  sign-in-popup-close" data-dismiss="modal">&times;</button>
                </div>
                <div class="sign-in-dialog-form">
                    <div>
                        <div class="wt-tabs tabs-default">
                            <ul class="nav nav-tabs">
                                <li><a class="active"data-toggle="tab" href="#login-one">Login </a></li>
                                <li><a data-toggle="tab" href="#register-one">Register </a></li>
                            </ul>
                            <div class="tab-content">

                                <div id="login-one" class="tab-pane active">
                                    <form action="{{ url('login/attempt') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <div class="ls-inputicon-box">
                                                <input class="form-control" name="email" type="email"
                                                    placeholder="Email">
                                                <i class="fs-input-icon sl-icon-user "></i>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="ls-inputicon-box">
                                                <input class="form-control" name="password" type="Password"
                                                    placeholder="Password">
                                                <i class="fs-input-icon sl-icon-lock "></i>
                                            </div>
                                        </div>

                                        <div class="login-btn-bx text-right">
                                            <button type="submit"
                                                class="site-button-secondry site-btn-effect">Login</button>
                                        </div>
                                    </form>
                                </div>

                                <div id="register-one" class="tab-pane">

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
                                                                <input class="form-control" name="first_name"
                                                                    type="text" placeholder="First Name">
                                                                <i class="fs-input-icon sl-icon-user "></i>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="ls-inputicon-box">
                                                                <input class="form-control" name="middle_name"
                                                                    type="text" placeholder="Middle Name">
                                                                <i class="fs-input-icon sl-icon-pencil "></i>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="ls-inputicon-box">
                                                                <input class="form-control" name="last_name"
                                                                    type="text" placeholder="Last Name">
                                                                <i class="fs-input-icon sl-icon-pencil "></i>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="ls-inputicon-box">
                                                                <input class="form-control" name="contact_no"
                                                                    type="text" placeholder="Contact Number">
                                                                <i class="fs-input-icon sl-icon-pencil "></i>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="ls-inputicon-box">
                                                                <input class="form-control" name="email"
                                                                    type="email" placeholder="Email Address">
                                                                <i class="fs-input-icon fa fa-envelope-o"></i>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="ls-inputicon-box">
                                                                <input class="form-control" name="password"
                                                                    type="Password" placeholder="Password">
                                                                <i class="fs-input-icon sl-icon-lock "></i>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="ls-inputicon-box">
                                                                <input class="form-control"
                                                                    name="password_confirmation" type="Password"
                                                                    placeholder="Confirm Password">
                                                                <i class="fs-input-icon sl-icon-lock "></i>
                                                            </div>
                                                        </div>

                                                        <div class="login-btn-bx text-right">
                                                            <button type="submit"
                                                                class="site-button-secondry site-btn-effect">Register</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <div id="owner-one" class="tab-pane">
                                                <form action="{{ url('registration/owner/attempt') }}" method="POST">
                                                    @csrf
                                                    <div class="guest_form">
                                                        <div class="form-group">
                                                            <div class="ls-inputicon-box">
                                                                <input class="form-control" name="first_name"
                                                                    type="text" placeholder="First Name">
                                                                <i class="fs-input-icon sl-icon-user "></i>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="ls-inputicon-box">
                                                                <input class="form-control" name="middle_name"
                                                                    type="text" placeholder="Middle Name">
                                                                <i class="fs-input-icon sl-icon-pencil "></i>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="ls-inputicon-box">
                                                                <input class="form-control" name="last_name"
                                                                    type="text" placeholder="Last Name">
                                                                <i class="fs-input-icon sl-icon-pencil "></i>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="ls-inputicon-box">
                                                                <input class="form-control" name="contact_no"
                                                                    type="text" placeholder="Contact Number">
                                                                <i class="fs-input-icon sl-icon-pencil "></i>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="ls-inputicon-box">
                                                                <input class="form-control" name="email"
                                                                    type="email" placeholder="Email Address">
                                                                <i class="fs-input-icon fa fa-envelope-o"></i>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="ls-inputicon-box">
                                                                <input class="form-control" name="password"
                                                                    type="Password" placeholder="Password">
                                                                <i class="fs-input-icon sl-icon-lock "></i>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="ls-inputicon-box">
                                                                <input class="form-control"
                                                                    name="password_confirmation" type="Password"
                                                                    placeholder="Confirm Password">
                                                                <i class="fs-input-icon sl-icon-lock "></i>
                                                            </div>
                                                        </div>

                                                        <div class="login-btn-bx text-right">
                                                            <button type="submit"
                                                                class="site-button-secondry site-btn-effect">Register</button>
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

        </div>

    </div>
</div>

<!-- JAVASCRIPT  FILES ========================================= -->
<script src="{{ asset('/assets') }}/js/jquery-2.2.0.min.js"></script><!-- JQUERY.MIN JS -->
<script src="{{ asset('/assets') }}/js/popper.min.js"></script><!-- POPPER.MIN JS -->
<script src="{{ asset('/assets') }}/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('/assets') }}/js/bootstrap-select.min.js"></script><!-- Form js -->
<script src="{{ asset('/assets') }}/js/range-slider.min.js"></script><!-- Form js -->
<script src="{{ asset('/assets') }}/js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
<script src="{{ asset('/assets') }}/js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script src="{{ asset('/assets') }}/js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="{{ asset('/assets') }}/js/waypoints-sticky.min.js"></script><!-- STICKY HEADER -->
<script src="{{ asset('/assets') }}/js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
<script src="{{ asset('/assets') }}/js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
<script src="{{ asset('/assets') }}/js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   -->
<script src="{{ asset('/assets') }}/js/dropzone.js"></script><!-- IMAGE UPLOAD  -->

<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_8C7p0Ws2gUu7wo0b6pK9Qu7LuzX2iWY&amp;libraries=places&amp;">
</script>
<script src="{{ asset('/assets') }}/js/infobox.min.js"></script><!-- MAP CLUSTER  -->
<script src="{{ asset('/assets') }}/js/markerclusterer.js"></script><!-- MAP CLUSTER  -->
<script src="{{ asset('/assets') }}/js/maps.js"></script><!-- MAP CLUSTER  -->
<script src="{{ asset('/assets') }}/js/map-cluster-rating.js"></script><!-- MAP CLUSTER  -->

<script src="{{ asset('/assets') }}/js/m-custom-scrollbar.min.js"></script><!-- my account left panel scroller -->
<!-- Timing Countdown -->
<script src="{{ asset('/assets') }}/js/kinetic.js"></script>
<script src="{{ asset('/assets') }}/js/jquery.final-countdown.js"></script>
<script src="{{ asset('/assets') }}/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script><!-- CALENDAR PACKAGE  -->
<script src="{{ asset('/assets') }}/js/calendar-website.js"></script><!-- CUSTOM FUCTIONS  -->

</body>

</html>
