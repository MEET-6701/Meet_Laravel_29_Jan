<?php
    include_once('header.php');
?>
<title> ADD State </title>
    
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
                    <legend> Register clinet </legend>
                    <table class="table">
                        <tr>
                            <td> state Name:<input type="text" name="st_name" class="form-control" placeholder="name"></td>
                        </tr>
                        <tr>
                            <td>	
                                <input type="submit"  name="submit" value="submit"  class="sum from-control"  >
                            </td>
                        </tr>
                    </table>
                </div> 
            </form>
                </div>
            </div>
        </div>
    </div>
</div>  


<?php
    include_once('footer.php');
?>