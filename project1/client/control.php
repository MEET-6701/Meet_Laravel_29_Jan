<?php

    include_once('../admin/model.php');


    class control extends model
    {
        function __construct()
        {
            session_start();
            model::__construct();
            $path=$_SERVER ['PATH_INFO'];

        switch($path){
            case '/signup':
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
                        window.location.href='index';
                        </script>";
                    }

                }
            include_once('signup.php');
            break;


            case '/index':
                if(isset($_REQUEST['submit']))
                {
                    $cl_user=$_REQUEST['cl_user'];
                    $cl_password=$_REQUEST['cl_password'];
                    $enc_pass=md5('cl_password');
                    // password convert into encriypted

                    $where=array("cl_user"=>$cl_user,"cl_password"=>$cl_password);
                    $res=$this->select_where('client_master',$where);
                    $chk=$res->num_rows; // check cond by rows
                    if($chk==1)   // 1 means true and 0 false
                    {
                        $fetch=$res->fetch_object();

                        $_SESSION['cl_id']=$fetch->cl_id;
                        $_SESSION['cl_user']=$fetch->cl_user ;
                        $_SESSION['cl_name']=$fetch->cl_name ;
                        $_SESSION['cl_mail']=$fetch->cl_mail ;
                        $_SESSION['cl_address ']=$fetch->cl_address ;
                        $sta=session_status();
                         echo $sta;


                        echo "<script>
                        alert('Login Success');
                        window.location='client_profile';
                        </script>";
                    }
                    else
                    {
                        echo "<script>
                        alert('Login failed');
                        window.location='index';
                        </script>";
                    }

                }
            include_once('index.php');
            break;

            case'/log out':
                unset($_SESSION['cl_id']);
                unset($_SESSION['cl_user']);
                unset($_SESSION['cl_name']);
                unset($_SESSION['cl_mail']);
                unset($_SESSION['cl_address']);

                echo "<script>
                alert ('log out');
                window.location='index';
                 </script>";

                 case '/edit_client':
                    if(isset($_REQUEST['edit_cl_id'])){

                        $cl_id=$_REQUEST['edit_cl_id'];
                        $where=array("cl_id"=>$cl_id);

                        $sel_res=$this->select_where('client_master',$where);
                        $fetch=$sel_res->fetch_object();

                        if(isset($_REQUEST['save'])){

                            $cl_name=$_REQUEST['cl_name'];
                            $cl_user=$_REQUEST['cl_user'];
                            $cl_mobile=$_REQUEST['cl_mobile'];
                            $cl_mail=$_REQUEST['cl_mail'];
                            $cl_address=$_REQUEST['cl_address'];

                            date_default_timezone_set('asia/calcutta');
                            $updated_dt=date("Y-m-d H:i:s");

                            $data=array("cl_name"=>$cl_name,
                            "cl_user"=>$cl_user,
                            "cl_mobile"=>$cl_mobile,
                            "cl_mail"=>$cl_mail,
                            "cl_address"=>$cl_address,
                            "updated_dt"=>$updated_dt);

                            $res=$this->update_where('client_master',$data,$where);
                            if($res)
                            {
                                echo "<script>
                                alert('Save Success');
                                window.location='client_profile';
                                </script>";
                            }
                            else
                            {
                                echo "Not success";
                            }
                        }
                    }
                    include_once('edit_client.php');
                    break;


            case '/citydata':
            if(isset($_REQUEST['btn']))
				{
					$st_id=$_REQUEST['btn'];
					$where=array("st_id"=>$st_id);
					$city_arr=$this->select_where('city_master',$where);
					?>
					 <option>----Select city-------------------------</option>
					<?php
					foreach($city_arr as $r)
					{
					?>
						<option value="<?php echo $r->city_id; ?>">
										<?php echo $r->city_name; ?>
						</option>
					<?php
					}
				}

			break;


            case '/add_car':
$cate_arr=$this->select('car_cate_master');
          $st_arr=$this->select('state_master');
        //    $city_arr=$this->select('city_master');
            $area_arr=$this->select('area_master');

            if(isset($_REQUEST['submit'])){

                $car_cate_id=$_REQUEST['car_cate_id'];
                $cl_id=$_SESSION['cl_id'];
                $st_id=$_REQUEST['st_id'];
                $city_id=$_REQUEST['city_id'];
                $area_id=$_REQUEST['area_id'];
                $car_name=$_REQUEST['car_name'];
                $car_number=$_REQUEST['car_number'];
                $rc_number=$_REQUEST['rc_number'];
                $car_price=$_REQUEST['car_price'];

                $rc_pic=$_FILES['rc_pic']['name'];
				$path1='../admin/upload/rc_pic/'.$rc_pic;
				$dup_img=$_FILES['rc_pic']['tmp_name'];
				move_uploaded_file($dup_img,$path1);

                $car_pic=$_FILES['car_pic']['name'];
				$path2='../admin/upload/car_pic//'.$car_pic;
				$dup2_img=$_FILES['car_pic']['tmp_name'];
				move_uploaded_file($dup2_img,$path2);

                date_default_timezone_set('asia/calcutta');
                $created_dt=date("Y-m-d H:i:s");
                $updated_dt=date("Y-m-d H:i:s");

                $arr=array("car_cate_id"=>$car_cate_id,
                "cl_id"=>$cl_id,
                "st_id"=>$st_id,
                "city_id"=>$city_id,
                "area_id"=>$area_id,
                "car_name"=>$car_name,
                "car_number"=>$car_number,
                "rc_number"=>$rc_number,
                "car_price"=>$car_price,
                "rc_pic"=>$rc_pic,
                "car_pic"=>$car_pic,
                "created_dt"=>$created_dt,
                "updated_dt"=>$updated_dt,
            );
            $res=$this->insert('car_master',$arr);
            if($res){
                echo "<script>
                    alert 'added succesfully';
                    window.location='manage_car';
                </script>";
            }


            }
            include_once('add_car.php');
            break;

            case '/client_profile':
            $cl_id=$_SESSION['cl_id'];
            $where=array("cl_id"=>$cl_id);
            $res=$this->select_where('client_master',$where);
            $fetch=$res->fetch_object();
            include_once('client_profile.php');
            break;

            case '/delete':
                if(isset($_REQUEST['del_car_id']))
			{
				$car_id=$_REQUEST['del_car_id'];
				$where=array("car_id"=>$car_id);
				$res=$this->delete_where('car_master',$where);
				echo "<script>
				alert('Delete Success');
				window.location='manage_car';
				</script>";
			}
			break;

            case '/dashboard':
            include_once('dashboard.php');
            break;

            case '/add_employee':
            include_once('add_employee.php');
            break;

            case '/manage_employee':
            include_once('manage_employee.php');
            break;

            case '/profile':
            include_once('employee_profile.php');
            break;


            case '/add_category':
            include_once('add_category.php');
            break;

            case '/manage_car':
            $car_arr=$this->select_join2('client_master','car_master','client_master.cl_id=car_master.cl_id');
            include_once('manage_car.php');
            break;

            case '/add_state':
            include_once('add_state.php');
            break;

            case '/manage_state':
            include_once('manage_state.php');
            break;

            case '/add_city':
            include_once('add_city.php');
            break;


            case '/manage_city':
            include_once('manage_city.php');
            break;


            case '/add_area':
            include_once('add_area.php');
            break;


            case '/manage_area':
            include_once('manage_area.php');
            break;

            case '/manage_customer':
            include_once('manage_customer.php');
            break;


            case '/add_client':
            include_once('add_client.php');
            break;


            case '/manage_client':
            include_once('manage_client.php');
            break;


            case '/manage_contact':
                include_once('manage_contact.php');
            break;


            case '/manage_Wish_list':
                include_once('manage_Wish_list.php');
            break;


            case '/manage_booking_list':
                include_once('manage_booking_list.php');
            break;


            case '/manage_payment':
                include_once('manage_payment.php');
                break;


            case '/client_profile':
            $cl_id=$_SESSION['cl_id'];
            $where=array("cl_id"=>$cl_id);
            $res=$this->select_where('client_master',$where);
            $fetch=$res->fetch_object();
            include_once('client_profile.php');
            break;


            case '/wish_list':
            include_once('wish_list.php');
            break;


            case '/order_detail':
                $cl_id=$_SESSION['cl_id'];
                $where=array("cl_id"=>$cl_id);
                $res=$this->select_where('client_master',$where);
                $fetch=$res->fetch_object();
            include_once('order_detail.php');
            break;
            }
        }
    }
    $obj= new control;

?>
