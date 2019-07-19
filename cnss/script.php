    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="assets/js/jquery.cookie.js"></script>
    <script src="assets/js/moment.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/sticky.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.scroll-with-ease.min.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/jquery.form.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/simulation.js"></script>
    <!-- Custom Scripts -->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/app-shop.js"></script>
    <script src="assets/js/color.js"></script >
    <script src="assets/js/forms.js" ></script>
       <script type='text/javascript' src='assets/js/jquery.js'></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type='text/javascript'>
            var gdlr_core_pbf = {
                "admin": "",
                "video": {
                    "width": "640",
                    "height": "360"
                },
                "ajax_url": "https:\/\/demo.goodlayers.com\/kingster\/wp-admin\/admin-ajax.php"
            };
    </script>
    <script type='text/javascript' src='assets/js/page-builder.js'></script>
    <script type='text/javascript' src='assets/js/plugins.min.js'></script>
    <script type="text/javascript">
        $(document).ready(function() {  

            // when the modal is opened autoplay it  
            $('#myModal').on('shown.bs.modal', function (e) {
                
            // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
            $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
            })
              
            // stop playing the youtube video when I close the modal
            $('#myModal').on('hide.bs.modal', function (e) {
                // a poor man's stop video
                $("#video").attr('src',$videoSrc); 
            }) 
    
    </script>
    <script>
  
  window.addEventListener('scroll', function(e) {

    var body = document.getElementById("body");
    var x = body.classList;
    var nbr_px=42;
    var defaut_px =120;

    if (x.item(2) == "stickNav") {
      var stick = document.getElementById("gbn");
      stick.style.transform = 'translateY(' + nbr_px + 'px)';
    } else {
      var stick = document.getElementById("gbn");
      
      stick.style.transform = 'translateY(' + defaut_px + 'px)';
    }
  });
  
</script>
