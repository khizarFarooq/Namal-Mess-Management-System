<?php
session_start();
if (!(isset($_SESSION['admin']))) {
  header("location:signin.php");
}
$conn = mysql_connect('localhost','root','');
$db = mysql_select_db('coursework',$conn);
$id=$_REQUEST['id'];

$query_select="SELECT * FROM menu WHERE id='".$id."' LIMIT 1";
$results_select=mysql_query($query_select);

$row_select= mysql_fetch_array($results_select)
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Record</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <center><img src="logo.png" width="50px" height="50px"><b style="font-size: 25px;">Namal Mess Management System</b></center>
</head>
<body style="background-color: #f1f1f1;">

  
  <ul class="headerlist">
  <li class="headerinner"><a class="active" href="index.php" >Home</a></li>
  <li class="headerinner"><a href="Suggetions_Complains.php">Suggestions and complaints</a></li>
  <li class="headerinner"><a href="About_Us.php">About US</a></li>
  <li class="headerinner"><a href="weekly_menu.php">Menu</a></li>
  
  <?php
  
    if (isset($_SESSION['admin'])) {

      ?>
      <li class="headerinner"><a href="Add New.php">Add New</a></li>
      <?php
    }
  ?>
 


    <?php
    if (!(isset($_SESSION['admin']))) {

      ?>
         <li  class="headerinner" style="float:right;"><a href="signin.php"><strong>SignIn</strong></a></li>
    <?php
    }
    ?>


    <?php
    if (isset($_SESSION['admin'])) {

      ?>
         <li  class="headerinner" style="float:right;"><a href="signout.php"><strong>Log Out </strong></a></li>
    <?php
    }
    ?>

</ul>
<img src="Background.jpg" width="100%" style="margin-top: -10px;">
<form method="post" action="edit_hdl.php" enctype="multipart/form-data" >
<table class="center" >
<tr>
<td><h2 style="color:white">Breakfast:</h2></td>
<td><input type="text" style="height:30px;width:120%;" height:"10" id="breakfast" name="breakfast" value="<?=$row_select['breakfast']?>" required ></td>
</tr>
<tr>
<td><h2 style="color:white">Lunch:</h2></td>
<td><input type="text" style="height:30px;width:120%"id="lunch" name="lunch" value="<?=$row_select['lunch']?>"></td>
</tr>
<tr>
<td><h2 style="color:white">Dinner:</h2></td>
<td><input type="text" style="height:30px;width:120%" id="dinner" name="dinner" value="<?=$row_select['dinner']?>"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" value="<?=$id?>" name="id">
    <input type="submit" id="txt_v" >  </br></br></td>
</tr>
</table>
</form>


<footer id="footer" style="background-color: black;width: 100%;height:342px;top: 4px;position: relative">
<div id="FollowUsOn" style="position:absolute;left:2%;width:35%;height:100%;top:20px;">
 <a href="home.html"><p style="font-size: 20px;color: white;font-size: 20px;font-family: Arial;">
        Home
    </p></a>
   <a href="About_Us.html"> <p style="color: white;font-size: 20px;font-family: Arial;">
        About Us</p></a>
    <a href="Weekely_Menue.html"><p style="color: white;font-size: 20px;font-family: Arial;"> Weekely Menue</p></a>
    <a href="Today_Menue.html"><p style="color: white;font-size: 20px;font-family: Arial;">Today Menue
       </p></a>
    <a href="Suggetions_Complains.html"><p style="color: white;font-size: 20px;font-family: Arial;">Suggetion and Complains
        </p></a>
</div>
<div id="Contact_Us" style="margin-left:60%;top:30px;position:relative">
<a href="Contact_Us.html"><h1 style="color:white;">Contact Us</h1></a>
 <h3 style="color:white;">ADRESS</h3>
  <p style="color:white">30 Km Talagang Road, Mianwali, 42250, Pakistan</p>
    <hr style="width: 80%;margin-left:-1%"></hr>
    <img src="phone.png" width="40px">
    <h3 style="margin-left:8%;margin-top:-7%;color:white">TELEPHONE</h3>
    <p style="color:white">+92 (459) 236995</p>
    <hr style="width: 80%;margin-left:-1%"></hr>
    <img src="e-mail.png" width="40px">
    <h3 style="margin-left:9%;margin-top:-7%;color:white">E-MAIL</h3>
    <P style="color:white">info@namal.edu.pk</P>
</div>
<div id="aboutUs" style="margin-left:30%;position:absolute;top:10px;width:35%;height:10%;">
<h1 style="color:white ;font-family: 'Rage Italic';">Follow us On</h1>
<a href="https://www.facebook.com/NamalCollege"><img src="facebook.png" width="45px"></a>
<a href="https://twitter.com/namalcollege1"><img src="Twiter.png" width="45px"></a>
<a href="https://www.instagram.com/namalcollege/"><img src="instagram.png" width="45px"></a>
<a href="https://vimeo.com/namalcollege1"><img src="vimo.png" width="45px"></a>
</div>
</footer>

</body>
</html>