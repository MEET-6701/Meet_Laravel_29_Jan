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
            case '/index':
                if(isset($_REQUEST['submit']))
                {
                    $cus_user=$_REQUEST['cus_user'];
                    $cus_password=$_REQUEST['cus_password'];
                    $enc_pass=md5($cus_password); // password convert into encriypted

                    $where=array("cus_user"=>$cus_user,"cus_password"=>$enc_pass);
                    $res=$this->select_where('customer_master',$where);
                    $chk=$res->num_rows; // check cond by rows
                    if($chk==1)  // 1 means true and 0 false
                    {
                        $fetch=$res->fetch_object();

                        $_SESSION['cus_id']=$fetch->cus_id;
                        $_SESSION['cus_img']=$fetch->cus_img;
                        $_SESSION['cus_name']=$fetch->cus_name;
                        $_SESSION['cus_mail']=$fetch->cus_mail;
                        $_SESSION['cus_user']=$fetch->cus_user;;

                        echo "<script>
                        alert('Login Success');
                        window.location='../website/index';
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

            case '/signup':

                if(isset($_REQUEST['submit'])){
                    $cus_name=$_REQUEST['cus_name'];
                    $cus_user=$_REQUEST['cus_user'];
                    $cus_password=$_REQUEST['cus_password'];
                    $enc_password=md5($cus_password);
                    $cus_mobile=$_REQUEST['cus_mobile'];
                    $cus_mail=$_REQUEST['cus_mail'];
                    $cus_driveing_license=$_REQUEST['cus_driveing_license'];
                    $cus_gender=$_REQUEST['cus_gender'];

                    $cus_img=$_FILES['cus_img']['name'];
                    $path='../admin/upload/customer/'.$cus_img;
                    $dup_img=$_FILES['cus_img']['tmp_name'];
                    move_uploaded_file($dup_img,$path);

                    $cus_address=$_REQUEST['cus_address'];

                    date_default_timezone_set('asia/calcutta');
                    $created_dt=date("Y-m-d H:i:s");
                    $updated_dt=date("Y-m-d H:i:s");

                    $arr=array("cus_name"=>$cus_name,
                    "cus_user"=>$cus_user,
                    "cus_password"=>$enc_password,
                    "cus_mobile"=>$cus_mobile,
                    "cus_mail"=>$cus_mail,
                    "cus_driveing_license"=>$cus_driveing_license,
                    "cus_gender"=>$cus_gender,
                    "cus_img"=>$cus_img,
                    "cus_address"=>$cus_address,
                    "created_dt"=>$created_dt,
                    "updated_dt"=>$updated_dt,
                );
              $res=$this->insert('customer_master',$arr);
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
            unset($_SESSION['cus_id']);
            unset($_SESSION['cus_user']);
            echo "<script>
            alert ('log out');
            window.location='index';
             </script>";



            case '/dashboard':
            include_once('dashboard.php');
            break;

            case '/edit_customer':
                if(isset($_REQUEST['edit_cus_id'])){

				$cus_id=$_REQUEST['edit_cus_id'];
				$where=array("cus_id"=>$cus_id);

				$sel_res=$this->select_where('customer_master',$where);
				$fetch=$sel_res->fetch_object();

				$old_img=$fetch->cus_img;
                if(isset($_REQUEST['save'])){

					$cus_name=$_REQUEST['cus_name'];
					$cus_user=$_REQUEST['cus_user'];
					$cus_mobile=$_REQUEST['cus_mobile'];
					$cus_mail=$_REQUEST['cus_mail'];
					$cus_driveing_license=$_REQUEST['cus_driveing_license'];
                    $cus_gender=$_REQUEST['cus_gender'];
                    $cus_address=$_REQUEST['cus_address'];
                    $cus_mail=$_REQUEST['cus_mail'];




					date_default_timezone_set('asia/calcutta');
					$updated_dt=date("Y-m-d H:i:s");

					if($_FILES['cus_img']['size']>0)
					{
                        $cus_img=$_FILES['cus_img']['name'];
                        $path='../admin/upload/customer/'.$cus_img;
                        $dup_img=$_FILES['cus_img']['tmp_name'];
                        move_uploaded_file($dup_img,$path);

						$data=array("cus_name"=>$cus_name,
						"cus_user"=>$cus_user,
						"cus_mobile"=>$cus_mobile,
						"cus_mail"=>$cus_mail,
						"cus_driveing_license"=>$cus_driveing_license,
                        "cus_gender"=>$cus_gender,
                        "cus_address"=>$cus_address,
                        "cus_mail"=>$cus_mail,
						"cus_img"=>$cus_img,
						"updated_dt"=>$updated_dt);
						$res=$this->update_where('customer_master',$data,$where);
						if($res)
						{
							unlink('../admin/upload/customer/'.$old_img);
							echo "<script>
							alert('Save Success');
							window.location='customer_profile';
							</script>";
						}
						else
						{
							echo "Not success";
						}
					}
					else
					{
						$data=array("cus_name"=>$cus_name,
						"cus_user"=>$cus_user,
						"cus_mobile"=>$cus_mobile,
						"cus_mail"=>$cus_mail,
						"cus_driveing_license"=>$cus_driveing_license,
                        "cus_gender"=>$cus_gender,
                        "cus_address"=>$cus_address,
                        "cus_mail"=>$cus_mail,

						"updated_dt"=>$updated_dt);
						$res=$this->update_where('customer_master',$data,$where);
						if($res)
						{
							echo "<script>
							alert('Save Success');
							window.location='customer_profile';
							</script>";
						}
						else
						{
							echo "Not success";
						}
					}

                 }
                }
            include_once('edit_customer.php');
            break;

            case '/delete':
                if(isset($_REQUEST['del_wish_id']))
      {
        $wish_id=$_REQUEST['del_wish_id'];
        $where=array("wish_id"=>$wish_id);
        $res=$this->delete_where('wish_master',$where);
        echo "<script>
        alert('Delete Success');
        window.location='Wish_list';
        </script>";
      }

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
            include_once('manage_car_cate.php');
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


            case '/add_car':
            include_once('add_car.php');
            break;


            case '/manage_car':
            include_once('manage_car.php');
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
                $wish_arr=$this->select_join('wish_master','customer_master','customer_master.cus_id=wish_master.cus.id');
                include_once('manage_Wish_list.php');
            break;


            case '/manage_booking_list':
                include_once('manage_booking_list.php');
            break;


            case '/manage_payment':
                include_once('manage_payment.php');
                break;

            case '/signup':
            include_once('signup.php');
            break;

            case '/customer_profile':
            $cus_id=$_SESSION['cus_id'];
			$where=array("cus_id"=>$cus_id);
			$res=$this->select_where('customer_master',$where);
			$fetch=$res->fetch_object();
            include_once('customer_profile.php');
            break;


            case '/wish_list':
            $wish_arr=$this->select_join2('wish_master','customer_master','wish_master.cus_id=customer_master.cus_id');
            include_once('wish_list.php');
            break;


            case '/order_detail':
                $cus_id=$_SESSION['cus_id'];
                $where=array("cus_id"=>$cus_id);
                $res=$this->select_where('customer_master',$where);
                $fetch=$res->fetch_object();
            include_once('order_detail.php');
            break;
            }
        }
    }
    $obj= new control;

?>
