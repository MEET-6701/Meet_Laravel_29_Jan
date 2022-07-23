<?php
    include_once('header.php');
?>
<script>


        function getCity(str)
{
	$.ajax
	({
		type: "POST",
		url: "citydata",
		data:"btn=" + str,
		success: function(data)
		{
			$("#city_id").html(data) ;
		}
	});
}
</script>
<title> Add Car </title>

<div id="page-wrapper" style="min-height: 703px;">
	<div class="main-page">
		<div class="forms">
		<h2 class="title1"> Form</h2>
		    <div class="form-grids row widget-shadow" data-example-id="basic-forms">
				<div class="form-title">
							<h4> Add Car </h4>
				</div>
				<div class="form-body">
                <form class="frm" name="" method="post" enctype="multipart/form-data">
                <div class="from-group">
                    <legend align="center">Car ragister</legend>
                    <table class="table">
                        <tr>
                            <td>
                                <select name="car_cate_id">
                                    <option> select category </option>
                                    <?php
                                     if(!empty($cate_arr)){
                                         foreach($cate_arr as $data){
                                             ?>
                                             <option value="<?php echo $data->car_cate_id ?>"><?php echo $data->cate_name?> </option>
                                             <?php
                                         }
                                     }
                                    ?>
                                </select>
                            </td>


                        </tr>
                        <tr>
                        <td>
                                <select name="st_id"  onchange="getCity(this.value)">
                                <option> select state</option>
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
                            </td>



                            <td>
                                <select name="city_id" id="">
                                <option> select city </option>

                                </select>
                            </td>

                            <td>
                                <select name="area_id" id="">
                                <option> select area </option>
                                     <?php
                                        if(!empty($area_arr)){
                                        foreach($area_arr as $data){
                                    ?>
                                <option value="<?php echo $data->area_id;?>"><?php echo $data->area_name;?> </option>
                            <?php
                                    }
                                }
                            ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" name="car_name" class="form-control" placeholder="car name"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="car_number" class="form-control" placeholder="car number"></td>
                            <td><input type="text" name="car_color" class="form-control" placeholder="car color"></td>
                        </tr>
                        <tr>
                            <td><div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                  <input type="file" name="rc_pic" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                              </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" name="car_pic" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                  </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" name="rc_number" class="form-contol" placeholder="rc number"></td>
                            <td><input type="text" name="car_price" class="form-control" placeholder="car price"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submit" value="submit" class="form-control"></td>
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
