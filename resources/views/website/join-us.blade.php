@include('website.partials.header', ['title' => 'Join Us!', 'og_image' => asset('/assets/images/join-us.jpg')])

<div class="page-content ">
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('assets') }}/images/background/cover-photo.jpeg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="text-white">Join Us</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Join Us</li>
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
                            <a href="javascript:;"><img src="{{ asset('/assets/images/join-us.jpg') }}"
                                    alt=""></a>
                        </div>
                        <div class="wt-post-info  bg-white p-t30">
                            <div class="wt-post-title ">
                                <h3 class="post-title">HIRING: Virtual Receptionist ✨</h3>
                            </div>

                            <div class="wt-post-text">
                                <h4>Qualifications:</h4>
                                <p>
                                    ✔️With working PC or laptop, wired or wireless internet connection, and Zoom application<br>
                                    ✔️At least 2 years in college of any course<br>
                                    ✔️Knowledgeable in Google Spreadsheet or Excel<br>
                                    ✔️Basic Communication Skills (English)<br><br>
                                    ✅ CAN START ASAP<br>
                                    ✅ PERMANENT WFH SET UP<br>
                                    ✅ FREE BATHTUB AND KARAOKE ONCE HIRED</p>
                                <h4>TO APPLY:</h4>
                                <p>💬 Message us your FULLNAME, AGE, CONTACT NUMBER, CURRENT LOCATION, and EMAIL ADDRESS for your initial interview.
                                📩 Or you may send your resume to <a href="mailto:movietellehr@gmail.com">movietellehr@gmail.com</a>.</p>
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
