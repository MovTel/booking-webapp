@include('website.partials.header', ['title' => '50% Off! on first 500 registration.', 'description' => 'Welcome, new guests! Sign up today and unlock an exclusive 50% discount!'])
<!-- CONTENT START -->
<div class="page-content">

    <!-- Error SECTION START -->
    <div class="section-full bg-white bg-no-repeat bg-cover bg-bottom-center overlay-wraper coming-s-bg area"
        style="background-image:url({{ asset('assets') }}/images/background/cover-photo.jpeg)">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="coming-soon-content">
            <div class="section-content">

                <div class="countdown countdown-container container text-center text-white p-t50 p-b50">
                    <div class="c-logo m-b30 countdown-logo">
                        <img src="{{ asset('/assets/images/movietelle.png') }}" alt="">
                    </div>
                    <div class="c-title">
                        <h2>Welcome, new guests!<br>Sign up today and unlock an exclusive 50% discount!</h2>
                    </div>

                    <div class="clock clearfix p-tb30">
                        <div class="clock-item clock-days countdown-time-value">
                            <div class="wrap">
                                <div class="inner">
                                    <div id="canvas-days" class="clock-canvas"></div>

                                    <div class="text">
                                        <p class="val">0</p>
                                        <p class="type-days type-time">Days</p>
                                    </div><!-- /.text -->
                                </div><!-- /.inner -->
                            </div><!-- /.wrap -->
                        </div><!-- /.clock-item -->

                        <div class="clock-item clock-hours countdown-time-value">
                            <div class="wrap">
                                <div class="inner">
                                    <div id="canvas-hours" class="clock-canvas"></div>

                                    <div class="text">
                                        <p class="val">0</p>
                                        <p class="type-hours type-time">Hours</p>
                                    </div><!-- /.text -->
                                </div><!-- /.inner -->
                            </div><!-- /.wrap -->
                        </div><!-- /.clock-item -->

                        <div class="clock-item clock-minutes countdown-time-value">
                            <div class="wrap">
                                <div class="inner">
                                    <div id="canvas-minutes" class="clock-canvas"></div>

                                    <div class="text">
                                        <p class="val">0</p>
                                        <p class="type-minutes type-time">Minutes</p>
                                    </div><!-- /.text -->
                                </div><!-- /.inner -->
                            </div><!-- /.wrap -->
                        </div><!-- /.clock-item -->

                        <div class="clock-item clock-seconds countdown-time-value">
                            <div class="wrap">
                                <div class="inner">
                                    <div id="canvas-seconds" class="clock-canvas"></div>

                                    <div class="text">
                                        <p class="val">0</p>
                                        <p class="type-seconds type-time">Seconds</p>
                                    </div><!-- /.text -->
                                </div><!-- /.inner -->
                            </div><!-- /.wrap -->
                        </div><!-- /.clock-item -->
                    </div><!-- /.clock -->


                    <div class="c-newsletter">
                        <h5>Don’t miss out! Register now and enjoy an exclusive 50% discount—your gateway to unbeatable deals starts here!</h5>
                        <div class="newsletter-input m-t30">

                          <a href="{{ url('signup') }}" class="cta-signup">SIGNUP!</a>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!-- Error  SECTION END -->




</div>
<!-- CONTENT END -->

@include('website.partials.footer')
