@include('website.partials.header', ['title' => '404 Not Found'])

<!-- CONTENT START -->
<div class="page-content">

    <!-- Error SECTION START -->
    <div class="section-full p-t80 p-b50 bg-white bg-no-repeat bg-bottom-left"
        style="background-image:url({{ asset('assets') }}/images/background/bg-building.png)">
        <div class="container">
            <div class="section-content">

                <div class="page-notfound text-center">
                    <form method="post">
                        <h3>Error</h3>
                        <strong>404</strong>
                        <h4>Oops! Looks like the page is gone.</h4>
                        <h6>This is not the page your are looking for. Reach out with your feelings and try refining your search or return to base.</h6>

                        <a href="{{ url('/') }}" class="site-button-secondry site-btn-effect">GO TO HOME</a>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Error  SECTION END -->




</div>
<!-- CONTENT END -->

@include('website.partials.footer')
