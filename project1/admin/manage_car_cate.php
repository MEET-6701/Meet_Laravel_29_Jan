<?php
    include_once('header.php');
?>
    <title> Manage car category </title>
     <div id="page-wrapper" style="min-height: 703px;">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Tables</h2>
					<div class="panel-body widget-shadow">
						<h4>Basic Table:</h4>
                        <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>category id</th>
                        <th>category name</th>
                        <th>category image</th>
                        <th>Created dt</th>
                        <th>Updated dt</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(!empty($cate_arr)){
                            foreach($cate_arr as $data){
                    ?>
                    <tr>
                        <td><?php echo $data->car_cate_id ?></td>
                        <td><?php echo $data->cate_name?></td>
                        <td><img src="../admin/upload/category/<?php echo $data->cate_img;?>" hight="50px" width="50px"></td>
                        <td><?php echo $data->created_dt;?></td>
                        <td><?php echo $data->updated_dt;?></td>
                        <td><a href="delete?del_cate_id=<?php echo $data->car_cate_id ;?>" class="btn btn-danger"> <i class="fa fa-trash-o">  Delete</i> </a></td>
                        <td>  <a href="edit_cate?edit_cate_id=<?php echo  $data->car_cate_id;?>" class="btn btn-warning"><i class="fa fa-pencil">  edit</a></i></p> </td>
                    </tr>
                    <?php
                            }
                        }
                    else{
                        ?>
                        <tr>
                        <td> data not found </td>
                        <tr>
                        <?php
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