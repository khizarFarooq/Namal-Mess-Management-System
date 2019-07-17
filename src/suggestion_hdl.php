<?php

$conn = mysql_connect('localhost','root','');
$db = mysql_select_db('coursework',$conn);

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$comment=$_POST['area'];


$query_insert="INSERT INTO suggestion SET
									firstname='".$fname."',
									lastname='".$lname."',
									phone='".$phone."',
									email='".$email."',
									comment='".$comment."'
									";

$result_insert=mysql_query($query_insert);
header("location:Suggetions_Complains.php");


?>