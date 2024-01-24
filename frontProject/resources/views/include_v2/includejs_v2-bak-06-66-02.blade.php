<script src="{{ asset('assets_v2/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets_v2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets_v2/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets_v2/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets_v2/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets_v2/assets/vendor/php-email-form/validate.js') }}"></script>
<!-- Template Main JS File -->
<script src="{{ asset('assets_v2/assets/js/main.js') }}"></script>
<script type="text/javascript">

  if (document.getElementById('state1')) {
    const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
  if (document.getElementById('state2')) {
    const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
    if (!countUp1.error) {
      countUp1.start();
    } else {
      console.error(countUp1.error);
    }
  }
  if (document.getElementById('state3')) {
    const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
    if (!countUp2.error) {
      countUp2.start();
    } else {
      console.error(countUp2.error);
    };
  }
</script>
<!-- toon js -->
<!-- park js -->
<script src="{{ asset('plugins/fontawesome/js/all.js') }}" charset="utf-8"></script>
<script src="{{ asset('jquery/js/jquery.min.js') }}" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
    crossorigin="anonymous">
</script>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}" charset="utf-8"></script>
<script src="{{ asset('plugins/OwlCarousel2-2.3.4/assets/owlcarousel/owl.carousel.js') }}" charset="utf-8"></script>
<script src="{{ asset('plugins/typeahead/jquery.typeahead.js') }}" charset="utf-8"></script>
<script src="{{ asset('js/config.js') }}" charset="utf-8"></script>
<!-- GetButton.io widget -->
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    (function() {
        var options = {
            // facebook: "100063643420173",
            // Facebook page ID
            whatsapp: "+660991463223", // whatsapp
            line: "//line.me/R/ti/p/%40704uwpvc", // Line QR code URL
            button_color: "#dc236f", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,line", // Order of buttons
        };
        var proto = document.location.protocol,
            host = "getbutton.io",
            url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function() {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();

</script>