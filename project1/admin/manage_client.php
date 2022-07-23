<?php
    include_once('header.php');
?>
<title>Manage client</title>
<div id="page-wrapper" style="min-height: 703px;">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Tables</h2>
					<div class="panel-body widget-shadow">
						<h4>Basic Table:</h4>
                        <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th> client id </th>
                        <th> clinet name</th>
                        <th> clinet mobile</th>
                        <th> client mail </th>
                        <th> client username </th>
                        
                        <th> client address</th>
                        <th> created dt</th>
                        <th> updated dt</th>
                    </tr>
                </thead>
                <tbody>
                    
                  <?php
                  if(!empty($cl_arr)){
                      foreach($cl_arr as $data){
                          ?>
                          <tr> 
                              <td> <?php echo $data->cl_id;?> </td>
                              <td> <?php echo $data->cl_name;?></td>
                              <td> <?php echo $data->cl_mobile;?></td>
                              <td> <?php echo $data->cl_mail;?> </td>
                              <td> <?php echo $data->cl_user;?> </td>
                             
                              <td> <?php echo $data->cl_address;?> </td>
                              <td> <?php echo $data->created_dt;?> </td>
                              <td> <?php echo $data->updated_dt;?> </td>
                              <td><a href="delete?del_cl_id=<?php echo $data->cl_id ;?>" class="btn btn-danger"> <i class="fa fa-trash-o">  Delete</i> </a></td>

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