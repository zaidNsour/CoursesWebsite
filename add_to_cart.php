
<?php

session_start();
$added=false;

if( isset($_SESSION['fullname']) ){
	$conn=mysqli_connect("localhost","root","","db1");
	if($conn==false)
		echo"the connection failed!","<br>";
	$course_name=$_POST['productTitle'];
	$user_name=$_SESSION['fullname'];
	$stmt="insert into addedCourse(user_name,course_name) values('$user_name','$course_name')";
	if(!empty($_POST)){
		if(mysqli_query($conn,$stmt)){
			$added=true;
			mysqli_close($conn);
			}
		}
}

echo"<html>";
echo"<head>";
echo"</head>";
echo"<body>";

if($added==true)
	echo"<h1 style='text-align:center'>The Cousre has been added!</h1>";
else{
	echo"<h1>Please log in to be able to purchase the course</h1>";
	echo"<a href='login.php' style='text-align:center'>Log in</a>";
	}
	

	echo"<br><br>";

	echo"<a href='index.php' style='text-align:center'>back to home</a>";

echo"</body>";

echo"</html>";








?>


