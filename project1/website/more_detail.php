<?php
  include_once('header.php');
?>
  <main id="main">

    <!-- ======= Blog Header ======= -->
    <div class="header-bg page-area">
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2">
                  <h1 class="title2">Car detail</h1>
                </div>
                <div class="layer3">
                  <h2 class="title3">More car detail is here</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Header -->



<div class="container mx-auto py-5">

    <div class="row">

<!-- Start Google Map -->
<div class="col-md-6">
  <!-- Start Map -->
  <img src="../admin/upload/car_pic/<?php echo $fetch->car_pic;?>"  >
    <!-- End Map -->
</div>
<!-- End Google Map -->

<!-- Start  contact -->
<div class="col-md-6">
  <div class="form contact-form">
    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
      <div class="form-group">
      <h3 class="mb-0">Car name:- <?php echo $fetch->car_name;?></h3>
      <span> <?php echo $fetch->updated_dt;?></span>
      </div>
      <div class="form-group mt-3
      ">
      <h4 class="mb-0">Car price:- <?php echo $fetch->car_price;?></h4>
      </div>
      <div class="form-group mt-3">
      <h4 class="mb-0">Car Category:- <?php echo $fetch->cate_name;?></h4>
      </div>
      <div class="form-group mt-3">

      <h4 class="mb-0">city:- <?php echo $fetch->city_name;?></h4><br>
      <h4 class="mb-0">area:- <?php echo $fetch->area_name;?></h4>
      </div>


      <a href="add_cart?fetch_car_id=<?php echo $fetch->car_id;?>" class="btn btn-outline-primary">
      <i class="bi bi-cart"></i> Add cart</a>
    </form>
  </div>
</div>
<!-- End Left contact -->
</div>
</div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
    include_once('footer.php');
  ?>
  <!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
