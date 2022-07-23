<?php
  include_once('header.php');
  if((!isset($_SESSION['cus_id'])))
{
	echo "<script>
		window.location='index';
		</script>";
}
?>
 <!-- ======= Blog Header ======= -->
 <div class="header-bg page-area">
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2">
                  <h1 class="title2"> More car </h1>
                </div>
                <div class="layer3"> 
                  <h2 class="title3">  See multiple cars </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Header -->

<section class="py-5">
<?php

if(!empty($car_arr)){
foreach($car_arr as $data){
?>
    <div class="container">
        <div class="row mb-2">
            <div class="col-12">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
               
                <h3 class="mb-0"> <?php echo $data->car_name;?></h3>
                <div class="mb-1 text-muted"> last updated date:-<?php echo $data->updated_dt;?></div>
                <div class="mb-1 text-muted"> Category:-<?php echo $data->cate_name;?></div>
                <h4> Price:-<?php echo $data->car_price?> </h4>
                
                

                <div class="btn-group" role="group" aria-label="Basic example">
                  
                <a href="more_detail?fetch_car_id=<?php echo $data->car_id;?>" class="btn btn-outline-primary">
                <i class="bi bi-ticket-detailed"></i> More detail</a>
                <a href="add_cart?fetch_car_id=<?php echo $data->car_id;?>" class="btn btn-outline-primary">
                <i class="bi bi-cart"></i> Add cart</a>
                </div>
                </div>
                <div class="col-auto d-none d-lg-block">
                 
                <img src="../admin/upload/car_pic/<?php echo $data->car_pic;?>"  height="150px" width="250px">

                </div>
            </div>
            </div>
           
        </div>
</div>  
<?php
    }
}
?>
        </section>
  <?php
  include_once('footer.php')
 ?>