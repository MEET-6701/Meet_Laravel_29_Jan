<?php
    include_once('header.php');
?>
    <title>customer </title>
   
    <div id="page-wrapper" style="min-height: 703px;">
	    <div class="main-page">
		    <div class="forms">
		    
		       <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
				    <div class="form-title">
							<h4>profile  </h4>
                            </div>
                            <br>
                            <div class="container">
                                <div class="row">
                                 <div class="col-md-2 col-md-offset-5">
					                    <img src="../admin/upload/customer/<?php echo $fetch->cus_img;?>" alt="img" height="300px" width="300px">
                            </div> 
                            <div class="col-md-2 col-md-offset-5">
					        <h4>Name : <?php echo $fetch->cus_name;?></h4>
					        <p class="my-2"> <i class="fa fa-user" aria-hidden="true"></i>User Id : <?php echo $fetch->cus_id;?></p>
					        <p class="my-2"> <i class="fa fa-user" aria-hidden="true"></i>User Name : <?php echo $fetch->cus_user;?></p>
					        <p><a href="edit_customer?edit_cus_id=<?php echo $fetch->cus_id;?>" class="btn btn-primary"> <i class="fa fa-pencil">  edit</i> </a>   </p>
                            
				</div>
                        </div>
			    	</div>
				
                 </div>
            </div>
        </div>
    </div>  





<?php
    include_once('footer.php');
?>