<?php
    include_once('header.php');
?>
    <div id="page-wrapper" style="min-height: 703px;">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Tables</h2>
					<div class="panel-body widget-shadow">
						<h4>Basic Table:</h4>
                        <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th> state id </th>
                        <th> state name </th>
                        <th> created dt </th>
                        <th> updated dt</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(!empty($st_arr))
                    {
                        foreach($st_arr as $data){
                            ?>
                            <tr>
                                
                                <td> <?php echo $data->st_id;?></td>
                                <td> <?php echo $data->st_name;?></td>
                                <td><?php echo $data->created_dt;?></td>
                                <td><?php echo $data->updated_dt;?></td>
                                <td><a href="delete?del_state_id=<?php echo $data->st_id ;?>" class="btn btn-danger"> <i class="fa fa-trash-o">  Delete</i> </a></td>

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