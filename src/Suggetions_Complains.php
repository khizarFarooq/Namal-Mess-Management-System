<?php
session_start();
$conn = new mysqli('localhost','root','','coursework2');
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Suggestions or Complains</title>
	<link rel="stylesheet" type="text/css" href="style.css"> 
<style>
#SuggetionOrComplains{
  position:absolute;
    top: 45%;
    left: 60%;
    width:30em;
    height:56em;
    margin-top: -9em; /*set to a negative number 1/2 of your height*/
    margin-left: -15em; /*set to a negative number 1/2 of your width*/ 
}
#background_Pic{
	

	background-image: url(BG.jpg); 
  width: 100%;
  height: 100%;
  background-repeat: no-repeat;
 
}

</style>	
</head>
<body>
<center><img src="logo.png" width="50px" height="50px"><b style="font-size: 25px;">Namal Mess Management System</b></center>
	
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

<?php
  if (!(isset($_SESSION['admin']))) {
?>
<div id="background_Pic">
<div id="SuggetionOrcomplains">
<h1 style="color:steelblue;">Suggetion or Complains</h1>
<hr style="color: steelblue;width:70%;left:0%;position: absolute;margin-top:-1%" ></hr>
<form style="color:white" action="suggestion_hdl.php" method="post">
    First Name*<br><br><input type="text" name="fname" id="fname" required><br><br>
    Last Name*<br><br><input type="text" name="lname" id="lname" required ><br><br>
    Phone No*<br><br><input type="text" name="phone" id="phone"><br><br>
    Your E-mail Adress*<br><br><input type="text" size="50" name="email" id="email" placeholder="example@gmail.com"><br><br>
    
    Comments*<br><br><textarea name="area" id="area" cols="50" rows="10" resize: none></textarea><br><br>
    <input type="submit" value="Send">
</form>

    
</div>
</div>

<?php
}
?>

<?php
if (isset($_SESSION['admin'])) {
 $query_select="SELECT * FROM suggestion";
  $results_select= $conn->query($query_select);
  ?>
  <div id="background_Pic">
  <table style="margin-left:15%">
  <tr>
  <th>First Name</th>
  <th>Last Name</th>
  <th>Phone No</th>
  <th>Email</th>
  <th>Comments</th>
  </tr>
  <?php
  while($row_select=  $results_select->fetch_assoc())
  {
?>


<tr>
  <td style="width:200px; border:1px #333333 solid;"><?=$row_select['firstname']?></td>
  <td style="width:200px; border:1px #333333 solid;"><?=$row_select['lastname']?></a></td>
  <td style="width:200px; border:1px #333333 solid;"><?=$row_select['phone']?></a></td>
  <td style="width:200px; border:1px #333333 solid;"><?=$row_select['email']?></td>
  <td style="width:200px; border:1px #333333 solid;"><?=$row_select['comment']?></td>
  </tr>


<?php  
}
?>


<?php  
}
?>
</table>
</div>

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