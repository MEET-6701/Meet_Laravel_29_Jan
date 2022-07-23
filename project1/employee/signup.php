<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
 <link href="css/bvalidator.css" type="text/css" rel="stylesheet" />
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="jquery.bvalidator.js" type="text/javascript"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">

<script type="text/javascript"> 
    $(document).ready(function () {
	
        $('#form1').bValidator();
    });
	

	
	</script>


<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
	
		<!-- main content start-->
		
			<div class="main-page signup-page">
				<h2 class="title1">SignUp Here</h2>
				<div class="sign-up-row widget-shadow">
					<h5>Personal Information :</h5>
					<form class="frm form1" name="" method="post">
                <div class="form-group">
                    <legend> Register employee </legend>
                    <table class="table">
                        <tr>
                            <td>Name:<input type="text" name="emp_name" class="form-control" placeholder="name" data-bvalidator="required,alpha"></td>
                        </tr>
                        <tr>
                        <td>Username:<input type="text" name="emp_user" class="form-control" placeholder="username"></td>
                        </tr>
                        <tr>
                        <div class="input-group" id="show_hide_password">
                            <td>
                                Password:
                                <input type="password" name="emp_password"  class="pass from-control" id="myInput" value="" placeholder="password">  <input type="checkbox" onclick="myFunction()">Show
                                <script>
                                function myFunction() {
                                    var x = document.getElementById("myInput");
                                    if (x.type === "password") {
                                    x.type = "text";
                                    } else {
                                    x.type = "password";
                                    }
                                }
                                </script>
                            </td> 
                        </div>
                    </tr>
                    <tr>
                        <td>Mobile: <input type="number" class="from-control"  name="emp_mobile" placeholder="mobile"></td>

                    </tr>
                    <tr>
                    <td>Mail: <input type="mail" name="emp_mail" class="form-control" placeholder="username"></td>
                    </tr>
                    <tr><td>	
						<input type="submit"  name="submit" value="submit"   class="from-control"  >
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
		   <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
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