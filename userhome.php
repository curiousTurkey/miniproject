<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>Volkswagen Services</title>
	 <link rel="stylesheet" type="text/css" href="css/user.css">
	 <link rel="stylesheet" type="text/css" href="usermenu.css">
</head>

<body>
	<form method="POST">
	<input type="checkbox" id="check" checked>
	<header>
		<label for="check">
			<div class="menubar"></div>
		</label>
		<div class="logo"> </div>
		
		<div class="left">
			<h3>Volkswagen <span> Services </span></h3>
		</div>

		<div class="right">
			<a href="logout.php" class="logout_btn">Signout </a>
		</div>
	</header>
       
       <div class="sidebar">
 
	<center>
		<img src="css/images/user.png" class="profile_pic">
		<h4><font color="#fff"><?php if(isset($_SESSION['loggeduser'])) {echo $_SESSION['loggeduser']; }?></font></h4>
    </center>

<a href="user-servicebooking.php"><div class="icon"></div><span>Service Booking</span></a>
<a href="servicerecords&stats.php"><div class="icon1"></div><span>Service Records</span></a>
<a href="bill.php"><div class="icon2"></div><span>View Bill</span></a>
<a href="userdetailsedit.php"><div class="icon3"></div><span>Edit Details</span></a> 
<a href="userhome.php"><div class="icon4"></div><span>Home</span></a>
</div>

<div class="content"></div>
</form>


<?php
include('connection.php');

?>

</body>
</html>