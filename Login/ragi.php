<html>
    <head>
        <meta charset="utc-8">
        <title> login </title>
    </head>
    <body>
    

        <form  method="post">
            <input type="text" name="cus_name1" class="login-input" placeholder="cus_name1">
            <input type="text" name="user" class="login-input" placeholder="user">
            <input type="text" name="password" class="login-input" placeholder="password">
            <input type="text" name="mobile" class="login-input" placeholder="mobile">
            <input type="submit" name="submit" value="ragister" class="login-button">
        </form>
        <?php
     $con = new mysqli("localhost","root","","signup");
     
   if(isset($_POST['submit'])){

   
    $name1=$_POST['cus_name1'];
    $user=$_POST['user'];
    $pass=$_POST['password'];
    $mobile=$_POST['mobile'];
    $query = "INSERT INTO cus(cus_name, cus_user, cus_pass, cus_mobile) VALUES('$name1','$user','$pass','$mobile')";
  if($con->query($query)){
      echo"inster";
  }
  else{
      echo"not";
  }
 } 

?>
    </body>
</html>