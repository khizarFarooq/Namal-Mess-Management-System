<?php
session_start();
$conn = new mysqli('localhost','root','','coursework2');
?>
<html>
<head>
	<title>Namal Mess Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css" />

	<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
</head>
	<body style="background-color: #f1f1f1">
	
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
	
	<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1" style="margin-top: -12px;">
<div class="ws_images"><ul>
		<li><img src="data1/images/chef.jpg" alt="chef" title="chef" id="wows1_0"/></li>
		<li><img src="data1/images/french_fries.jpg" alt="French Fries" title="French Fries" id="wows1_1"/></li>
		<li><img src="data1/images/khraai.jpg" alt="khraai" title="khraai" id="wows1_2"/></li>
		<li><img src="data1/images/khrai.jpg" alt="khrai" title="khrai" id="wows1_3"/></li>
		<li><img src="data1/images/samosa.jpg" alt="samosa" title="samosa" id="wows1_4"/></li>
		<li><img src="data1/images/zingerburger.jpg" alt="zinger-burger" title="zinger-burger" id="wows1_6"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="chef"><span><img src="data1/tooltips/chef.jpg" alt="chef"/>1</span></a>
		<a href="#" title="French Fries"><span><img src="data1/tooltips/french_fries.jpg" alt="French Fries"/>2</span></a>
		<a href="#" title="khraai"><span><img src="data1/tooltips/khraai.jpg" alt="khraai"/>3</span></a>
		<a href="#" title="khrai"><span><img src="data1/tooltips/khrai.jpg" alt="khrai"/>4</span></a>
		<a href="#" title="samosa"><span><img src="data1/tooltips/samosa.jpg" alt="samosa"/>5</span></a>
		<a href="#" title="zinger-burger"><span><img src="data1/tooltips/zingerburger.jpg" alt="zinger-burger"/>7</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">http://wowslider.net/</a> by WOWSlider.com v8.7</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<br><br><br>
<!-- End WOWSlider.com BODY section -->




<?php
	$query_select="SELECT * FROM food_itms";
	$results_select=$conn->query($query_select);
	?>
	<div style="margin-left:12%; height:1000px;">

	<?php
	while($row_select=mysqli_fetch_array($results_select))
	{
	?>
		<table style="border: 15px solid #f1f1f1;">
				<tr>
					<?php
						$count=0;
						while ($row_select=mysqli_fetch_array($results_select)) {
							if ($count<=3) {
								$data=base64_encode($row_select['photo']);
							?>
							<td><?php echo '<img width=300px height= 300px src="data:image/jpeg;base64,' . $data . '" />'; ?>
								
								<table>
									<tr>
											<td><b>Item Name</b></td>
											<td><?=$row_select['item_name']?></td>
									</tr>

									<tr>
											<td><b>Price</b></td>
											<td><?=$row_select['price']?></td>
									</tr>

									<tr>
											<td><b>Half Price</b></td>
											<td><?=$row_select['halfprice']?></td>
									</tr>
										<?php
											if (isset($_SESSION['admin'])) {
											?>
									<tr>
										<td><a href="delete_record.php?id=<?=$row_select['id']?>"><input type="submit" value ="Delete"></td>
									</tr>

									<?php
								}
									?>

								</table>	

							</td>
	 					<?php
							}
							?>


						<?php
						if ($count==3) {
							break;
						}
						$count++;
						}
						?>					
				</tr>
		</table>
	
	<?php
	}
	?>
	</div> 



<!--<footer id="footer" style="background-color: black;width: 100%;height:342px;top: 4px;position: relative">
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
</footer>-->

	</body>
</html>

