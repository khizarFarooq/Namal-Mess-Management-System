<?php

    session_start();
$conn = new mysqli('localhost','root','','coursework2');

?>

<head>
    <meta charset="UTF-8">
    <title>Menue</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>

table {
   
   border: 1px solid white;
 }
 #background_Pic{
  

  background-image: url(BG.jpg); 
  width: 100%;
  height: 100%;
  background-repeat: no-repeat;
  margin-top: -95px;
 
}

   

</style>

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
</head>
<body style="background-color: #f1f1f1;">
	

<div id="background_Pic">
<p  style="margin-top:6%;margin-left:18%;"><font size="6">I'm like a menu at an low cost restaurant.You can also afford me just like you look at me.</font></center></p>

<table style="margin-left: 15%; color: white; font: bold; font-size: 20px;">

<thead>
  <tr>
	<th></th>
    <th><img src="Cooking-Pan-Free-PNG-Image.png" alt="" height=50 width=50></img>Breakfast</th>
    <th><img src="Cooking-PNG-HD-279x279.png" alt="" height=50 width=50></img>Lunch</th>
    <th><img src=" Dinner.png" alt="" height=50 width=50></img>Dinner</th>
  </tr>
  </thead>
  
  <tbody>
  

  <?php
  $query_select="SELECT * FROM menu";
   $results_select=$conn->query($query_select);
  
  
  while($row_select=  $results_select->fetch_assoc())
  {
  ?>
  <tr>
  <td style="width:200px; border:1px #333333 solid;"><?=$row_select['day']?></td>
  <td style="width:200px; border:1px #333333 solid;"><?=$row_select['breakfast']?></a></td>
  <td style="width:200px; border:1px #333333 solid;"><?=$row_select['lunch']?></a></td>
  <td style="width:200px; border:1px #333333 solid;"><?=$row_select['dinner']?></td>
<?php
if (isset($_SESSION['admin'])) {

  ?>
  <td style="width:200px; border:1px #333333 solid;"><a href="edit_record.php?id=<?=$row_select['id']?>"> <input type="button" value="Edit"></a></td>
  <?php
}
  else

  
?> 
  </tr>
  <?php
  }
  ?>
	</tbody>
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