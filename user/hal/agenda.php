<!-- breadcrum -->
<section class="w3l-deal-breadcrum">
  <div class="breadcrum">
    <div class="container">
      <p><a href=".">Home</a> &nbsp; / &nbsp; Agenda</p>
    </div>
  </div>
</section>
<!-- //breadcrum -->
<section class="w3l-index1">
  <div class="services-6 py-5">
    <div class="container py-lg-3">
      <div class="header-section">
        <h3>This Is Our Agenda</h3>
        <div class="row stats-con text-white">
          <?php
          $sql = "SELECT * FROM agenda order by id_agenda ";
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