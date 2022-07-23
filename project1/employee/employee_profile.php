<?php
    include_once('header.php');
?>

<title>Employee</title>
   
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
                                       <img src="../admin/images/profile.jpg" alt="img" height="300px" width="300px">
                           </div> 
                           <div class="col-md-2 col-md-offset-5">
                           <h4>Name : <?php echo $_SESSION['emp_name'];?></h4>
                           <p class="my-2"> <i class="fa fa-user" aria-hidden="true"></i>User Id : <?php echo $fetch->emp_id?></p>
                           <p class="my-2"> <i class="fa fa-user" aria-hidden="true"></i>User Name : <?php echo $fetch->emp_name;?></p>
                           <p class="my-2"> <i class="fa fa-user" aria-hidden="true"></i>User mail : <?php echo $fetch->emp_mail;?></p>
                           <p><a href="edit_employee?edit_emp_id=<?php echo $_SESSION['emp_id'];?>" class="btn btn-primary"> <i class="fa fa-pencil">  edit</i> </a>   </p>
                           
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