<?php
    include_once('header.php');
?>
<title>Add Clinet</title>
    <div id="page-wrapper" style="min-height: 703px;">
	<div class="main-page">
		<div class="forms">
		<h2 class="title1"> Form</h2>
		    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
				<div class="form-title">
							<h4>Client Form</h4>
				</div>
				<div class="form-body">
                <form class="frm" name="" method="post">
                <div class="form-group">
                    <legend> Register clinet </legend>
                    <table class="table">
                        <tr>
                            <td>Name:<input type="text" name="cl_name" class="form-control" placeholder="name"></td>
                            <td>Username:<input type="text" name="cl_user" class="form-control" placeholder="username"></td>
                        </tr>
                        <tr>
                        <div class="input-group" id="show_hide_password">
                            <td>
                                <input type="password" name="cl_password"  class="pass from-control" id="myInput" value="" placeholder="password">  <input type="checkbox" onclick="myFunction()">Show
                                <script>
                                function myFunction() {
                                    var x = document.getElementById("myInput");
                                    if (x.type === "password") {
                                    x.type = "text";
                                    } else {
                                    x.type = "password";
                                    }
                                }
                                </script>
                            </td> 
                        </div>
                    </tr>
                    <tr>
                        <td>Mobile:<input type="number" class="from-control"  name="cl_mobile" placeholder="mobile"></td>
                        <td><div class="input-group mb-3">
                            <input type="text" class="form-control" name="cl_mail" placeholder="client mail" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                              <span class="input-group-text" id="basic-addon2">@example.com</span>
                            </div>
                          </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                <textarea class="form-control" name="cl_address" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                        </td>
                    </tr>
                    <tr>
                    <td>	
						<input type="submit"  name="submit" value="submit"  class="su from-control"  >
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
</div>
<?php
    include_once('footer.php');
?>