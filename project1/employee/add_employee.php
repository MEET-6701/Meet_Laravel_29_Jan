<title>
    Employee
</title>

<?php
    include_once('header.php');
?>
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
                    <legend> Register employee </legend>
                    <table class="table">
                        <tr>
                            <td>Name:<input type="text" name="emp_name" class="form-control" placeholder="name"></td>
                        </tr>
                        <tr>
                        <td>Username:<input type="text" name="emp_user" class="form-control" placeholder="username"></td>
                        </tr>
                        <tr>
                        <div class="input-group" id="show_hide_password">
                            <td>
                                Password:
                                <input type="password" name="emp_password"  class="pass from-control" id="myInput" value="" placeholder="password">  <input type="checkbox" onclick="myFunction()">Show
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
                        <td>Mobile: <input type="number" class="from-control"  name="emp_mobile" placeholder="mobile"></td>

                    </tr>
                    <tr>
                    <td>Username: <input type="text" name="emp_user" class="form-control" placeholder="username"></td>
                    </tr>
                    <tr><td>	
						<input type="submit"  name="submit" value="submit"   class="from-control"  >
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