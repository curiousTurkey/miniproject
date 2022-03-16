<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>Volkswagen Services</title>
	 <link rel="stylesheet" type="text/css" href="css/hirestaff.css">
	
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
		<img src="css/images/adminpro.png" class="profile_pic">
		<h4><font color="#fff"><?php if(isset($_SESSION['loggeduser'])) {echo $_SESSION['loggeduser']; }?></font></h4>
    </center>

<a href="stockpurchase.php"><div class="icon"></div><span>Purchase Stock</span></a>
<a href="hirestaff.php"><div class="icon1"></div><span>Hire Staff</span></a>
<a href="staffdismiss.php"><div class="icon2"></div><span>Dismiss Staff</span></a>
<a href="adminbill.php"><div class="icon3"></div><span>Issue Bill</span></a> 
<a href="admindash.php"><div class="icon4"></div><span>Home</span></a>
<a href="complaintfeedback.php"><div class="icon5"></div><span>Inquiry & Feedback</span></a>
</div>

<div class="content"></div>
</form>
<div class="stat"><span><?php if(isset($_GET['error2'])) {echo $_GET['error2'];} if(isset($_GET['stat'])) { echo $_GET['stat']; } ?></span>
<div class="registration_form">
		<div class="title">
			Staff Registration Form
		</div>

		<form method="POST">
			<div class="form_wrap">
				<div class="input_grp">
					<div class="input_wrap">
						<label for="fname"> Name</label>
						<input type="text" id="fname" name="name">
					</div>
					<div class="input_wrap">
						<label for="lname"> Userame</label>
						<input type="text" id="uname" name="username" placeholder="<?php if(isset($_GET['error1'])) echo $_GET['error1']; ?>">
					</div>
				</div>
		
				
				<div class="input_wrap">
					<label for="city">Email</label>
					<input type="email" id="email" name="email">
				</div>
				<div class="input_wrap">
					<label for="country">Phone No.</label>
					<input type="text" id="phno" name="phone" placeholder="<?php if(isset($_GET['error5'])) echo $_GET['error5']; ?>">
				</div>
				<div class="input_wrap">
					<label for="country">Password</label>
					<input type="password" id="phno" name="pswd" placeholder="Minimum 6 characters" placeholder="<?php if(isset($_GET['error2'])) echo $_GET['error2']; ?>">
				</div>
				<div class="input_wrap">
					<label for="country">Confirm Password</label>
					<input type="password" id="phno" name="cpswd" placeholder="<?php if(isset($_GET['error'])) echo $_GET['error']; ?>">
				</div>
				<div class="input_wrap">
					<input type="submit" value="Register Now" class="submit_btn" name="signup">
				</div>
			</div>
		</form>
	</div>
</div>
<?php
if(isset($_POST) && array_key_exists('signup',$_POST))
{
	include("connection.php");
	$empname=$_POST['name'];
	$empphno=$_POST['phone'];
	$empemail=$_POST['email'];
	$empusrnm=$_POST['username'];
	$emppass=$_POST['pswd'];
	$empcpass=$_POST['cpswd'];
$query="insert into empsignup(F_name,Emp_email,Empusername,Phone_no)values('$empname','$empemail','$empusrnm','$empphno')";
$query1="insert into empsignin(Empusername,Password,User_type)values('$empusrnm','$emppass','Emp')";
  
if(isset($_POST['signup']))
{  
	if(strlen($emppass)<6)
	{
		header("Location:hirestaff.php?error2=Password is too short.");
		goto end;
	}
	else if(strlen($empphno)!=10)
	{
	 header("Location:hirestaff.php?error5=Phone number must be 10 digits.");
	 goto end;
	}
	
	if(($emppass)==($empcpass))
	{
    $inp=mysql_query($query,$con);
	$inp=mysql_query($query1,$con);
	header("Location:hirestaff.php?stat=Staff Registered Successfully");
    }
    else
    {
    	
    	header("Location:hirestaff.php?error=Passwords do not match! Kindly Check");
    	goto end;
    }
}

   

  if(!$inp)
  {
   header("Location: hirestaff.php?error1=Username Already Exists ! ");
  }	

end:

}
?>






</body>
</html>