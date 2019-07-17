<?php
session_start();
if (!(isset($_SESSION['admin']))) {
  header("Location:signin.php");
}

$conn = mysql_connect('localhost','root','');
$db = mysql_select_db('coursework',$conn);
$id=$_REQUEST['id'];

$breakfast=$_POST['breakfast'];
$lunch=$_POST['lunch'];
$dinner=$_POST['dinner'];



$query_insert="UPDATE menu  SET
				breakfast='".$breakfast."',
				lunch='".$lunch."',

				dinner='".$dinner."'
				WHERE id='".$id."'
				
				";


				
$result_insert=mysql_query($query_insert);
if($result_insert)
{
	echo "edited";
	//header("Location: edit_record.php?id=".$id."");
	header("Location:weekly_menu.php");
}

?>