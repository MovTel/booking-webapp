</div>

</div>

</div>

<!-- LOADING AREA START ===== -->
{{-- <div class="loading-area">
<div class="loading-box"></div>
<div class="loading-pic">
  <img src="{{ asset('assets/images/movietelle.png') }}" alt="" class="load-bounce movietelle-loader">
  <div class='load-pin load-bounce'></div>
<div class='load-pulse'></div>	
  <div class="cssload-container">
      <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
  </div>
</div>
</div> --}}

@if(session('message'))
<x-prompt :data="session('message')"/>
@endif

<!-- LOADING AREA  END ====== -->

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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_8C7p0Ws2gUu7wo0b6pK9Qu7LuzX2iWY&amp;libraries=places&amp;"></script>
<script src="{{ asset('/assets') }}/js/infobox.min.js"></script><!-- MAP CLUSTER  -->
<script src="{{ asset('/assets') }}/js/markerclusterer.js"></script><!-- MAP CLUSTER  -->
<script src="{{ asset('/assets') }}/js/maps.js"></script><!-- MAP CLUSTER  -->
<script src="{{ asset('/assets') }}/js/map-cluster-rating.js"></script><!-- MAP CLUSTER  -->

<script src="{{ asset('/assets') }}/js/m-custom-scrollbar.min.js"></script><!-- my account left panel scroller -->
<!-- Timing Countdown -->
<script src="{{ asset('/assets') }}/js/kinetic.js"></script>
<script src="{{ asset('/assets') }}/js/jquery.final-countdown.js"></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script><!-- CALENDAR PACKAGE  -->
<script src="{{ asset('/assets') }}/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{ asset('/assets') }}/js/main.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{ asset('/assets') }}/js/calendar.js"></script><!-- CUSTOM FUCTIONS  -->

</body>

</html>