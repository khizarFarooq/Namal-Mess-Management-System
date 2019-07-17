<?php
$conn = mysql_connect('localhost','root','');
$db = mysql_select_db('coursework',$conn);
$id=$_REQUEST['id'];

$query_delete="DELETE FROM food_itms WHERE id='".$id."'";
$result_delete=mysql_query($query_delete);
header("location:index.php");
?>