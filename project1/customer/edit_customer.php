<?php
	if(isset($_SESSION['cust_id']))
	{
		echo "<script> window.location='index'
		</script>";
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Sign up </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
	
		<!-- main content start-->
		<div >
			<div class="main-page signup-page">
				<h2 class="title1">edit Here</h2>
				<div class="sign-up-row widget-shadow">
					<h5>Personal Information :</h5>
					<form class="frm" name="" method="post"  enctype="multipart/form-data">
                <div class="form-group">
                    <legend> Register customer </legend>
                    <table class="table">
                        <tr>
                            <td>Name:<input type="text" name="cus_name" value="<?php echo $fetch->cus_name?>" class="form-control" placeholder="name"></td>
                            <td>Username:<input type="text" name="cus_user" value="<?php echo $fetch->cus_user?>" class="form-control" placeholder="username"></td>
                        </tr>
                        
                    <tr>
                        <td>Mobile:<input type="number" class="from-control" value="<?php echo $fetch->cus_mobile?>"  name="cus_mobile" placeholder="mobile"></td>
                        <td><div class="input-group mb-3">
                            <input type="text" class="form-control" name="cus_mail" value="<?php echo $fetch->cus_mail?>" placeholder="employee mail" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                              <span class="input-group-text" id="basic-addon2">@example.com</span>
                            </div>
                          </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Driving licence:<input type="text" name="cus_driveing_license" value="<?php echo $fetch->cus_driveing_license?>" class="driving" placeholder="driving licence number">  </td>
                        <td>
						<div class="form-group">
						<label for="gender" class="col-form-label">Gender</label>
						<?php 
						$cus_gender=$fetch->cus_gender;
						if($cus_gender=="Male")
						{
						?>
						<input type="radio" name="gcus_genderen" value="Male" checked>:Male
						<input type="radio" name="cus_gender" value="Female">:Female
						<?php
						}
						else
						{
						?>
						<input type="radio" name="cus_gender" value="Male" >:Male
						<input type="radio" name="cus_gender" value="Female" checked>:Female
						<?php
						}
						?>
					</div>
                        </td>
                    </tr>
                    <img src="../admin/upload/customer/<?php echo $fetch->cus_img;?>" width="250px" height="100px"/>
					<tr>
						<td>
							<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">Upload</span>
							</div>
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="cus_img" id="inputGroupFile01">
								<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
							</div>
							</div>
						</td>
					</tr>
                    <tr>
                        <td>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                <textarea class="form-control" name="cus_address" id="exampleFormControlTextarea1" rows="3"><?php echo $fetch->cus_address;?></textarea>
                              </div>
                        </td>
                    </tr>
                    <tr>
                    <td>	
                    <input type="submit" name="save" class="form-control" value="Save">
					</td>
                    </tr>

                    </table>
                </div>
				<div class="registration">
						Already Registered.
						<a class="" href="index">
							Login
						</a>
					</div>
            </form>
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		  
		</div>
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
	
</body>
</html>