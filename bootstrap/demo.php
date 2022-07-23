<html>
    <head>
        <meta charset="utc-8">
        <title> login </title>
    </head>
    <body>
        <form class="form" action="demo.php" method="post">
            <input type="text" name="fd_re"  placeholder="reason">
            <input type="text" name="fd_dis"  placeholder="discriptation">
            <input type="submit" name="submit" value="ragister" >
        </form>
    </body>
</html>
<?php
    $conn=mysqli_connect("localhost","root","","signup");

    if(!$conn){
        die("not connect".mysqli_connect_error);
    }
    if(isset($_POST['submit'])){
        $fd_re=$_POST['fd_re'];
        $fd_dis=$_POST['fd_dis'];
        $sql="INSERT INTO feedback(fd_re,fd_dis) VALUES ('$fd_re','$fd_dis')";
    }
    if ($conn->query($sql)) {
        echo "hello";
    }
    else{
        echo"ni";
    }

?>