<?php

    include_once('model.php'); //s1

    class control extends model //s2
    {
        function __construct(){
            session_start();
            model::__construct();  //s3
            $path=$_SERVER ['PATH_INFO'];
       
        switch($path){
            case '/index':
                if(isset($_REQUEST['submit']))
                {
                    $admin_user=$_REQUEST['admin_user'];
                    $admin_password=$_REQUEST['admin_password'];
                    // password convert into encriypted
                    
                    $where=array("admin_user"=>$admin_user,"admin_password"=>$admin_password);
                    $res=$this->select_where('admin_master',$where);
                    $chk=$res->num_rows; // check cond by rows
                    if($chk==1)   // 1 means true and 0 false
                    {
                        $fetch=$res->fetch_object();
                        
                        $_SESSION['admin_user']=$fetch->admin_user;
                       
                       
                        echo "<script>
                        alert('Login Success');
                        window.location='dashboard';
                        </script>";
                    }
                    else
                    {
                        echo "<script>
                        alert('Login failed');
                        
                        </script>";
                    }
                    
                }

            include_once('index.php');
            break;

            case '/edit_cate':
             
                if(isset($_REQUEST['edit_cate_id'])){

                    $cate_id=$_REQUEST['edit_cate_id'];
                    $where=array("car_cate_id"=>$cate_id);
                    
                    $sel_res=$this->select_where('car_cate_master',$where);
                    $fetch=$sel_res->fetch_object();

                    $old_img=$fetch->cate_img;

                    if(isset($_REQUEST['save'])){
    
                        $cate_name=$_REQUEST['cate_name'];

                        date_default_timezone_set('asia/calcutta');
                        $updated_dt=date("Y-m-d H:i:s");
                        
                        if($_FILES['cate_img']['size']>0)
                        {	
                            $cate_img=$_FILES['cate_img']['name'];
                            $path='upload/category/'.$cate_img;
                            $dup_img=$_FILES['cate_img']['tmp_name'];
                            move_uploaded_file($dup_img,$path);
    
                            $data=array("cate_name"=>$cate_name,
                           
                            "cate_img"=>$cate_img,
                            "updated_dt"=>$updated_dt);
                            $res=$this->update_where('car_Cate_master',$data,$where);
                            if($res)
                            {
                                unlink('upload/category/'.$old_img);
                                echo "<script>
                                alert('Save Success');
                                window.location='manage_car_cate';
                                </script>";
                            }
                            else
                            {
                                echo "Not success";
                            }
                        }
                        else
                        {
                            $data=array("cate_name"=>$cate_name,
                            "updated_dt"=>$updated_dt);

                            $res=$this->update_where('car_cate_master',$data,$where);
                            if($res)
                            {
                                echo "<script>
                                alert('Save Success');
                                window.location='manage_car_cate';
                                </script>";
                            }
                            else
                            {
                                echo "Not success";
                            }
                        }
                        
                     }
                    }
            include_once('edit_cate.php');
            break;

            case '/dashboard':
            include_once('dashboard.php');
            break;
            
            case '/add_employee':

            if(isset($_REQUEST['submit']))
            {
              $emp_name=$_REQUEST['emp_name'];
              $emp_user=$_REQUEST['emp_user'];
              $emp_password=$_REQUEST['emp_password'];
              $emp_mobile=$_REQUEST['emp_mobile'];
              $emp_mail=$_REQUEST['emp_mail'];

            
              date_default_timezone_set('asia/calcutta');
              $created_dt=date("Y-m-d H:i:s");
              $updated_dt=date("Y-m-d H:i:s");


                    $arr=array("emp_name"=>$emp_name,
                    "emp_user"=>$emp_user,
                    "emp_password"=>$emp_password,
                    "emp_mobile"=>$emp_mobile,
                    "emp_mail"=>$emp_mail,
                    "created_dt"=>$created_dt,
                    "updated_dt"=>$updated_dt
                );
                    
                    $res=$this->insert('employee_master',$arr);
                    if($res){
                        echo "<script>
                        alert'Added succesful';
                        window.location='manage_employee';
                        </script>";
                    }
            }
            include_once('add_employee.php');
            break;

            case '/manage_employee':
            $emp_arr=$this->select('employee_master');
            include_once('manage_employee.php');
            break;

            case '/profile':
            include_once('employee_profile.php');
            break;

            case '/delete':
                if(isset($_REQUEST['del_emp_id']))
			{
				$emp_id=$_REQUEST['del_emp_id'];
				$where=array("emp_id"=>$emp_id);
				$res=$this->delete_where('employee_master',$where);
				echo "<script>
				alert('Delete Success');
				window.location='manage_employee';
				</script>";
			}
            if(isset($_REQUEST['del_cate_id']))
			{
				$car_cate_id=$_REQUEST['del_cate_id'];
				$where=array("car_cate_id"=>$car_cate_id);
				$res=$this->delete_where('car_cate_master',$where);
				echo "<script>
				alert('Delete Success');
				window.location='manage_car_cate';
				</script>";
			}
            if(isset($_REQUEST['del_state_id']))
			{
				$del_state_id=$_REQUEST['del_state_id'];
				$where=array("st_id"=>$del_state_id);
				$res=$this->delete_where('state_master',$where);
				echo "<script>
				alert('Delete Success');
				window.location='manage_state';
				</script>";
			}
            if(isset($_REQUEST['del_city_id']))
			{
				$del_city_id=$_REQUEST['del_city_id'];
				$where=array("city_id"=>$del_city_id);
				$res=$this->delete_where('city_master',$where);
				echo "<script>
				alert('Delete Success');
				window.location='manage_city';
				</script>";
			}
            if(isset($_REQUEST['del_area_id']))
			{
				$del_area_id=$_REQUEST['del_area_id'];
				$where=array("area_id"=>$del_area_id);
				$res=$this->delete_where('area_master',$where);
				echo "<script>
				alert('Delete Success');
				window.location='manage_area';
				</script>";
			}
            if(isset($_REQUEST['del_car_id']))
			{
				$del_car_id=$_REQUEST['del_car_id'];
				$where=array("car_id"=>$del_car_id);
				$res=$this->delete_where('car_master',$where);
				echo "<script>
				alert('Delete Success');
				window.location='manage_car';
				</script>";
			}
            if(isset($_REQUEST['del_cl_id']))
			{
				$del_cl_id=$_REQUEST['del_cl_id'];
				$where=array("cl_id"=>$del_cl_id);
				$res=$this->delete_where('client_master',$where);
				echo "<script>
				alert('Delete Success');
				window.location='manage_client';
				</script>";
			}
            if(isset($_REQUEST['del_co_id']))
			{
				$del_co_id=$_REQUEST['del_co_id'];
				$where=array("co_id"=>$del_co_id);
				$res=$this->delete_where('contact_master',$where);
				echo "<script>
				alert('Delete Success');
				window.location='manage_contact';
				</script>";
			}

			break;

            case '/manage_car_cate':
            $cate_arr=$this->select('car_cate_master');
            include_once('manage_car_cate.php');
            break;

            case '/add_category':
            

            if(isset($_REQUEST['submit']))
            {
                $cate_name=$_REQUEST['cate_name'];

                $cate_img=$_FILES['cate_img']['name'];
				$path='upload/category/'.$cate_img;
				$dup_img=$_FILES['cate_img']['tmp_name'];
				move_uploaded_file($dup_img,$path);

              

                date_default_timezone_set('asia/calcutta');
				$created_dt=date("Y-m-d H:i:s");
				$updated_dt=date("Y-m-d H:i:s");

                $arr=array("cate_name"=>$cate_name,
                "cate_img"=>$cate_img,
                "created_dt"=>$created_dt,
				"updated_dt"=>$updated_dt
            );
            $res=$this->insert('car_cate_master',$arr);
            if($res)
            {
                echo "Suuccess";
            }
            else
            {
                echo "Not success";
            }
            
				
            }
            include_once('add_category.php');
            break;

            case '/manage_car':
            $car_arr=$this->select('car_master');
            include_once('manage_car.php');
            break;

            case '/add_state':
            if(isset($_REQUEST['submit']))
            {
                $st_name=$_REQUEST['st_name'];
                date_default_timezone_set('asia/calcutta');
              $created_dt=date("Y-m-d H:i:s");
              $updated_dt=date("Y-m-d H:i:s");

                $arr=array("st_name"=>$st_name,
                "created_dt"=>$created_dt,
                    "updated_dt"=>$updated_dt);
                $res=$this->insert('state_master',$arr);
                if($res){
                    echo "<script>
                    alert ('ragister succesfully');
                    window.location 'add_state';
                    </script>";
                }
            }
            include_once('add_state.php');
            break;

            case '/manage_state':
            $st_arr=$this->select('state_master');
            include_once('manage_state.php');
            break;

            case '/add_city':
                $st_arr=$this->select('state_master');
                if(isset($_REQUEST['submit'])){
                    $st_name=$_REQUEST['st_name'];
                    $city_name=$_REQUEST['city_name'];
                    date_default_timezone_set('asia/calcutta');
              $created_dt=date("Y-m-d H:i:s");
              $updated_dt=date("Y-m-d H:i:s");

              $arr=array("st_id"=>$st_name,
              "city_name"=>$city_name,
              "created_dt"=>$created_dt,
              "updated_dt"=>$updated_dt);

              $res=$this->insert('city_master',$arr);
              if($res){
                echo "<script>
                alert ('ragister succesfully');
                window.location 'add_state';
                </script>";
              }

                }
            include_once('add_city.php');
            break;

            
            case '/manage_city':
            $city_arr=$this->select_join2('city_master','state_master','city_master.st_id=state_master.st_id');
            include_once('manage_city.php');
            break;

            
            case '/add_area':
                $st_arr=$this->select('state_master');
                $city_arr=$this->select('city_master');
                if(isset($_REQUEST['submit'])){
                    $st_name=$_REQUEST['st_name'];
                    $city_name=$_REQUEST['city_name'];
                    $area_name=$_REQUEST['area_name'];
                    date_default_timezone_set('asia/calcutta');
              $created_dt=date("Y-m-d H:i:s");
              $updated_dt=date("Y-m-d H:i:s");

              $arr=array("sta_id"=>$st_name,
              "city_id"=>$city_name,
              "area_name"=>$area_name,
              "created_dt"=>$created_dt,
              "updated_dt"=>$updated_dt);

              $res=$this->insert('area_master',$arr);
              if($res){
                echo "<script>
                alert ('ragister succesfully');
                window.location 'add_state';
                </script>";
              }
            }
               
            include_once('add_area.php');
            break;

            
            case '/manage_area':
            $area_arr=$this->select_join3('area_master','city_master','area_master.city_id=city_master.city_id','state_master','area_master.sta_id=state_master.st_id');
            include_once('manage_area.php');
            break;

            
            case '/add_car':
            include_once('add_car.php');
            break;
            
            
            case '/manage_car':
            include_once('manage_car.php');
            break;

             
            case '/manage_customer':
            $cus_arr=$this->select('customer_master');
            include_once('manage_customer.php');
            break;

             
            case '/add_client':
                if(isset($_REQUEST['submit'])){
                    $cl_name=$_REQUEST['cl_name'];
                    $cl_user=$_REQUEST['cl_user'];
                    $cl_password=$_REQUEST['cl_password'];
                    $enc_pass=md5('cl_password');
                    $cl_mobile=$_REQUEST['cl_mobile'];
                    $cl_mail=$_REQUEST['cl_mail'];
                    $cl_address=$_REQUEST['cl_address'];
                    date_default_timezone_set('asia/calcutta');
              $created_dt=date("Y-m-d H:i:s");
              $updated_dt=date("Y-m-d H:i:s");

              $arr=array("cl_name"=>$cl_name,
              "cl_user"=>$cl_user,
              "cl_password"=>$cl_password,
              "cl_mobile"=>$cl_mobile,
              "cl_mail"=>$cl_mail,
              "cl_address"=>$cl_address,
              "created_dt"=>$created_dt,
              "updated_dt"=>$updated_dt);

              $res=$this->insert('client_master',$arr);
              if($res){
                echo "<script>
                alert ('ragister succesfully');
                window.location 'add_state';
                </script>";
              }
            }
            include_once('add_client.php');
            break;
            
             
            case '/manage_client':
                $cl_arr=$this->select('client_master');
            include_once('manage_client.php');
            break;

               
            case '/manage_contact':
                $co_arr=$this->select('contact_master');
                include_once('manage_contact.php');
            break;

               
            case '/manage_Wish_list':
                $wish_arr=$this->select('wish_master');
                include_once('manage_Wish_list.php');
            break;

               
            case '/manage_booking_list':
                include_once('manage_booking_list.php');
            break;

               
            case '/manage_payment':
                include_once('manage_payment.php');
                break;

            case '/logout':
            unset($_SESSION['admin_user']);
            echo"<script>
            alert'logout succesful';
            window.location='index';
            </script>";
            break;
            
            case '/signup':
                if(isset($_REQUEST['submit'])){
                    $admin_user=$_REQUEST['admin_user'];                  
                    $admin_password=$_REQUEST['admin_password'];

                    date_default_timezone_set('asia/calcutta');
                    $created_dt=date("Y-m-d H:i:s");
                    $updated_dt=date("Y-m-d H:i:s");

                    $arr=array("admin_user"=>$admin_user,
                    "admin_password"=>$admin_password,

                    "created_dt"=>$created_dt,
                    "updated_dt"=>$updated_dt);

                    $res=$this->insert('admin_master',$arr);
                    if($res)
                    {
                        echo "<script>
                        alert('sign up Success');
                        window.location.href='index';
                        </script>";
                       }
                    else
                    {
                        echo "<script>
                        alert('sing up Unsuccessful');
                        window.location.href='signup';
                        </script>";
                    }
    
                }
            include_once('signup.php');
            break;
            }
        }
    }
    $obj= new control;

?>