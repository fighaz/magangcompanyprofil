<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
include "config/koneksi.php"
?>
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
  <link rel="stylesheet" href="user/assets/css/style-starter.css">
  <style>
    .img-news {
      width: 450px;
      height: 300px;
    }

    .bg-footer {
      background-color: whitesmoke;
    }
  </style>
</head>

<body>
  <!--header-->
  <div class="w3l-top-header">
    <header id="site-header" class="fixed-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark stroke">
          <a class="navbar-brand" href=".">
            <img src="gambar/Probolinggo.png" alt="Your logo" title="Your logo" style="height:70px;" />
          </a>

          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
            <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item active">
                <a class="nav-link" href="?hal=index">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link effect-3" href="?hal=about">About</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link effect-3" href="?hal=berita">News</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link effect-3" href="?hal=agenda">Agenda</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link effect-3" href="?hal=galeri">Galery</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link effect-3" href="#contact">Contact</a>
              </li>
            </ul>
            <div class="phone">
              <a href="tel:+62335 846665"><span class="fa fa-phone" aria-hidden="true"></span> +62335 846665</a>
            </div>
          </div>
        </nav>
      </div>
    </header>
  </div>
  <!--  -->
  <main>
    <div class="container-fluid">

      <?php
      $hal = @$_GET['hal'];
      $beranda = "user/hal/beranda.php";
      $p = "user/hal/$hal.php";
      if (!empty($hal) && file_exists($p)) {
        include "$p";
      } else {
        include "$beranda";
      }
      ?>
    </div>
  </main>
  <!--  -->
  <!-- //Message Section -->
  <!-- //footer Section -->
  <section class="w3l-contact" id="contact">
    <div class="contact-form py-5">
      <div class="container py-lg-3">
        <div class="contacts12-main">
          <div class="header-section text-center mb-5">
            <h3>Kritik Dan Saran</h3>
          </div>
          <form action="" method="post">
            <div class="main-input">
              <div>
                <label class="field-info">Name</label>
                <input type="text" name="xname" id="" placeholder="Masukkan Nama" class="contact-input" />
              </div>
              <div>
                <label class="field-info">Email <span class="compulsary">*</span></label>
                <input type="email" name="xmail" id="" placeholder="Masukkan Email" class="contact-input" required />
              </div>
              <div>
                <label class="field-info">Subject</label>
                <input type="text" name="xsubject" id="" placeholder="Masukkan Subject" class="contact-input" />
              </div>
            </div>
            <label class="field-info">Message <span class="compulsary">*</span></label>
            <textarea class="contact-textarea" name="xmessage" id="" placeholder="Pesan yang ingin disampaikan" required></textarea>
            <div class="text-center">
              <input type="submit" name="kirim" value="Kirim" class="btn btn-primary theme-button">
            </div>
            <?php
            if (@$_POST['kirim']) {
              $nama = $_POST['xnama'];
              $email = $_POST['xmail'];
              $subject = $_POST['xsubject'];
              $message = $_POST['xmessage'];
              mysqli_query($k, "INSERT INTO pesan(nama,email,subjek,pesan)VALUES('$nama','$email','$subjek','$message')");
              echo "<script>alert('Pesan Berhasil Disimpan');location='.'</script>";
            }
            ?>
          </form>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <!-- footer -->
    <section class="w3l-footer">
      <div class="w3l-footer-16-main py-5 bg-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 column">
              <div class="row">
                <div class="col-md-8 column">
                  <h3>Contact</h3>

                  <div class="ad-text-inf">
                    <p><span class="color-ubd">Alamat :</span>
                      Jalan: Raya Panglima Sudirman No. 134
                      Kota Kraksaan</p>
                  </div>
                  <div class="ad-text-inf">
                    <p><span class="color-ubd">Email :</span> <a href="mailto:redaksi@probolinggokab.go.id">redaksi@probolinggokab.go.id</a></p>
                  </div>
                  <div class="ad-text-inf">
                    <p><span class="color-ubd">Phone :</span> <a href="tel:+62335 846665">+62335 846665</a></p>
                  </div>
                </div>
                <div class="col-md-4 column mt-md-0 mt-4">
                  <h3>Company</h3>
                  <ul class="footer-gd-16">
                    <li><a href=".">Home</a></li>
                    <li><a href=".?=about">About Us</a></li>
                    <li><a href=".?=berita">Berita</a></li>
                    <li><a href=".?=agenda">Agenda</a></li>
                    <li><a href=".?=galeri">Galeri</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 column column3 mt-lg-0 mt-5">
              <h3>Latest Posts</h3>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.262093855142!2d113.41377311432609!3d-7.7620047791310505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7005af3181627%3A0x4b033c7ae3a4880e!2sKantor%20Bupati%20Probolinggo!5e0!3m2!1sid!2sid!4v1618276956522!5m2!1sid!2sid" width="350" height="250" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <div class="col-lg-4 col-md-6 column column4 mt-lg-0 mt-5">
              <img src="gambar/Probolinggo.png" alt="" height="250px" width="350px">
              <h4>Badan Keuangan Daerah Kab.Probolinggo</h4>
              <p>Website ini digunakan untuk mempermudah masyarakat dalam mengakses informasi tentang Badan Keuangan Daerah Kab. Probolinggo</p>
            </div>
          </div>
          <div class="d-flex below-section justify-content-between align-items-center pt-4 mt-5">
            <div class="columns text-lg-left text-center">
              <p>&copy; 2020 Deal. All rights reserved. Design by <a href="https://w3layouts.com/" target="_blank">
                  Fighaz</a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- move top -->
      <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up"></span>
      </button>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
          scrollFunction()
        };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- //move top -->
      <script>
        $(function() {
          $('.navbar-toggler').click(function() {
            $('body').toggleClass('noscroll');
          })
        });
      </script>
  </footer>
  </section>
  <!-- jQuery -->
  <script src="user/assets/js/jquery-3.4.1.slim.min.js"></script>

  <!-- Template JavaScript -->
  <!-- stats number counter-->
  <script src="user/assets/js/jquery.waypoints.min.js"></script>
  <script src="user/assets/js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->

  <script src="user/assets/js/jquery.magnific-popup.min.js"></script>
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

  <script src="user/assets/js/owl.carousel.js"></script>

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
  <script src="user/assets/js/bootstrap.min.js"></script>

</body>

</html>