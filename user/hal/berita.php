<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Web Company Profil</title>

  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style-starter.css">

  <style>
    .img-news {
      width: 400px;
      height: 350px;
    }
  </style>

</head>

<body>
  <!-- breadcrum -->
  <section class="w3l-deal-breadcrum">
    <div class="breadcrum">
      <div class="container">
        <p><a href=".">Home</a> &nbsp; / &nbsp; Berita</p>
      </div>
    </div>
  </section>
  <!-- Berita -->
  <section class="w3l-services3 py-5">
    <div class="container py-lg-3 mt-3">
        <div class="row align-items-center">
        <?php
          $sql = "SELECT * FROM berita";
          $q = mysqli_query($k, $sql);
          while ($r = mysqli_fetch_assoc($q)) {
          ?>
            <div class="col-sm-6 book-info">
                <h3 class="mb-md-4 mb-3"><?= $r['judul_berita'] ?></h3>
                <h5><?= $r['tanggal'] ?></h5>
                <p class="mb-md-5 mb-4" style="text-align: justify;"><?= $r['content_berita'] ?></p>
            </div>
            <div class="col-sm-6">
               <img src="gambar/<?= $r['gambar'] ?>" class="img-fluid img-news img-curve" alt="" />
            </div>
            <?php } ?>
        </div>
    </div>
</section>
  <!-- //News Section -->


  <!-- jQuery -->
  <script src="../assets/js/jquery-3.4.1.slim.min.js"></script>

  <!-- Template JavaScript -->
  <!-- stats number counter-->
  <script src="../assets/js/jquery.waypoints.min.js"></script>
  <script src="../assets/js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->

  <script src="../assets/js/jquery.magnific-popup.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
      });

      $('.popup-with-move-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-slide-bottom'
      });
    });
  </script>

  <script src="../assets/js/owl.carousel.js"></script>

  <!-- testimonials for owlcarousel -->
  <script>
    $(document).ready(function() {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: false
          },
          1000: {
            items: 1,
            nav: false
          }
        }
      })
    })
  </script>
  <!-- //testimonials script for owlcarousel -->

  <!-- for blog carousel slider -->
  <script>
    $(document).ready(function() {
      $('.owl-two').owlCarousel({
        stagePadding: 20,
        margin: 15,
        nav: false,
        loop: false,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 3
          }
        }
      })
    })
  </script>
  <!-- //for blog carousel slider -->

  <script>
    var lFollowX = 0,
      lFollowY = 0,
      x = 0,
      y = 0,
      friction = 1 / 30;

    function animate() {
      x += (lFollowX - x) * friction;
      y += (lFollowY - y) * friction;

      translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

      $('.banner-image').css({
        '-webit-transform': translate,
        '-moz-transform': translate,
        'transform': translate
      });

      window.requestAnimationFrame(animate);
    }

    $(window).on('mousemove click', function(e) {

      var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
      var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
      lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
      lFollowY = (10 * lMouseY) / 100;

    });

    animate();
  </script>

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function() {
      $('.navbar-toggler').click(function() {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function() {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function() {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <!-- Bootstrap JS -->
  <script src="../assets/js/bootstrap.min.js"></script>

</body>

</html>