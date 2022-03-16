<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<style>
	::placeholder{
		color: #c9ccd1;
		opacity: 1;
		align: left;
	}
</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>Volkswagen Services</title>
	 <link rel="stylesheet" type="text/css" href="css/userdetailscss.css">
	 
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

<a href="servicerecords&stats.php"><div class="icon1"></div><span> Service Records</span></a>
<a href="bill.php"><div class="icon2"></div><span>View Bill</span></a>
<a href="userdetailsedit.php"><div class="icon3"></div><span>Edit Details</span></a> 
<a href="userhome.php"><div class="icon4"></div><span>Home</span></a>

</div>

<div class="content"></div>
</form>

<form method="POST">
   
	<h1>Edit Details </h1>
	<div class="box">
	
      
      <span class="name">	Name : </span>
      	<input type="text" name="Name" placeholder="" class="tname" required> <br>
     <span class="email"> Email : </span> 
        <input type="text" name="Email" placeholder="" class="temail" required> <br>
   <span class="pass"> Change Password : </span> 
        <input type="password" name="pswd" placeholder="Minimum 6 characters" required class="tpas"> <br> <span class="cps"> Confirm Password</span><input type="password" name="cpswd" class="tcpas" placeholder="" required></th>
    

   <input type="submit" name="sub" value="Submit">
</div>

<?php


if(isset($_POST) && array_key_exists('sub',$_POST))
{
  $name=$_POST['Name'];
  $email=$_POST['Email'];
  $pswd=$_POST['pswd'];
  $cpswd=$_POST['cpswd'];
  $btn=$_POST['sub'];

include('connection.php');
if(isset($_SESSION['loggeduser'])) 
{
	$usr=$_SESSION['loggeduser'];

}
else
{
	echo 'not set';
}

  $query="update signup set F_name='$name' where Username='$usr'";
  $query1="update signup set Email='$email' where Username='$usr'";
  $query2="update signin set Password='$pswd' where Username='$usr'";

 if(isset($_POST['sub']))
 {
 	if(($pswd)==($cpswd))
 	{
 		$inp=mysql_query($query,$con);
 		$inp=mysql_query($query1,$con);
 		$inp=mysql_query($query2,$con);
 		echo "<script type='text/javascript' > alert('Details Updated'); </script>";
 	}
 	else
 	 {
 	 	 header("Location: userdetailsedit.php?error1=Password Doesn't Match");

 	 }
 }	 	

}

?>

</body>
</html>