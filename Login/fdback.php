<html>
    <head>
        <meta charset="utc-8">

        <title> feedback </title>

    </head>
    <body>
        <form method="post">
            <input type="text" name="reason" placeholder="res">
            <input type="text" name="discription" placeholder="dis">
            <input type="submit" name="submit" value="ragister">
        </form>
    </body>
</html>
<?php
$servername="localhost";
$userhost="root";
$password="";
$database="signup";



$con=new mysqli("$servername","$userhost","$password","$database");
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
if(isset($_POST['submit'])){
    $reason=$_POST['reason'];
    $discription=$_POST['discription'];
    $query="INSERT INTO feedback(fd_re,fd_dis) VALUES($reason,$discription)";
   if ($con->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . $con->error;
}
 }
?>