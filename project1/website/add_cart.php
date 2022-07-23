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
                  <h1 class="title2">Add Cart</h1>
                </div>
                <div class="layer3">
                  <h2 class="title3">Add car in your wish list</h2>
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

          <tr>
          <h3 class="mb-0">Car name:- <?php echo $fetch->car_name;?></h3>
          <span> Last updated date:- <?php echo $fetch->updated_dt;?></span>
          </tr>
          <tr>
          <td><h4 class="mb-0">Car price:- <?php echo $fetch->car_price;?></h4></td>
          </tr>
          <br>
          <tr>
          <td><h4 class="mb-0">Car Category:- <?php echo $fetch->cate_name;?></h4></td>
          </tr>
          <br>
          <tr>

          <td><h4 class="mb-0">city:- <?php echo $fetch->city_name;?></h4><br></td>
          <td><h4 class="mb-0">area:- <?php echo $fetch->area_name;?></h4></td>
          </tr>

          <form action="" method="post" >
            <input type="hidden" name="car_id" value="<?php echo $fetch->car_id?>">
            <input type="hidden" name="cus_id" value="<?php echo $_SESSION['cus_id']?>">
            <button type="submit" class="btn btn-success" name="add_cart" ><i class="bi bi-cart"> Add cart</i></button>
            <button type="submit" class="btn btn-success" name="Booking" > booking</button>

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
