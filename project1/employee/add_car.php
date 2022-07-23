<?php
    include_once('header.php');
?>
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
                <form class="frm" name="" method="post">
                <div class="from-group"> 
                    <legend align="center">Car ragister</legend>
                    <table class="table">
                        <tr>
                            <td><input type="text" name="car_cate" class="form-control" placeholder="car category"></td>
                            <td><input type="text" name="cl_id" class="form-control " placeholder="clinet id"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="state_id" class="from-control" placeholder="state name"></td>
                            <td><input type="text" name="city" class="from-control" placeholder="city name"></td>
                            <td><input type="text" name="area_id" class="from-control" placeholder="area name"></td>
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
                            <td><input type="submit" name="submit" value="submit" class="su "></td>
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