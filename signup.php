

<html>
  <head>
  
    <title>Sign Up</title>
	
    <link rel="stylesheet" href="styles/style_signup.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
	
  </head>
  
  <body>
    <div class="signup-box">
      <h1>Sign Up</h1>
      <h4>It's free and only takes a minute</h4>
      <form action=" <?php $_SERVER['PHP_SELF'] ?> " method="post">
        <label>First Name</label>
        <input type="text" name="fname" placeholder="" required/>
        <label>Last Name</label>
        <input type="text" name="lname" placeholder="" required/>
        <label>Email</label>
        <input type="email" name="email" placeholder="" required/>
        <label>Password</label>
        <input type="password" name="" placeholder="" required/>
        <label>Confirm Password</label>
        <input type="password" name="password" placeholder="" required/>
        <input type="submit" value="Submit" />
      <closeform></closeform></form>
      <p>
        By clicking the Sign Up button,you agree to our <br />
        <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
      </p>
    </div>
    <p class="para-2">
      Already have an account? <a href="login.php">Login here</a>
    </p>
  </body>
</html>


<?php

error_reporting(0); 

$conn=mysqli_connect("localhost","root","","db1");

if($conn==false)
echo"the connection failed!","<br>";

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$password=$_POST['password'];
$email=$_POST['email'];
$stmt="insert into users(fname,lname,email,password) values('$fname','$lname','$email','$password')";

if(!empty($_POST))
{
if(mysqli_query($conn,$stmt))
{
	echo"1 Record adding!";
	header('Location:login.php');
}

else
	echo"cannot adding record!";
}

mysqli_close($conn);

?>


