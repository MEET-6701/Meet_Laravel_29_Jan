<?php
    
    include ("config.php");
    session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }


?>
<html>
    <head>
        <title>
            login
        </title>
    </head>
    <body>
        <div id="frm">
            <form name="f1" action="login.php" onsubmit="return validation()" mathod="POST">
                <h1> login </h1>
                <p>
                    <label>username</label> 
                    <input type="text" id="user" name="user">
                </p>
                <p>
                    <label>password</label>
                    <input type="text" id="password" name="passwod">
                </p>
                <input type = "submit" value = " Submit "/><br />
            </form>
        </div>
    </body>
</html>