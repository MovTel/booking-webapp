@include('website.partials.header', ['title' => 'Best Staycations and Hotels in Cebu, Tagaytay, and Manila'])

<!-- CONTENT START -->
<div class="page-content">

    <!-- Banner -->
    <div class="banner-wrap bg-cover"
        style="background-image:url({{ asset('assets') }}/images/background/cover-photo.jpeg); background-position:center;">

        <div class="banner-image">
            <div class="banner-content-area">
                <div class="container">
                    <form>
                        <div class="banner-textrow">
                            <strong>Unlock more earnings, Hour by Hour.</strong>
                            <span>All the hourly rental spaces - from Hotels, karaoke, gym, co-working spaces and more</span>
                        </div>

                        <div class="search-bar-warp row centered">

                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group shadow-line">
                                    <select class="selectpicker">
                                        <option>All Categories</option>
                                        <option value="Acura">Hotels</option>
                                        <option value="Audi">Condominiums</option>
                                        <option value="BMW">Airbnb</option>
                                        <option value="BMW">Apartment</option>
                                        <option value="BMW">Spa</option>
                                        <option value="BMW">Gym</option>
                                        <option value="BMW">Karaoke</option>
                                        <option value="BMW">Co-working</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="form-group shadow-line">
                                    <select class="selectpicker">
                                        <option>Manila</option>
                                        <option value="A4_4 Door Sedan">Tagaytay City</option>
                                        <option value="A5_2 Door Convertible">Cebu City</option>
                                        <option value="A5_2 Door Convertible">Lapulapu City</option>
                                    </select>
                                </div>
                            </div>


                            <div class="text-center search-bar-btn col-lg-12">
                                <button class="site-button-secondry site-btn-effect">Search Places</button>
                            </div>

                        </div>

                        <div class="banner-textrow">
                            <br>
                            <br>
                            <span>Enjoy ultimate flexibility with Movietelle's hourly rentals! Check in anytime
                                with a convenient smart keycard, giving you access to comfortable, private
                                spaces whenever you need them. Perfect for work, relaxation, or a quick
                                getaway—your space, on your schedule.</span>
                        </div>
                    </form>


                </div>
            </div>
        </div>

        <div class="banner-image-overlay" style="opacity:0.3;"></div>
    </div>
    <!-- Banner END -->

    <div class="container main-categories-slider-outer">
        <div class="main-categories-slider">
            <div class="owl-carousel banner-categories owl-btn-vertical-center">

                <div class="item">
                    <a href="#" class="main-categories-box-outer site-text-primary text-center v-icon-effect">
                        <div class="main-categories-box">
                            <div class="main-categories-icon">
                                <img src="{{ asset('assets') }}/images/categories-icon/white/event.png" alt=""
                                    class="v-icon ">
                            </div>
                        </div>
                        <span>Music</span>
                    </a>
                </div>

                <div class="item">
                    <a href="#" class="main-categories-box-outer site-text-primary text-center v-icon-effect">
                        <div class="main-categories-box">
                            <div class="main-categories-icon">
                                <img src="{{ asset('assets') }}/images/categories-icon/white/coffee-cup.png"
                                    alt="" class="v-icon">
                            </div>
                        </div>
                        <span>Co-working</span>
                    </a>
                </div>

                <div class="item">
                    <a href="#" class="main-categories-box-outer site-text-primary text-center v-icon-effect">
                        <div class="main-categories-box ">
                            <div class="main-categories-icon ">
                                <img src="{{ asset('assets') }}/images/categories-icon/white/resort.png" alt=""
                                    class=" v-icon">
                            </div>
                        </div>
                        <span>Karaoke</span>
                    </a>
                </div>

                <div class="item">
                    <a href="#" class="main-categories-box-outer site-text-primary text-center v-icon-effect">
                        <div class="main-categories-box">
                            <div class="main-categories-icon">
                                <img src="{{ asset('assets') }}/images/categories-icon/white/barbell.png" alt=""
                                    class="v-icon">
                            </div>
                        </div>
                        <span>Fitness</span>
                    </a>
                </div>

                <div class="item">
                    <a href="#" class="main-categories-box-outer site-text-primary text-center v-icon-effect">
                        <div class="main-categories-box">
                            <div class="main-categories-icon">
                                <img src="{{ asset('assets') }}/images/categories-icon/white/apartment.png"
                                    alt="" class="v-icon">
                            </div>
                        </div>
                        <span>Movietelle</span>
                    </a>
                </div>

                <div class="item">
                    <a href="#" class="main-categories-box-outer site-text-primary text-center v-icon-effect">
                        <div class="main-categories-box">
                            <div class="main-categories-icon">
                                <img src="{{ asset('assets') }}/images/categories-icon/white/diagram.png" alt=""
                                    class="v-icon">
                            </div>
                        </div>
                        <span>Meeting room</span>
                    </a>
                </div>

                <div class="item">
                    <a href="#" class="main-categories-box-outer site-text-primary text-center v-icon-effect">
                        <div class="main-categories-box">
                            <div class="main-categories-icon">
                                <img src="{{ asset('assets') }}/images/categories-icon/white/event.png" alt=""
                                    class="v-icon ">
                            </div>
                        </div>
                        <span>Music</span>
                    </a>
                </div>

                <div class="item">
                    <a href="#" class="main-categories-box-outer site-text-primary text-center v-icon-effect">
                        <div class="main-categories-box">
                            <div class="main-categories-icon">
                                <img src="{{ asset('assets') }}/images/categories-icon/white/coffee-cup.png"
                                    alt="" class="v-icon">
                            </div>
                        </div>
                        <span>Co-working </span>
                    </a>
                </div>

                <div class="item">
                    <a href="#" class="main-categories-box-outer site-text-primary text-center v-icon-effect">
                        <div class="main-categories-box ">
                            <div class="main-categories-icon ">
                                <img src="{{ asset('assets') }}/images/categories-icon/white/resort.png"
                                    alt="" class=" v-icon">
                            </div>
                        </div>
                        <span>Karaoke</span>
                    </a>
                </div>

                <div class="item">
                    <a href="#" class="main-categories-box-outer site-text-primary text-center v-icon-effect">
                        <div class="main-categories-box">
                            <div class="main-categories-icon">
                                <img src="{{ asset('assets') }}/images/categories-icon/white/barbell.png"
                                    alt="" class="v-icon">
                            </div>
                        </div>
                        <span>Fitness</span>
                    </a>
                </div>

                <div class="item">
                    <a href="#" class="main-categories-box-outer site-text-primary text-center v-icon-effect">
                        <div class="main-categories-box">
                            <div class="main-categories-icon">
                                <img src="{{ asset('assets') }}/images/categories-icon/white/apartment.png"
                                    alt="" class="v-icon">
                            </div>
                        </div>
                        <span>Apartment</span>
                    </a>
                </div>

                <div class="item">
                    <a href="#" class="main-categories-box-outer site-text-primary text-center v-icon-effect">
                        <div class="main-categories-box">
                            <div class="main-categories-icon">
                                <img src="{{ asset('assets') }}/images/categories-icon/white/diagram.png"
                                    alt="" class="v-icon">
                            </div>
                        </div>
                        <span>Business</span>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- WELCOME SECTION START -->
    <div class="section-full p-t80 p-b50 bg-no-repeat bg-center" style="background-image:url({{ asset('assets') }}/images/background/bg-map.png)" id="quick_easy">
        <div class="container">
            <div class="section-content">
                <!-- TITLE START-->
                <div class="section-head text-center">
                    <span class="wt-separator-icon"><i class="sl-icon-location "></i></span>
                    <h2>Quick and easy search</h2>
                    <div class="wt-separator sep-gradient-light"></div>
                    <p>Book rooms by the hour with MOVIETELLE—perfect for short stays, quick breaks, and
                        flexible comfort.</p>
                </div>
                <!-- TITLE END-->

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12 ">
                        <div class="icon-circle-box bg-orange-light v-icon-effect">
                            <div class="wt-icon-box-wraper center p-b50  m-b30 bdr-1 bdr-gray bdr-solid corner-radius">
                                <div class="icon-md m-b20 icon-circle">
                                    <span class="icon-cell">
                                        <i class="im-icon-Four-FingersTouch v-icon "></i>
                                    </span>
                                </div>
                                <div class="icon-content relative">
                                    <h4 class="wt-tilte">Choose a Category</h4>
                                    <span class="icon-count-number">1</span>
                                    <p>Flexible Hourly Rentals with Smart Access—convenience, privacy, and up to
                                        50% off with our exclusive keycard.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 ">
                        <div class="icon-circle-box active bg-orange-light v-icon-effect">
                            <div
                                class="wt-icon-box-wraper center p-b50  m-b30 bdr-1 bdr-gray bdr-solid   corner-radius">
                                <div class="icon-md  m-b20  icon-circle">
                                    <span class="icon-cell">
                                        <i class="im-icon-Map2 v-icon "></i>
                                    </span>
                                </div>
                                <div class="icon-content relative">
                                    <h4 class="wt-tilte">Find Location</h4>
                                    <span class="icon-count-number">2</span>
                                    <p>Prime Locations Across Metro Cebu and Metro Manila – Comfort and
                                        accessibility wherever you are.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 ">
                        <div class="icon-circle-box bg-orange-light v-icon-effect">
                            <div
                                class="wt-icon-box-wraper center p-b50 m-b30  bdr-1 bdr-gray bdr-solid  corner-radius">
                                <div class="icon-md m-b20  icon-circle">
                                    <span class="icon-cell">
                                        <i class="im-icon-User v-icon "></i>
                                    </span>
                                </div>
                                <div class="icon-content relative">
                                    <h4 class="wt-tilte">Contact a Few Owners</h4>
                                    <span class="icon-count-number">3</span>
                                    <p>Found your perfect unit? Contact the owner directly to book and get
                                        started with seamless rentals.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- WELCOME  SECTION END -->

    <!-- MOBILE ANIMATION SECTION START -->
    <div class="section-full  p-t80 p-b140  map-animation-section overlay-wraper bg-cover bg-no-repeat"
        style="background-image:url({{ asset('assets') }}/images/background/2.jfif); background-position:center;">
        <div class="overlay-main site-bg-primary opacity-05"></div>
        <div class="container">


            <div class="section-content">

                <div class="info-video-section text-white">
                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <div class="info-video-title">
                                <h2 class="wt-tilte m-t0">Not sure where to go next? We're here to inspire you
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="video-section">
                                <div class="video-icon-left">
                                    <span>
                                        <a href="https://www.youtube.com/watch?v=L-E-i94N4MY"
                                            class="mfp-video play-now">
                                            <i class="fa fa-play site-text-secondry"></i>
                                            <span class="ripple"></span>
                                        </a>
                                    </span>
                                </div>
                                <div class="video-icon-title">
                                    <span>Watch intro video about MOVIETELLE</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="counter-outer p-t50 p-b20">

                    <div class="row">

                        {{-- <div class="col-md-3 col-sm-6">
                            <div class="m-b30  wt-icon-box-wraper left">
                                <h2 class="counter site-text-secondry">4000</h2>
                                <h4 class="text-white">Happy Customers</h4>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="m-b30 wt-icon-box-wraper left">
                                <h2 class="counter site-text-secondry">9</h2>
                                <h4 class="text-white">Total Listing</h4>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="m-b30 wt-icon-box-wraper left">
                                <h2 class="counter site-text-secondry">3</h2>
                                <h4 class="text-white">All Categories</h4>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="m-b30 wt-icon-box-wraper left">
                                <h2 class="counter site-text-secondry">1</h2>
                                <h4 class="text-white">Won Awards </h4>
                            </div>
                        </div> --}}

                    </div>

                </div>


                <div class="map-animation-block">

                    <div class="map-marker-block">
                        <img src="{{ asset('assets') }}/images/map-ani/3d-map.png" alt="" class="map-bg">

                        <div class="map-marker-position position-1">
                            <div class="map-marker  vert-move1">
                                <div class='map-pin site-bg-secondry'><img
                                        src="{{ asset('assets') }}/images/map-ani/burger.png" alt="">
                                </div>
                                <div class='pin-pulse'></div>
                            </div>
                        </div>

                        <div class="map-marker-position position-2 scale-75">
                            <div class="map-marker vert-move2">
                                <div class='map-pin site-bg-secondry'><img
                                        src="{{ asset('assets') }}/images/map-ani/dumbbell.png" alt=""></div>
                                <div class='pin-pulse'></div>
                            </div>
                        </div>

                        <div class="map-marker-position position-3 scale-75">
                            <div class="map-marker  vert-move2">
                                <div class='map-pin site-bg-secondry'><img
                                        src="{{ asset('assets') }}/images/map-ani/first-aid-kit.png" alt="">
                                </div>
                                <div class='pin-pulse'></div>
                            </div>
                        </div>

                        <div class="map-marker-position position-4 scale-50">
                            <div class="map-marker  vert-move2">
                                <div class='map-pin site-bg-secondry'><img
                                        src="{{ asset('assets') }}/images/map-ani/dog.png" alt="">
                                </div>
                                <div class='pin-pulse'></div>
                            </div>
                        </div>

                        <div class="map-marker-position position-5 scale-50">
                            <div class="map-marker vert-move1">
                                <div class='map-pin site-bg-secondry'><img
                                        src="{{ asset('assets') }}/images/map-ani/car.png" alt="">
                                </div>
                                <div class='pin-pulse'></div>
                            </div>
                        </div>

                        <div class="map-marker-position position-6 scale-50">
                            <div class="map-marker  vert-move2">
                                <div class='map-pin site-bg-secondry'><img
                                        src="{{ asset('assets') }}/images/map-ani/scissors.png" alt=""></div>
                                <div class='pin-pulse'></div>
                            </div>
                        </div>

                        <div class="map-marker-position position-7 scale-50">
                            <div class="map-marker vert-move1">
                                <div class='map-pin site-bg-secondry'><img
                                        src="{{ asset('assets') }}/images/map-ani/bulb.png" alt="">
                                </div>
                                <div class='pin-pulse'></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
    <!-- MOBILE ANIMATION SECTION END -->


    <!-- DESTINATION WE LOVE SECTION START -->
    <div class="section-full  p-t80 p-b50 site-bg-primary dot-left-top-bg-dark bg-repeat-x bg-bottom-center"
        style="background-image:url({{ asset('assets') }}/images/background/bg-building.png);@if(count($units_global) == 0)padding-top: 0;@endif">

        @if(count($units_global))
        <div class="container">
            <!-- TITLE START-->
            <div class="section-head text-center text-white">
                <span class="wt-separator-icon"><i class="sl-icon-location "></i></span>
                <h2>Destination we love</h2>
                <div class="wt-separator sep-gradient-dark"></div>
                <p>Discover Movietelle recommended by our bookers!</p>
            </div>
            <!-- TITLE END-->
        </div>


        <div class="section-content container">
            <!-- PAGINATION START -->
            <div class="filter-wrap p-b20 text-center">
                <ul class="filter-navigation masonry-filter filter-gradi">
                    @if(count($locations_global))
                    <li class="active"><a data-filter="*" data-hover="All" href="#">All City</a></li>
                    @endif
                    @foreach ($locations_global as $location)
                        <li><a data-filter=".{{ $location }}" href="javascript:;">{{ $location }}</a></li>
                    @endforeach
                </ul>
            </div>
            <!-- PAGINATION END -->
            <!-- GALLERY CONTENT START -->
            <div class="masonry-wrap mfp-gallery work-grid row clearfix">

                <!-- COLUMNS 1 -->
                @foreach ($units_global as $unit)
                    <div class="masonry-item {{ $unit->location }}  col-lg-4 col-md-6 col-sm-12 m-b30">
                        <div class="cities-slide-box bg-cover bg-no-repeat"
                            style="background-image:url(@if($unit->coverImage){{ url($unit->coverImage->image_path) }}@endif)">
                            <span class="cities-slide-user color-lebel clr-pink">₱{{ $unit->hourly }}/HR</span>
                            <div class="cities-slide-text text-white">
                                <div class="cities-location-sign"><i class="sl-icon-location "></i></div>
                                <div class="city-slide-content">
                                    <h4 class="cities-slide-name">{{ $unit->property_name }}</h4>
                                </div>
                            </div>
                            <div class="cities-slide-overlay"></div>
                            <a href="{{ url('properties/' . $unit->id) }}" class="cities-slide-linking"></a>
                        </div>
                    </div>
                @endforeach

                <!-- GALLERY CONTENT END -->
            </div>


        </div>
        <!-- DESTINATION WE LOVE SECTION START -->
        @endif



        <!-- PRICING TABLE SECTION START -->
        <div class="section-full p-t80 p-b50 bg-white">
            <div class="container">
                <!-- TITLE START-->
                <div class="section-head text-center">
                    <span class="wt-separator-icon"><i class="sl-icon-location "></i></span>
                    <h2>Choose the package</h2>
                    <div class="wt-separator sep-gradient-light"></div>
                    <p>Get exclusive access to all rooms with a smart keycard—plus, enjoy up to 50% off and no
                        renewal fee for the first 100 keycard holders!</p>
                </div>
                <!-- TITLE END-->

                <div class="section-content">
                    <div class="pricingtable-row m-b30 no-col-gap">
                        <div class="row d-flex justify-content-center">

                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="pricingtable-wrapper">
                                    <div class="pricingtable-inner bg-orange-light2 dot2-left-top-img">
                                        <div class="pricing-table-top-section">
                                            <div class="pricingtable-title">
                                                <h4>Basic</h4>
                                            </div>

                                            <div class="pricingtable-price">
                                                <span class="pricingtable-bx"><sup
                                                        class="pricingtable-sign">₱</sup>299</span>
                                                <span class="pricingtable-type">one-time payment</span>

                                            </div>

                                        </div>

                                        <ul class="pricingtable-features">
                                            <li>15% Discount</li>
                                            <li>Lifetime membership</li>
                                            <li>no renewal fee</li>
                                            <li>First 100 members only</li>
                                            <li>Get ONE SMART KEYCARD</li>
                                            <li>ACCESS ALL ROOMS</li>
                                        </ul>

                                        <div class="pricingtable-footer">
                                            <a href="javascript:void(0);" class="site-button site-button-gradient">Get
                                                started</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="pricingtable-wrapper pricingtable-highlight-outer">
                                    <div class="pricingtable-inner pricingtable-highlight dot2-left-top-img">
                                        <div class="pricing-table-top-section">
                                            <div class="pricingtable-title">
                                                <h4>Premium</h4>
                                            </div>

                                            <div class="pricingtable-price">
                                                <span class="pricingtable-bx"><sup
                                                        class="pricingtable-sign">₱</sup>399</span>
                                                <span class="pricingtable-type">one-time payment</span>
                                            </div>

                                        </div>

                                        <ul class="pricingtable-features">
                                            <li>25% Discount</li>
                                            <li>Lifetime membership</li>
                                            <li>no renewal fee</li>
                                            <li>First 100 members only</li>
                                            <li>Get ONE SMART KEYCARD</li>
                                            <li>ACCESS ALL ROOMS</li>
                                        </ul>

                                        <div class="pricingtable-footer">
                                            <a href="javascript:void(0);"
                                                class="site-button-secondry  site-button-gradient">Get
                                                started</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="pricingtable-wrapper">
                                    <div class="pricingtable-inner bg-orange-light2 dot2-left-top-img">
                                        <div class="pricing-table-top-section">
                                            <div class="pricingtable-title">
                                                <h4>ELITE</h4>
                                            </div>

                                            <div class="pricingtable-price">
                                                <span class="pricingtable-bx"><sup
                                                        class="pricingtable-sign">₱</sup>499</span>
                                                <span class="pricingtable-type">one-time payment</span>

                                            </div>

                                        </div>

                                        <ul class="pricingtable-features">
                                            <li>50% Discount</li>
                                            <li>Lifetime membership</li>
                                            <li>no renewal fee</li>
                                            <li>First 100 members only</li>
                                            <li>Get ONE SMART KEYCARD</li>
                                            <li>ACCESS ALL ROOMS</li>
                                        </ul>

                                        <div class="pricingtable-footer">
                                            <a href="javascript:void(0);" class="site-button site-button-gradient">Get
                                                started</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PRICING TABLE SECTION END -->

    </div>
    <!-- CONTENT END -->

    @include('website.partials.footer')
