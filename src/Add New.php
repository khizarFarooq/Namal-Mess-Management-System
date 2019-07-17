<?php
session_start();

if (!(isset($_SESSION['admin']))) {
  header("location:signin.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New</title>
	<link rel="stylesheet" type="text/css" href="style.css">
 <style type="text/css">
   input{
    width: 200px;
    height: 30px;
   }

 </style>
</head>
<body style="background-color: #f1f1f1;">
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
<p><center><font size="8">Add New</center></p>
<form method="post" action="Add_new.php"  enctype="multipart/form-data">
<table class="center" style="color: white ;font-size: 20px;">
<tr>
<td>Item Name:</br></br></td>
<td><input type="text" name="Item_Name"id="Item Name" placeholder="Enter Item Name"></br></br></td>
</tr>
<tr>
<td>Price:</br></br></td>
<td><input type="number" min="1" name="Price" id="Price" placeholder="Enter price"></br></br></td>
</tr>
<tr>
<td>Half Price:</br></br></td>
<td><input type="number" min="0" name="Half_Price" id="Half_Price "placeholder="Enter Half Price"></br></br></td>
</tr>
<tr>
<td>Choose Image:</br></br></td>
<td><center><input type="file"  name="imag" value="Choose"></br></br></center></td>
</tr>
<tr>
<td></td>
<td><center><input type="submit" value="Add" style="width: 100px;"></br></br></center></td>
</tr>
</table>
<div id="image" style="background: url(BG.jpg) no-repeat; width: 100%; height: 90%; background-size: 100%; margin-top: -90px;"></div>
</form>




<!--div style="background-color: black; width: 100%; height: 40%">
<div style="margin-top: 50px; margin-left: 50px;">
        <h1 style="color: white;"> Contact Us</h1>
</div>

<div>



</div>

<div>


</div>

</div-->



</body>
</html>