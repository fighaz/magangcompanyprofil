<section class="w3l-deal-breadcrum">
  <div class="breadcrum">
    <div class="container">
      <p><a href=".">Home</a> &nbsp; / &nbsp; Galeri</p>
    </div>
  </div>
</section>
<section class="w3l-services3 py-5">
    <div class="container py-lg-3 mt-3">
      <div class="col-md-12 ">
        <div class="row">
          <?php
          $sql = "SELECT * FROM galeri";
          $q = mysqli_query($k, $sql);
          while ($r = mysqli_fetch_assoc($q)) {
          ?>
            <div class="col-lg-4 col-md-4 mt-0 grids5-info">
              <a href="#url" class="">
                <img src="gambar/<?= $r['gambar'] ?>" class="img-fluid img-news img-curve" alt="" />
              </a>
              <h5><?= $r['tanggal'] ?></h5>
              <h4><a href="#url"></a><?= $r['judul_galeri'] ?></h4>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>