<?php
session_start();
$conn = new mysqli('localhost','root','','coursework2');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
	
	
<div id="Heading" style="margin-top: 5%;margin-left:-3%;background-color:#d6d5d4;height: 180px;width: 103.6%">
    <p style="margin-left:37%;top: 30%;position: absolute"><font size="7">About Namal Cafeteria</font></p>
    <p style="margin-left:32%;top: 45%;position: absolute"><font size="6">We believe food lovers should order food easily</font></p>
</div>
<div id="Indormation" style="margin-top: 30%;margin-left:-3%;background-color:white;height: 300px;width: 103.6%">
<h1 style="margin-left:25%;top: 65%;position: absolute"><font size="5">We believe food lovers should have an amazing ordering experience for<br>their delivery. We think this should be possible without ripping off<br>restaurants by charging high commission payments on every order.</h1>
<p style="margin-left:26%;top: 90%;position: absolute"><font size="4">We love the convenience of ordering online for food delivery and we order all the time.<br>
But we noticed that, while many restaurants have great food,they lose potential sales<br>because they don't provide an online ordering service.
And many of those who have built<br>their own online ordering service end up with a buggy program, resulting in bad user experiences.<br>This is when we noticed that restaurant owners don't have a choice. Either they go with one of the big<br>portals, who charge between 10%-18% commission on every order, or ask the web agency of their<br>choice to build a custom module - which turns out to be very expensive as well.
It is our goal to solve<br>this problem and provide a solution that restaurant owners and their customers love.</font>
</p>
</div>




</body>
</html>