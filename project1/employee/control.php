<?php
    include_once('../admin/model.php');

    class control extends model
    {
        function __construct(){
            session_start();
            model::__construct();
            $path=$_SERVER ['PATH_INFO'];

        switch($path){
            case '/index':
                if(isset($_REQUEST['submit']))
                {
                    $emp_user=$_REQUEST['emp_user'];
                    $emp_password=$_REQUEST['emp_password'];
                    $enc_pass=md5($emp_password); // password convert into encriypted

                    $where=array("emp_user"=>$emp_user,"emp_password"=>$enc_pass);
                    $res=$this->select_where('employee_master',$where);
                    $chk=$res->num_rows; // check cond by rows
                    if($chk==1)  // 1 means true and 0 false
                    {
                        $fetch=$res->fetch_object();

                        $_SESSION['emp_id']=$fetch->emp_id;
                        $_SESSION['emp_name']=$fetch->emp_name;
                        $_SESSION['emp_mail']=$fetch->emp_mail;
                        $_SESSION['emp_user']=$fetch->emp_user;

                        echo "<script>
                        alert('Login Success');
                        window.location='profile';
                        </script>";
                    }
                    else
                    {
                        echo "un";
                    }

                }
            include_once('index.php');
            break;

            case '/signup':
                if(isset($_REQUEST['submit'])){
                    $emp_name=$_REQUEST['emp_name'];
                    $emp_user=$_REQUEST['emp_user'];
                    $emp_password=$_REQUEST['emp_password'];
                    $enc_password=md5($emp_password);
                    $emp_mobile=$_REQUEST['emp_mobile'];
                    $emp_mail=$_REQUEST['emp_mail'];


                    date_default_timezone_set('asia/calcutta');
                    $created_dt=date("Y-m-d H:i:s");
                    $updated_dt=date("Y-m-d H:i:s");

                    $arr=array("emp_name"=>$emp_name,
                    "emp_user"=>$emp_user,
                    "emp_password"=>$enc_password,
                    "emp_mobile"=>$emp_mobile,
                    "emp_mail"=>$emp_mail,

                    "created_dt"=>$created_dt,
                    "updated_dt"=>$updated_dt,
                );
              $res=$this->insert('employee_master',$arr);
                if($res)
                {
                    echo "<script>
					alert('Login Success');
					window.location.href='index';
					</script>";
                   }
                else
                {
                    echo "unsuccesful";
                }
            }
            include_once('signup.php');
            break;

            case'/log out':
                unset($_SESSION['emp_id']);
                unset($_SESSION['emp_user']);
                unset($_SESSION['emp_name']);
                unset($_SESSION['emp_mail']);
                echo "<script>
                alert ('log out');
                window.location='index';
                 </script>";


            case '/dashboard':
            include_once('dashboard.php');
            break;

            case '/profile':
                $emp_id=$_SESSION['emp_id'];
                $where=array("emp_id"=>$emp_id);
                $sel_res=$this->select_where('employee_master',$where);
                $fetch=$sel_res->fetch_object();
            include_once('employee_profile.php');
            break;

            case '/edit_employee':
                if(isset($_REQUEST['edit_emp_id'])){

                    $emp_id=$_REQUEST['edit_emp_id'];
                    $where=array("emp_id"=>$emp_id);

                    $sel_res=$this->select_where('employee_master',$where);
                    $fetch=$sel_res->fetch_object();
                    if(isset($_REQUEST['submit'])){

                        $emp_name=$_REQUEST['emp_name'];
                        $emp_user=$_REQUEST['emp_user'];
                        $emp_mobile=$_REQUEST['emp_mobile'];
                        $emp_mail=$_REQUEST['emp_mail'];

                        date_default_timezone_set('asia/calcutta');
                        $updated_dt=date("Y-m-d H:i:s");

                        $data=array("emp_name"=>$emp_name,
						"emp_user"=>$emp_user,
						"emp_mobile"=>$emp_mobile,
						"emp_mail"=>$emp_mail,

						"updated_dt"=>$updated_dt);
						$res=$this->update_where('employee_master',$data,$where);
						if($res)
						{
							echo "<script>
							alert('Save Success');
							window.location='   profile';
							</script>";
						}
						else
						{
							echo "Not success";
						}
                    }
                }
            include_once('edit_employee.php');
            break;

            case '/add_category':
                if(isset($_REQUEST['submit']))
                {
                    $cate_name=$_REQUEST['cate_name'];

                    $cate_img=$_FILES['cate_img']['name'];
				$path='../admin/upload/category/'.$cate_img;
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
                    echo "su";
                }
                else
                {
                    echo "Not success";
                }


                }
            include_once('add_category.php');
            break;

            case '/manage_car_cate':
                $cate_arr=$this->select('car_cate_master');
                include_once('manage_car_cate.php');
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
                $car_arr=$this->select('car_master');
                include_once('manage_car.php');
                break;


            case '/manage_customer':
            $cus_arr=$this->select('customer_master');
            include_once('manage_customer.php');
            break;

            case '/add_client':
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


            }
        }
    }
    $obj= new control;

?>
