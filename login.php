
<?php
session_start();

if(isset($_POST['submit']))
	
{

$name= explode(" ", $_POST['uname']);
$pw=$_POST['password'];


$conn=mysqli_connect("localhost","root","","db1");
if($conn==false)
die('Could not Connect My Sql:' .mysql_error());

$stmt="select fname,lname,password from users where fname= '".$name[0]."' and  
lname= '".$name[1]."' and password='".$pw."' ";

$result=mysqli_query($conn,$stmt);
$row=mysqli_fetch_array($result);


if(is_array($row))
 {
$_SESSION['email']=$row['email'];
$_SESSION['name']=$row['fname'];
$_SESSION['fullname']=$row['fname']." ".$row['lname'];
  header('Location:index.php');  
 }

else
 {	
$error="Invalid information please try again";

 }
 
 mysqli_close($conn);

}
	
?>


<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <title>Login page</title>
  <link rel="stylesheet" href="styles/style_login.css">
  
</head>
<body>
  <div class="wrapper">
    <h1>Hello Again!</h1>
    <p>Welcome back you've <br> been missed!</p>
	
    <form action= " <?php $_SERVER['PHP_SELF']; ?> " method="post" name="login_form">
      <input type="text" name="uname" placeholder="Enter username" required>
      <input type="password" name="password" placeholder="Password" required>
      <p class="recover">
        <a href="#">Recover Password</a>
      </p>
    
    <input type="submit" name="submit" value="login" class="subm">
	
	<closeform></closeform></form>
	
    <p class="or">Not a member? <a href="signup.php">Register Now</a> </p>
	  
    </div>
 
</body>
</html>

