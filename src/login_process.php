<?php
session_start();
$conn = new mysqli('localhost','root','','coursework2');
if($conn->connect_errno){
	echo"this is error";
}
else
{
	//echo "Connected Succeesfully";
	//echo "Calm Down";
}
$username=$_POST['username'];
$password=$_POST['pass'];

$result = mysqli_query($conn,"select * from user where username='$username' and password = '$password'")
                    or die("Failed to query database".mysqli_error());

$row = mysqli_fetch_array($result);
if($row['username'] == $username && $row['password'] == $password)
{
	$_SESSION['admin']=$username;
	header("location:index.php");
    //echo "Login sucessfull welcome ".$row['username'];
}
else
{
	header("location:signin.php");
   // echo "login failed";
}


?>