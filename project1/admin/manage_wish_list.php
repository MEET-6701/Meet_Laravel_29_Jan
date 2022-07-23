<?php
    include_once('header.php');
?>
<title>Wish List</title>
<div id="page-wrapper" style="min-height: 703px;">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Tables</h2>
					<div class="panel-body widget-shadow">
						<h4>Basic Table:</h4>
                        <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>wish id</th>
                        <th>customer name</th>
                        <th>car  name</th>
                        <th>Created dt</th>
                        <th>Updated dt</th>
                    </tr>
                </thead>
                <tbody>
                  
                   <?php
                   if(!empty($wish_arr)){
                       foreach($wish_arr as $data){
                           ?>
                           <tr>
                               <td> <?php echo $data->wish_id?> </td>
                               <td> <?php echo $data->cus_id?> </td>
                               <td> <?php echo $data->car_id?> </td>
                               <td> <?php echo $data->created_dt?> </td>
                               <td> <?php echo $data->updated_dt?> </td>

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
