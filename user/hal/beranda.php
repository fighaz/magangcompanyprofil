<style>
    .img-berita {
      width: 350px;
      height: 200px;
    }
    p#paragraf{
      text-align: justify;
    }

  </style>
  <!--/header-->
  <div class="w3l-banner">
    <div class="banner-image">
      <img src="" alt="">
    </div>
    <div class="banner-content">
      <div class="container">

      </div>
    </div>
  </div>
  <!--  -->
<!-- Agenda -->
<section class="w3l-index1">
  <div class="services-6 py-5">
    <div class="container py-lg-3">
      <div class="header-section">
        <h3>Tentang Agenda Kami</h3>
        <div class="row stats-con text-white">
          <?php
          $sql = "SELECT * FROM agenda order by id_agenda desc limit 4";
          $q = mysqli_query($k, $sql);
          while ($r = mysqli_fetch_assoc($q)) {
          ?>

            <div class="col-lg-3 col-sm-6 ">
              <div class="serve-6-hny">
                <div class="serve-6-hny-icon">
                  <span class="fa fa-pencil-square-o"></span>
                </div>
                <div class="serve-6-hny-info">
                  <h6 class="date"><a href="services.html"><?= $r['tanggal'] ?></a></h6>
                  <p><?= $r['content_agenda'] ?></p>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Agenda -->
<!--  Galeri-->
<section class="w3l-index5 py-5">
  <div class="container py-lg-5 py-md-3">
    <div class="row">
      <div class="col-lg-4">
        <div class="header-section">
          <h3>Galeri Tentang Kami </h3>
          <p class="mt-3 mb-lg-5 mb-4">Beberapa Foto Kegiatan Terdapat Disini
        </div>
        <a href="?hal=galeri" class="btn btn-outline-primary theme-button">Lihat Selebihnya</a>
      </div>
      <?php
      $sql1 = "SELECT * FROM galeri order by id_galeri desc limit 2";
      $q1 = mysqli_query($k, $sql1);
      while ($r1 = mysqli_fetch_assoc($q1)) {
      ?>
        <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
          <div class="img-block">
            <a href="about.html">
              <img src="gambar/<?= $r1['gambar'] ?>" class="img-fluid img-news" alt="image" width="350" height="200" />
              <span class="title"><?= $r1['judul_galeri'] ?></span>
            </a>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  </div>
</section>

<!-- News Section -->
<section class="w3l-news" id="news">
  <section id="grids5-block" class="py-5">
    <div class="container py-lg-3">
      <div class="header-section mb-4">
        <h3>Berita Terkini
        </h3>
      </div>
      <div class="grid-view">
        <div class="row">
          <?php
          $sql2 = "SELECT * FROM berita order by id_berita limit 3";
          $q2 = mysqli_query($k, $sql2);
          while ($r2 = mysqli_fetch_assoc($q2)) {
          ?>
            <div class="col-lg-4 col-md-6 mt-md-4 mt-4">
              <div class="grids5-info">
                <a href="#blog-single.html" class="d-block zoom"><img src="gambar/<?= $r2['gambar'] ?>" alt="" width="350" height="200" class="img-fluid img-news" /></a>
                <div class="blog-info">
                  <h4><a href="#blog-single.html"><?= $r2['judul_berita'] ?></a></h4>
                  <p class="date"><?= $r2['tanggal'] ?></p>
                  <p class="text" style="text-align: justify;"><?= $r2['content_berita'] ?></p>
                  <a href="?hal=berita" class="btn btn-news">Read More <span class="fa fa-arrow-right" aria-hidden="true"></span> </a>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>

    </div>
  </section>
</section>