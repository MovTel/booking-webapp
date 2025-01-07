@include('website.partials.header', ['title' => 'Join Us!', 'og_image' => asset('/assets/images/referral.jpg')])

<div class="page-content ">
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('assets') }}/images/background/cover-photo.jpeg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="text-white">Referral</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Referral</li>
                    </ul>
                </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- SECTION CONTENT START -->
    <div class="section-full small-device  p-tb80 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <!-- BLOG START -->
                    <div class="blog-post blog-md date-style-1 blog-list-1 clearfix  m-b60 bg-white">
                        <div class="wt-post-media">
                            <a href="javascript:;"><img src="{{ asset('/assets/images/referral.jpg') }}"
                                    alt=""></a>
                        </div>
                        <div class="wt-post-info  bg-white p-t30">
                            <div class="wt-post-title ">
                                <h3 class="post-title">Unlock Your Rental's Full Potential: Maximize Earnings Today!</h3>
                            </div>

                            <div class="wt-post-text">
                                <h4>Join Movietelle.com Today</h4>
                                <p>Are you a property owner looking to maximize your rental income? With Movietelle.com, you can attract more bookings, triple your earnings, and enjoy 0% service fees when you sign up now!<br><br> 
                                  ✅ No service fees for property owners<br>
                                  ✅ Earn more by hosting productions, events, and stays<br>
                                  ✅ Reach a wide audience of renters and creatives<br><br>
                                  Don’t miss this exclusive opportunity to grow your rental business with ease and efficiency.</p>
                                <a href="javascript:;" class="sign-up-cta" data-target=".sign-in-modal" data-toggle="modal"></i>SIGN UP!</a>
                            </div>

                        </div>

                    </div>


                    <!-- LEAVE A REPLY END -->
                </div>
            </div>
        </div>
        <!-- BLOG END -->

    </div>
    <!-- SIDE BAR START -->
</div>



</div>
</div>
<!-- SECTION CONTENT END -->

</div>

@include('website.partials.footer')
