<?php
$conn = new mysqli('localhost','root','','coursework2');
$name = $_POST['Item_Name'];
$price = $_POST['Price'];
$halfprice = $_POST['Half_Price'];
$photo = addslashes(file_get_contents($_FILES['imag']['tmp_name']));
$query = "INSERT INTO food_itms VALUES('','$name','$price','$halfprice','$photo')";
if ($conn->multi_query($query) === TRUE) {
	header('location: Add New.php');
}
else
{
	echo mysqli_error();
}


?>