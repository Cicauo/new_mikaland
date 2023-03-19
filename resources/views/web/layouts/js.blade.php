<!-- plugins:js -->
      <script src="{{ url('web/js/app.js') }}" defer></script>
		<script src="{{url('web/js/vendor/jquery-1.12.4.min.js')}}"></script>
		<!-- Bootstrap JS -->
		<script src="{{url('web/js/vendor/bootstrap.min.js')}}"></script>
		<!-- Tether JS -->
		<script src="{{url('web/js/vendor/tether.min.js')}}"></script>
		<!-- Slicknav JS -->
		<script src="{{url('web/js/vendor/jquery.slicknav.min.js')}}"></script>
		<!-- OWL-Carousel JS -->
		<script src="{{url('web/js/vendor/owl.carousel.min.js')}}"></script>
		<!-- Smooth Scroll JS -->
		<script src="{{url('web/js/vendor/smooth-scroll.min.js')}}"></script>
        <!-- Venobox JS -->
        <script src="{{url('web/js/vendor/venobox.min.js')}}"></script>
		<!-- Ajaxchimp JS -->
		<script src="{{url('web/js/vendor/jquery.ajaxchimp.min.js')}}"></script>
		<!--Slick Slider-->
		<script src="{{url('web/js/vendor/slick.min.js')}}"></script>
		<!--Counterup JS-->
		<script src="{{url('web/js/vendor/jquery.counterup.min.js')}}"></script>
		<!--Waypoints JS-->
		<script src="{{url('web/js/vendor/jquery.waypoints.v2.0.3.min.js')}}"></script>
		<!--YTPlayer Js-->
		<script src="{{url('web/js/vendor/jquery.mb.YTPlayer.min.js')}}"></script>
		<!-- Wow JS -->
		<script src="{{url('web/js/vendor/wow.min.js')}}"></script>
        <!-- Google Map JS -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPH8h1UpcK01BdcvoZeOzq-_wJqRxN1Pc"></script>
		<!-- Main JS -->
		<script src="{{url('web/js/main.js')}}"></script>
        <script src="{{url('web/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
          <script defer src="{{ url('web/vendor/alpine.js') }}"></script>

    <script src="{{ url('web/stisla/js/modules/jquery.min.js') }}"></script>
    
        <script defer async src="{{ url('web/stisla/js/modules/popper.js') }}"></script>
        <script defer async src="{{ url('web/stisla/js/modules/tooltip.js') }}"></script>
        <script defer src="{{ url('web/stisla/js/modules/jquery.nicescroll.min.js') }}"></script>
        <script defer src="{{ url('web/stisla/js/modules/moment.min.js') }}"></script>
        <script defer src="{{ url('web/stisla/js/modules/marked.min.js') }}"></script>
        <script defer src="{{ url('web/vendor/notyf/notyf.min.js') }}"></script>
        <script defer src="{{ url('web/vendor/sweetalert/sweetalert.min.js') }}"></script>
        <script defer src="{{ url('web/stisla/js/modules/chart.min.js') }}"></script>
        <script defer src="{{ url('web/vendor/select2/select2.min.js') }}"></script>

        <script src="{{ url('web/stisla/js/stisla.js') }}"></script>
        <script src="{{ url('web/stisla/js/scripts.js') }}"></script>

<script>
    function hapus(url){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't delete this data",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#696cff',
            cancelButtonColor: '#ff3e1d',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                location.href=url; 
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            }
            })
        }
</script>

<script>
  $(document).ready(function() {
    $('.js-example-basic-single').select2();
  });
</script>