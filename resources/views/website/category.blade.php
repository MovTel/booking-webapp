@include('website.partials.header', ['title' => ucfirst($category) ])
<!-- CONTENT START -->
<div class="page-content">
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('assets') }}/images/background/cover-photo.jpeg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="text-white">Movietelle {{ ucfirst($category) }}</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>{{ ucfirst( $category) }}</li>
                    </ul>
                </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- SECTION CONTENT START -->
    <div class="section-full small-device p-tb80 bg-white">
        <div class="container">
            <!-- GALLERY CONTENT START -->
            <div class="news-grid clearfix row">

                @foreach($units as $unit)
                <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                    <div class="blog-post blog-grid-1 overlay-wraper post-overlay  large-date bg-cover bg-no-repeat bg-top-center"
                        style="background-image:url({{ url($unit->coverImage->image_path) }})">
                        <div class="overlay-main overlay-gradient"></div>
                        {{-- <div class="blog-category"><span class="clr-red">Fitness</span></div> --}}
                        <div class="wt-post-info text-white">
                            <div class="post-overlay-position">
                                <div class="post-content-outer p-a30">

                                    <div class="wt-post-title ">
                                        <h4 class="post-title"><a href="{{ url('properties/' . $unit->id ) }}"
                                                class="text-white text-capitalize">{{ $unit->property_name }}</a></h4>
                                    </div>
                                    <div class="wt-post-meta ">
                                        <ul>
                                            {{-- <li class="post-date  site-text-secondry">17 Nov 2019</li> --}}
                                            <li class="post-author">{{ $unit->location }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <!-- GALLERY CONTENT END -->

            {{-- <ul class="pagination m-b0 p-b0">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>                 --}}
        </div>
    </div>
    <!-- SECTION CONTENT END  -->

</div>
<!-- CONTENT END -->

@include('website.partials.footer')
