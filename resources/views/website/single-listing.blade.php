@include('website.partials.header', ['title' => $unit->property_name, 'cover_image' => $unit->coverImage->image_path])
<!-- CONTENT START -->
<div class="page-content bg-white">

    <!-- Section content -->
    <div class="owl-carousel wt-list-single-provider-gallery mfp-gallery gallery  owl-btn-vertical-center bg-white">
        @foreach ($unit->property_image as $image)
            <div class="item">
                <div class="wt-list-single2-gallery-wrap">
                    <div class="wt-list-single2-gallery-overlay"></div>
                    <div class="wt-list-single2-gallery-pic"><img src="{{ url($image->image_path) }}" alt=""
                            class="fixed-mv-size"></div>
                    <a href="{{ url($image->image_path) }}" class="mfp-link wt-list-single2-gallery-zoom"><i
                            class="fa fa-arrows-alt"></i></a>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Section content END -->

    <div class="section-full p-tb50">
        <div class="container">
            <!-- provider info -->
            <div class="wt-list-single-info-bar wt-list-panel bg-white">
                <div class="wt-list-single-info-box-top">
                    <div class="row">

                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="wt-list-single-info-box ">
                                <div class="wt-list-single-site-info clearfix">
                                    {{-- <div class="listing-place-logo"><img src="{{ asset('assets') }}/images/place-logo/1.jpg" alt=""></div> --}}
                                    <div class="wt-list-single-info-detail">
                                        <h3 class="wt-list-single-title">{{ $unit->property_name }}</h3>
                                        <span class="hosted-by"> Hosted By<strong>Movietelle</strong></span>
                                        {{-- <div class="wt-list-single-ratings">
                                                  <div class="star-rating-input text-yellow">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star-half"></i>
                                                      <i class="fa fa-star-o"></i>
                                                  </div>
                                                  <span class="star-rating-counts">3.5</span>
                                                  <label>(31 Reviews)</label>
                                              </div> --}}
                                    </div>
                                </div>

                                {{-- <div class="wt-list-single-info-box-btns">
                                      <button class="site-button-small"><i class="fa fa-check"></i> Verified</button>
                                      <button class="site-button-small"><i class="fa fa-heart"></i> Add To Favorite</button>
                                      <button class="site-button-small"><i class="fa fa-hand-o-right"></i> Add Review</button>
                                      <button class="site-button-small"><i class="fa fa-eye"></i> Viewed</button>
                                  </div>  --}}



                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="wt-list-single3-location-info">
                                <ul class="list-unstyled m-b0">
                                    <li><span><i class="fa fa-map-marker site-text-secondry"></i></span>
                                        <p>{{ $unit->property_address }}</p>
                                    </li>
                                    <li><span><i class="fa fa-phone site-text-secondry"></i></span>
                                        <p><a href="tel:09976044637">09976044637</a></p>
                                    </li>
                                    {{-- <li><span><i class="fa fa-envelope site-text-secondry"></i></span><p>info@thewebmax.com  </p></li> --}}
                                    <li><span><i class="fa fa-globe site-text-secondry"></i></span>
                                        <p><a href="{{ $unit->property_view }}">Property 360° View</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--provider info End -->
        </div>
    </div>

    <div class="section-full p-b50">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 col-md-12">


                    <!-- About Detail-->
                    <div class="wt-list-panel m-b30  p-a20 bg-white shadow">
                        <div class="wt-list-single-about-detail">
                            <div class="m-b30 text-left">
                                <h4 class="wt-list-panel-title m-t0">About {{ $unit->property_name }}</h4>
                                <div class="wt-separator sep-gradient-light"></div>
                            </div>

                            {!! nl2br(e($unit->property_description)) !!}

                        </div>
                    </div>
                    <!-- About Detail End-->

                    <!--Gallery-->
                    <div class="wt-list-panel m-b30  p-a20 bg-white shadow">
                        <div class="m-b30 text-left">
                            <h4 class="wt-list-panel-title m-t0">Gallery</h4>
                            <div class="wt-separator sep-gradient-light"></div>
                        </div>
                        <div class="wt-box wt-product-gallery on-show-slider">

                            <div id="sync1" class="owl-carousel owl-theme owl-btn-vertical-center m-b5">
                                @foreach ($unit->property_image as $image)
                                    <div class="item">
                                        <div class="mfp-gallery">
                                            <div class="wt-box">
                                                <div class="wt-thum-bx wt-img-overlay1 ">
                                                    <img src="{{ url($image->image_path) }}" alt=""
                                                        class="fixed-size">
                                                    <div class="overlay-bx">
                                                        <div class="overlay-icon">
                                                            <a class="mfp-link" href="{{ url($image->image_path) }}"> <i
                                                                    class="fa fa-arrows-alt wt-icon-box-xs site-bg-secondry"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div id="sync2" class="owl-carousel owl-theme">
                                @foreach ($unit->property_image as $image)
                                    <div class="item">
                                        <div class="wt-media">
                                            <img src="{{ url($image->image_path) }}" alt="" class="fixed-size-thumb">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--Gallery -->

                    <!-- Amenities -->
                    <div class="wt-list-panel m-b30  p-a20 bg-white shadow">
                        <div class="wt-list-single-amenities">
                            <div class="m-b30 text-left">
                                <h4 class="wt-list-panel-title m-t0">Amenities and Features</h4>
                                <div class="wt-separator sep-gradient-light"></div>
                            </div>
                            <ul class="wt-single-amenities-list clearfix  equal-wraper">

                                @if (in_array(1, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-check"></i></span></div> <strong>Pool</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(2, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-check"></i></span></div> <strong>Gym</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(3, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-check"></i></span></div>
                                            <strong>Playground</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(4, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-check"></i></span></div> <strong>Bathtub</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(5, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-check"></i></span></div> <strong>Sauna</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(6, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-check"></i></span></div> <strong>BBQ
                                                Grill</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(7, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-check"></i></span></div> <strong>Outdoor Dining
                                                Area</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(8, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-check"></i></span></div> <strong>Fire Pit</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(9, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-check"></i></span></div> <strong>Pool
                                                Table</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(10, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-check"></i></span></div> <strong>Indoor
                                                Fireplace</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(11, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-check"></i></span></div> <strong>Piano</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(12, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-check"></i></span></div> <strong>Exercise
                                                Equipment</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(13, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-check"></i></span></div> <strong>Lake
                                                Access</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(14, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-check"></i></span></div> <strong>Beach
                                                Access</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(15, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-check"></i></span></div> <strong>Outdoor
                                                Shower</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(16, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-tv"></i></span></div> <strong>TV (40")</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(17, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-tv"></i></span></div> <strong>TV (55")</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(18, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-tv"></i></span></div> <strong>TV (65")</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(19, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-hotel"></i></span></div> <strong>Bed Size (Semi -
                                                Double)</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(20, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-hotel"></i></span></div> <strong>Bed Size
                                                (Double)</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(21, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-hotel"></i></span></div> <strong>Bed Size
                                                (Single)</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(22, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-hotel"></i></span></div> <strong>Bed Size
                                                (Queen)</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(23, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-hotel"></i></span></div> <strong>Bed Size (Bunk
                                                Bed)</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(24, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-hotel"></i></span></div> <strong>Bed Size
                                                (Twin)</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(25, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-hotel"></i></span></div> <strong>Bed Size
                                                (Pull-out Bed)</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(26, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-hotel"></i></span></div> <strong>Bed Size (Sofa
                                                Bed)</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(27, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-automobile"></i></span></div> <strong>Parking
                                                (Car)</strong>
                                        </div>
                                    </li>
                                @endif

                                @if (in_array(28, $amenities))
                                    <li class="equal-col">
                                        <div class="amen-outer">
                                            <div class="ameni-icon"><span class="features-icon"><i
                                                        class="fa fa-motorcycle"></i></span></div> <strong>Parking
                                                (Motorcycle)</strong>
                                        </div>
                                    </li>
                                @endif

                            </ul>
                        </div>
                    </div>
                    <!-- Amenities End-->

                    <!-- Location -->
                    <div class="wt-list-panel m-b30  p-a20 bg-white shadow ">
                        <div class="m-b30 text-left">
                            <h4 class="wt-list-panel-title m-t0">Location Map</h4>
                            <div class="wt-separator sep-gradient-light"></div>
                        </div>
                        <div class="wt-list-single-map">
                            <div id="singleListingMap-container-2">
                                <iframe src="{{ $unit->maps_url }}" frameborder="0" width="100%"
                                    height="300"></iframe>
                            </div>
                        </div>
                    </div>
                    <!-- Location End-->

                </div>

                <div class="col-lg-4 col-md-12">

                    <!-- Opening Hour-->
                    <div class="wt-list-panel  p-a20 bg-white m-b30 shadow">
                        <div class="wt-list-single-about-detail">
                            <div class="m-b30 text-left">
                                <h4 class="wt-list-panel-title m-t0">Prices</h4>
                                <div class="wt-separator sep-gradient-light"></div>
                            </div>
                            <ul class="list-unstyled wt-list-working-hours m-b0">
                                <li><span><i class="fa fa-circle"></i>Asking Price per hour (min of
                                        4hrs)</span><span>₱{{ $unit->per_hour_4_hrs }}</span></li>
                                <li><span><i class="fa fa-circle"></i>Discounted per hour (min of
                                        12hrs)</span><span>₱{{ $unit->per_hour_12_hrs }}</span></li>
                                <li><span><i class="fa fa-circle"></i>Discounted per hour (min of
                                        24hrs)</span><span>₱{{ $unit->per_hour_24_hrs }}</span></li>
                                <li><span><i class="fa fa-circle"></i>Discount for more than
                                        48hrs</span><span>{{ $unit->plus_48_hrs_formatted }}</span></li>
                                <li><span><i
                                            class="fa fa-circle"></i>Downpayment</span><span>₱{{ $unit->downpayment }}</span>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <!-- Opening Hour End-->

                    <div class="form-group calendar">
                        <div id="calendar"></div>
                    </div>
                    
                    @if($logged_in)
                        <a href="{{ url('booking/'. $unit->id . '?date=' . $date) }}" class="book-now-cta">BOOK NOW</a>
                    @else
                        <a href="javascript:;" class="book-now-cta" data-target=".sign-in-modal" data-toggle="modal"></i>BOOK NOW</a>
                    @endif

                </div>
            </div>

        </div>
    </div>

</div>
<!-- CONTENT END -->


@include('website.partials.footer')
