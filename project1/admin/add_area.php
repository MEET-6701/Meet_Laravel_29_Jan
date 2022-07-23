<?php
    include_once('header.php');
?>
    <title> Add Area </title>
    <div id="page-wrapper" style="min-height: 703px;">
	<div class="main-page">
		<div class="forms">
		<h2 class="title1"> Form</h2>
		    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
				<div class="form-title">
							<h4>Area Form</h4>
				</div>
				<div class="form-body">
                <form class="frm" name="" method="post">
                <div class="form-group">
                    <legend> Register area</legend>
                    <table class="table">
                        <tr>
                            <td><select name="st_name" id="">
                    <option> select state </option>
                    <?php
                   if(!empty($st_arr)){
                       foreach($st_arr as $data){
                           ?>
                             <option value="<?php echo $data->st_id;?>"><?php echo $data->st_name;?> </option>
                             <?php
                       }
                   }
                   ?>
                           </select></td>
                        </tr>
                        <tr>
                            <td><select name="city_name" id="">
                    <option> select city </option>
                    <?php
                   if(!empty($city_arr)){
                       foreach($city_arr as $data){
                           ?>
                             <option value="<?php echo $data->city_id;?>"><?php echo $data->city_name;?> </option>
                             <?php
                       }
                   }
                   ?>
                           </select></td>
                        </tr>
                        <tr>
                            <td>Area Name:<input type="text" name="area_name" class="form-control" placeholder="area name"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submit" value="submit" class="sum "></td>
                        </tr>
                    </table>
                </div>
            </form>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
    include_once('footer.php');
?>