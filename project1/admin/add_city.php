<?php
    include_once('header.php');
?>
    <title> City </title>
    <div id="page-wrapper" style="min-height: 703px;">
	<div class="main-page">
		<div class="forms">
		<h2 class="title1"> Form</h2>
		    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
				<div class="form-title">
							<h4>Employee Form</h4>
				</div>
				<div class="form-body">
                <form class="frm" name="" method="post">
                <div class="form-group">
                    <legend> Register city</legend>
                    <table class="table">
                    <tr>
                    <select name="st_name" id="">
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
                           </select>
                        <tr>
                            <td>city Name:<input type="text" name="city_name" class="form-control" placeholder="city name"></td>
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