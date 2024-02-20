<?php

$conn=mysqli_connect("localhost","root","","db1");

if($conn==false)
echo"the connection failed!","<br>";

$uname=$_POST['uname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$stmt="insert into contact_us(name,email,phone,message) values('$uname','$email','$phone','$message')";

if(!empty($_POST) ){
  mysqli_query($conn,$stmt);
  mysqli_close($conn);
  }


?>


<html>
<head></head>

<body style="text-align:center;">
<h1>Thank you, we will contact you as soon as possible</h1>
<br><br>
<a href="index.php" >Back to home page</a>
</body>

</html>