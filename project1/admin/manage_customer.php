<?php
    include_once('header.php');
?>
<title>Manage Customer</title>
    <div id="page-wrapper" style="min-height: 703px;">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Tables</h2>
					<div class="panel-body widget-shadow">
						<h4>Basic Table:</h4>
                        <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>cus id</th>
                        <th>cus name</th>
                        <th>cus user</th>
                        <th>cus password</th>
                        <th>cus mobile</th>
                        <th>cus mail</th>
                        <th>cus driving licence</th>
                        <th>cus gender</th>
                        <th>cus address</th>
                        <th>Created dt</th>
                        <th>Updated dt</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                   if(!empty($cus_arr)){
                    foreach($cus_arr as $data){
                        ?>
                        <tr>
                            <td> <?php echo $data->cus_id  ;?> </td>
                            <td> <?php echo $data->cus_name ;?> </td>
                            <td> <?php echo $data->cus_user ;?> </td>
                            <td> <?php echo $data->cus_password ;?> </td>
                            <td> <?php echo $data->cus_mobile ;?> </td>
                            <td> <?php echo $data->cus_mail ;?> </td>
                            <td> <?php echo $data->cus_driveing_license ;?> </td>
                            <td> <?php echo $data->cus_gender ;?> </td>
                            <td> <?php echo $data->cus_address ;?> </td>
                            <td> <?php echo $data->created_dt;?> </td>
                            <td> <?php echo $data->updated_dt;?> </td>
                            <td><a href="delete?del_cus_id=<?php echo $data->cus_id ;?>" class="btn btn-danger"> <i class="fa fa-trash-o">  Delete</i> </a></td>


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