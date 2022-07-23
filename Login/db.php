<?php
$servername="localhost";
$username="root";
$password="";
$database="signup";

$conn=new mysqli($servername,$username,$password,$database);

if($conn->connect_error){
    die("connection faild:".$conn->connect_error);
}
echo "connected suceesfully";
?>