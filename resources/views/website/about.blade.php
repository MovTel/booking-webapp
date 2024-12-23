@include('website.partials.header', ['title' => 'About Us'])
<!-- CONTENT START -->
<div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('assets') }}/images/background/cover-photo.jpeg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="text-white">About Movietelle</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- ABOUT SECTION START -->
    <div class="section-full p-t80 p-b50 bg-orange-light">
        <div class="container">
            <div class="section-content">
                <!-- TITLE START-->
                <div class="section-head text-center">
                    <span class="wt-separator-icon"><i class="sl-icon-location "></i></span>
                    {{-- <h2>About Movietelle</h2> --}}
                    <div class="wt-separator sep-gradient-light"></div>
                    <p>I’m committed to providing young people with easy access to safe spaces for creativity, reflection, or staycation therapy—helping them prioritize their well-being with just a tap.</p>
                </div>
                <!-- TITLE END-->

                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="how-it-right">
                            <h3 class="wt-title m-t0">Welcome to Movietelle, your go-to destination for planning the perfect staycation.</h3>
                            <p>Our mission is to help you escape the ordinary and rediscover the joy of relaxation, all without leaving your local area. We believe that the best experiences don’t always require traveling far. That’s why we curate a range of handpicked accommodations, unique experiences, and personalized packages designed to make your staycation memorable.</p><p>Whether you’re looking for a cozy retreat, a family-friendly adventure, or a romantic getaway, we’ve got you covered.</p>
                            <ol class="list-num-count  m-b30">
                                <li><h5> Handpicked Accommodations: Choose from a selection of charming hotels, cozy cabins, and more.</h5></li>
                                <li><h5> Unique Experiences: discover activities tailored to your preferences.</h5></li>
                                <li><h5> Seamless Booking Experience: Easily plan your dream staycation with our user-friendly platform.</h5></li>
                            </ol>
                            <div class="text-left">
                                <a href="{{ url('/') }}" class="site-button-secondry site-btn-effect"
                                    data-hover="Read More">View Properties</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="how-it-work">
                            <div class="video-section-dark">
                                <img src="{{ asset('assets') }}/images/background/cover-photo.jpeg" alt="">
                                <div class="video-btn-position">
                                    <a href="https://www.youtube.com/watch?v=L-E-i94N4MY" class="mfp-video play-now">
                                        <i class="icon fa fa-play"></i>
                                        <span class="ripple"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT  SECTION END -->

    {{-- <!-- CLIENT LOGO SECTION START -->
    <div class="section-full bg-orange-light">
        <div class="container">
            <div class="section-content">

                <!-- TESTIMONIAL 4 START ON BACKGROUND -->
                <div class="section-content">
                    <div class="section-content p-tb10 owl-btn-vertical-center">
                        <div class="owl-carousel home-client-carousel-2 ">

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="{{ url('assets') }}/images/client-logo/w1.png"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="{{ url('assets') }}/images/client-logo/w2.png"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="{{ url('assets') }}/images/client-logo/w3.png"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="{{ url('assets') }}/images/client-logo/w4.png"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="{{ url('assets') }}/images/client-logo/w5.png"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="{{ url('assets') }}/images/client-logo/w6.png"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="{{ url('assets') }}/images/client-logo/w1.png"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="{{ url('assets') }}/images/client-logo/w2.png"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="{{ url('assets') }}/images/client-logo/w3.png"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="{{ url('assets') }}/images/client-logo/w4.png"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="{{ url('assets') }}/images/client-logo/w5.png"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="{{ url('assets') }}/images/client-logo/w6.png"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="{{ url('assets') }}/images/client-logo/w1.png"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="{{ url('assets') }}/images/client-logo/w2.png"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="{{ url('assets') }}/images/client-logo/w3.png"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="{{ url('assets') }}/images/client-logo/w4.png"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="{{ url('assets') }}/images/client-logo/w5.png"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="{{ url('assets') }}/images/client-logo/w6.png"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CLIENT LOGO  SECTION End --> --}}

</div>
<!-- CONTENT END -->
@include('website.partials.footer')
