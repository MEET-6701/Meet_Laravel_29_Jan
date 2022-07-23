<?php
    include_once('header.php');
?>
<title>Manage car</title>
<div id="page-wrapper" style="min-height: 703px;">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Tables</h2>
					<div class="panel-body widget-shadow">
						<h4>Basic Table:</h4>
                        <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <td>car id</td>
                        <td>car category</td>
                        <td>client </td>
                        <td>state id</td>
                        <td>city id</td>
                        <td>area id</td>
                        <td>car name</td>
                        <td> car color</td>
                        <td>rc pic</td>
                        <td>car pic </td>
                        <td> rc number</td>
                        <td>car price</td>
                        <td>created dt</td>
                        <td>updated dt</td>
                    </tr>
                </thead>
                <tbody>
                   
                    <?php
                   if(!empty($car_arr)){
                    foreach($car_arr as $data){
                        ?>
                        <tr>
                            <td> <?php echo $data->car_id  ;?> </td>
                            <td> <?php echo $data->car_cate_id ;?> </td>
                            <td> <?php echo $data->cl_id ;?> </td>
                            <td> <?php echo $data->st_id ;?> </td>
                            <td> <?php echo $data->city_id ;?> </td>
                            <td> <?php echo $data->area_id ;?> </td>
                            <td> <?php echo $data->car_name ;?> </td>
                            <td> <?php echo $data->car_number ;?> </td>
                            <td><img src="upload/rc_pic/<?php echo $data->rc_pic;?>" hight="50px" width="50px"></td>
                            <td><img src="upload/car_pic/<?php echo $data->car_pic;?>" hight="50px" width="50px"></td>
                            <td> <?php echo $data->rc_number ;?> </td>
                            <td> <?php echo $data->car_price ;?> </td>
                            <td> <?php echo $data->created_dt;?> </td>
                            <td> <?php echo $data->updated_dt;?> </td>
                            <td><a href="delete?del_car_id=<?php echo $data->car_id ;?>" class="btn btn-danger"> <i class="fa fa-trash-o">  Delete</i> </a></td>



                    </tr>
                    <?php
                    }
                }
                   ?>
                </tbody>
            </table>
                    </div>
                </div>      
			</div>
</div>
<?php
    include_once('footer.php');
?>