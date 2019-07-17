<?php
$conn = new mysqli('localhost','root','','coursework2');
if($conn->connect_errno){
	echo"this is error";
}
else
{
	//echo "Connected Succeesfully";
	//echo "Calm Down";
}
?>