<?php
    include_once('header.php');
?>
<title>Manage contact </title>
<div id="page-wrapper" style="min-height: 703px;">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Tables</h2>
					<div class="panel-body widget-shadow">
						<h4>Basic Table:</h4>
                        <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>contact id</th>
                        <th>contact mail</th>
                        <th>contact reason</th>
                        <th>contact description</th>
                        <th>Created dt</th>
                        <th>Updated dt</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                  if(!empty($co_arr)){
                      foreach($co_arr as $data){
                          ?>
                          <tr> 
                              <td> <?php echo $data->co_id ;?> </td>
                              <td> <?php echo $data->co_mail;?></td>
                              <td> <?php echo $data->co_reason;?></td>
                              <td> <?php echo $data->co_discription;?> </td>
                              <td> <?php echo $data->created_dt;?> </td>
                              <td> <?php echo $data->updated_dt;?> </td>
                              <td><a href="delete?del_co_id=<?php echo $data->co_id ;?>" class="btn btn-danger"> <i class="fa fa-trash-o">  Delete</i> </a></td>
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