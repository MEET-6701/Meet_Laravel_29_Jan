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
            include_once('index.php');
            break;

            case '/more_car':
            $car_arr=$this->select_join2('car_master','car_cate_master','car_master.car_cate_id=car_cate_master.car_cate_id');
            include_once('more_car.php');
            break;

            case '/service':
            include_once('service.php');
            break;


            case '/more_detail':

           if(isset(($_REQUEST['fetch_car_id'])))
                {
                    $car_id=$_REQUEST['fetch_car_id'];
				    $where=array("car_id"=>$car_id);

                    $sel_res=$this->join_with_where('car_master','car_cate_master','car_master.car_cate_id=car_cate_master.car_cate_id','area_master','car_master.area_id=area_master.area_id','city_master','car_master.city_id=city_master.city_id',$where);

                    $fetch=$sel_res->fetch_object();
                }
            include_once('more_detail.php');
            break;


            case '/team':
            include_once('team.php');
            break;

            case '/edit_customer':
            include_once('edit_customer.php');
            break;

            case '/add_cart':
            if(isset(($_REQUEST['fetch_car_id'])))
                 {
                  $car_id=$_REQUEST['fetch_car_id'];
 				          $where=array("car_id"=>$car_id);
                  $sel_res=$this->join_with_where('car_master','car_cate_master','car_master.car_cate_id=car_cate_master.car_cate_id','area_master','car_master.area_id=area_master.area_id','city_master','car_master.city_id=city_master.city_id',$where);
                  $fetch=$sel_res->fetch_object();
                 }
                 if(isset($_REQUEST['add_cart'])){
                    $car_id=$_REQUEST['car_id'];
                    $cus_id=$_REQUEST['cus_id'];


                    date_default_timezone_set('asia/calcutta');
                    $created_dt=date("Y-m-d H:i:s");
                    $updated_dt=date("Y-m-d H:i:s");

                    $arr=array("car_id"=>$car_id,
                    "cus_id"=>$cus_id,

                    "created_dt"=>$created_dt,
                    "updated_dt"=>$updated_dt);

                    $res=$this->insert('wish_master',$arr);
                    if($res)
                    {
                        echo "<script>
                        alert('add to cart successfully');
                        window.location.href='../customer/wish_list';
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
            include_once('add_cart.php');
            break;


            case '/about':
            include_once('about.php');
            break;

            case '/contact_us':


                if(isset($_REQUEST['submit']))
                {
                    $co_mail=$_REQUEST['co_mail'];
                    $co_reason=$_REQUEST['co_reason'];
                    $co_discription=$_REQUEST['co_discription'];

                    date_default_timezone_set('asia/calcutta');
				    $created_dt=date("Y-m-d H:i:s");
				    $updated_dt=date("Y-m-d H:i:s");

                    $arr=array("co_mail"=>$co_mail,
                    "co_reason"=>$co_reason,
                    "co_discription"=>$co_discription,
                    "created_dt"=>$created_dt,
                    "updated_dt"=>$updated_dt);
                    $res=$this->insert('contact_master',$arr);
				if($res)
				{
                    echo "<script>
					alert('Register Success');
					window.location='contact_us';
					</script>";
				}


			}


            include_once('contact_us.php');
            break;



            }
        }
    }
    $obj= new control;

?>
