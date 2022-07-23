<?php
    include_once('header.php');
?>
    <title> Add cate-category </title>
    <div id="page-wrapper" style="min-height: 703px;">
	<div class="main-page">
		<div class="forms">
		<h2 class="title1"> Form</h2>
		    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
				<div class="form-title">
							<h4>Car Category Form</h4>
				</div>
				<div class="form-body">
						<form class="frm" name="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                    <legend>car category </legend>
                    <table class="table">
                        <tr>
                            <td>
                            <div class="form-group">
						<label for="password1" class="col-form-label">Upload Pic</label>
						<input type="file" class="form-control" name="cate_img" required="">
					</div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" name="cate_name" class="form-control" value="<?php echo $fetch->cate_name ?>" placeholder="cate name"></td>
                            <img src="upload/category/<?php echo $fetch->cate_img;?>" width="250px" height="100px"/>  
                        </tr>
                        <tr>
                            <td><input type="submit" name="save" value="Register" class="sum"></td>
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
