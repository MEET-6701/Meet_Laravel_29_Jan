<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>

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
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>
<!--pie-chart --><!-- index page sales reviews visitors pie chart -->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ffc168',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
<!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

	<!-- requried-jsfiles-for owl -->
					<link href="css/owl.carousel.css" rel="stylesheet">
					<script src="js/owl.carousel.js"></script>
						<script>
							$(document).ready(function() {
								$("#owl-demo").owlCarousel({
									items : 3,
									lazyLoad : true,
									autoPlay : true,
									pagination : true,
									nav:true,
								});
							});
						</script>
					<!-- //requried-jsfiles-for owl -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="dashboard"><span class="fa fa-area-chart"></span> Rent<span class="dashboard_text">My Car dashboard</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
              <li class="treeview">
                <a href="dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>

              <!-- Employee -->
			        <li class="treeview">
                <a href="#">
                <i class="fa fa-user"></i>
                <span>Employee</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="add_employee"><i class="fa fa-angle-right"></i> Add employee </a></li>
                  <li><a href="manage_employee"><i class="fa fa-angle-right"></i> Manage employee</a></li>
                </ul>
              </li>
              <!--end emp-->

              <!--customer-->
              <li class="treeview">
                <a href="#">
                <i class="fa fa-car"></i>
                <span>car category</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="add_category"><i class="fa fa-angle-right"></i>Add category </a></li>
                  <li><a href="manage_car_cate"><i class="fa fa-angle-right"></i>Manage category </a></li>
                </ul>
              </li>
              <!--end customer-->
              
              <!--state-->
              <li class="treeview">
                <a href="#">
                <i class="fa fa-globe"></i>
                <span>State</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="add_state"><i class="fa fa-angle-right"></i>Add State </a></li>
                  <li><a href="manage_state"><i class="fa fa-angle-right"></i>Manage State </a></li>
                </ul>
              </li>
              <!--end state-->

               <!--city-->
               <li class="treeview">
                <a href="#">
                <i class="fa fa-globe"></i>
                <span>city</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="add_city"><i class="fa fa-angle-right"></i>Add City </a></li>
                  <li><a href="manage_city"><i class="fa fa-angle-right"></i>Manage City </a></li>
                </ul>
              </li>
              <!--end city-->

              <!--area-->
              <li class="treeview">
                <a href="#">
                <i class="fa fa-user"></i>
                <span>Area</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="add_area"><i class="fa fa-angle-right"></i>Add Area </a></li>
                  <li><a href="manage_area"><i class="fa fa-angle-right"></i>Manage Area </a></li>
                </ul>
              </li>
              <!--end area-->

              <!--area-->
              <li class="treeview">
                <a href="manage_car">
                <i class="fa fa-car"></i> <span> Manage car </span>
                </a>
              </li>
              <!--end area-->

              <!-- Customer -->
              <li class="treeview">
                <a href="manage_customer">
                <i class="fa fa-user"></i> <span> Manage Customer </span>
                </a>
              </li>
              <!-- Customer -->

              <!--Clinet-->
              <li class="treeview">
                <a href="#">
                <i class="fa fa-user"></i>
                <span>Clinet</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="add_client"><i class="fa fa-angle-right"></i>Add clinet </a></li>
                  <li><a href="manage_client"><i class="fa fa-angle-right"></i>Manage client </a></li>
                </ul>
              </li>
              <!--end Clinet-->

                <!-- Contact -->
                <li class="treeview">
                <a href="manage_contact">
                <i class="fa-solid fa-list"></i> <span> Manage Contact </span>
                </a>
              </li>
              <!-- Contact -->

              <!-- wish list-->
              <li class="treeview">
                <a href="manage_Wish_list">
                <i class="fa-solid fa-list"></i> <span> wish list </span>
                </a>
              </li>
              <!-- wish list-->

                <!-- Booking-->
                <li class="treeview">
                <a href="manage_booking_list">
                <i class="fa fa-form"></i></i> <span> Booking </span>
                </a>
              </li>
              <!-- Booking-->

               <!-- Payment-->
               <li class="treeview">
                <a href="manage_payment">
                <i class="fa fa-payment"></i></i> <span> payment </span>
                </a>
              </li>
              <!-- Payment-->


           
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>
<!-- header-starts -->
<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
			

       </div>
			<div class=" header-right">
				
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="images/profile.jpg" alt="img" width="50px" hight="50px"> </span> 
									<div class="user-name">
										<p><?php 
                    $admin_user=$_SESSION['admin_user'];
                    echo $admin_user;
                    ?>
                    </p>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								 
								<li> <a href="index"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>

            