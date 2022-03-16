<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
</style>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>Volkswagen Services</title>
	<link rel="stylesheet" type="text/css" href="css/adminbill.css">
	<link rel="stylesheet" type="text/css" href="css/invoice.css">
	<script type="text/javascript" src="js/jquery.js"></script> 
	<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
	<script type="text/javascript" src="DataTables/datatables.min.js"></script>


	 <?php
	  include("connection.php");
	  $cdate=date("Y-m-d",strtotime("Today"));
      $query="select * from servicebook";
      $result=mysql_query($query,$con);
	  if(isset($_GET['scost'])){
		  $_SESSION['scost'] = $_GET['scost'];
		  $scost = $_SESSION['scost'];
	  }
      if(isset($_GET['id']))
      {
      	$_SESSION['billuser']=$_GET['id'];
      	$uid=$_GET['id'];
      }
    
      if(isset($_GET['sid'])){
      $_SESSION['billuserserviceid']=$_GET['sid'];
      $serviceid=$_GET['sid'];
      }
      if(isset($_GET['type']))
      {
      $_SESSION['billservicetype']=$_GET['type'];
      $service=$_GET['type'];
      }
    
      $_SESSION['cdate']=$cdate;

      ?>

   
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
    <a href="admindash.php"><div class="icon4" style="top:230px"></div><span>Home</span></a>

</div>
<div class="content">

	<h1 style="position:absolute; top:75px; left:675px; font-family: Times New Roman; color:#fff; border:1px solid; border-radius: 5px;"> Issue Invoice </h1>


    <label style="position:absolute;color: #fff; font-family:Times New Roman; font-size: 20px;font-weight: 500; top:150px; left:250px;"> Customer ID : </label>
    <p style="position:absolute;color: #fff; font-family:Times New Roman; font-size: 20px;font-weight: 500; top:130px; left:380px;"> <?php if(isset($_SESSION['billuser'])){ echo $_SESSION['billuser']; } ?> </p>

	<label style="position:absolute;color: #fff; font-family:Times New Roman; font-size: 20px;font-weight: 500; top:210px; left:250px;"> Service Type : </label> 
	<p style="position:absolute;color: #fff; font-family:Times New Roman; font-size: 20px;font-weight: 500; top:191px; left:380px;"> <?php if(isset($_SESSION['billservicetype'])){ echo $_SESSION['billservicetype']; } ?> </p>


    <label style="position:absolute;color: #fff; font-family:Times New Roman; font-size: 20px;font-weight: 500; top:210px; left:680px;"> Cost : </label>
	<span style="position:absolute;color: #fff; font-family:Times New Roman; font-size: 20px;font-weight: 500; top:210px; left:780px;"><?php if(isset($_SESSION['scost'])){ echo $_SESSION['scost']; } ?> </span>


	<label style="position:absolute;color: #fff; font-family:Times New Roman; font-size: 20px;font-weight: 500; top:250px; left:250px;"> Part 1 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: </label> 
	<input type="text" name="part1" style="position:absolute;color: #000; font-family:Times New Roman; font-size: 20px;font-weight: 500; top:250px; left:378px;"  placeholder="Part name">
	<label style="position:absolute;color: #fff; font-family:Times New Roman; font-size: 20px;font-weight: 500; top:255px; left:680px;"> Unit No : </label>
	<input type="number" name="u1no"  placeholder="No" style="position:absolute;top:255px; left:760px; border-radius: 2px;"> 
	 <label style="position:absolute;color: #fff; font-family:Times New Roman; font-size: 20px;font-weight: 500; top:255px; left:980px;" > Cost : </label>
	<input type="number" name="p1price"  placeholder="Rs"  style="position:absolute;top:255px; left:1040px; border-radius: 2px;">


	<label style="position:absolute;color: #fff; font-family:Times New Roman; font-size: 20px;font-weight: 500; top:300px; left:250px;"> Part 2 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: </label> 
	<input type="text" name="part2" style="position:absolute;color: #000; font-family:Times New Roman; font-size: 20px;font-weight: 500; top:300px; left:378px;"  placeholder="Part name">
	<label style="position:absolute;color: #fff; font-family:Times New Roman; font-size: 20px;font-weight: 500; top:300px; left:680px;"> Unit No : </label>
	<input type="number" name="u2no"  placeholder="No"  style="position:absolute;top:300px; left:760px; border-radius: 2px;"> 
	 <label style="position:absolute;color: #fff; font-family:Times New Roman; font-size: 20px;font-weight: 500; top:305px; left:980px;" > Cost : </label>
	<input type="number" name="p2price"  placeholder="Rs"  style="position:absolute;top:305px; left:1040px; border-radius: 2px;">

	<label style="position:absolute;color: #fff; font-family:Times New Roman; font-size: 20px;font-weight: 500; top:345px; left:250px;"> Part 3 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: </label> 
	<input type="text" name="part3" style="position:absolute;color: #000; font-family:Times New Roman; font-size: 20px;font-weight: 500; top:345px; left:378px;"  placeholder="Part name">
	<label style="position:absolute;color: #fff; font-family:Times New Roman; font-size: 20px;font-weight: 500; top:350px; left:680px;"> Unit No : </label>
	<input type="number" name="u3no"  placeholder="No"  style="position:absolute;top:350px; left:760px; border-radius: 2px;"> 
	 <label style="position:absolute;color: #fff; font-family:Times New Roman; font-size: 20px;font-weight: 500; top:350px; left:980px;" > Cost : </label>
	<input type="number" name="p3price"  placeholder="Rs" style="position:absolute;top:350px; left:1040px; border-radius: 2px;">


    <input type="submit" name="sbtn" value="Issue Bill" class="subm" style="">

    <p style="position:absolute;color: #fff; font-family:Times New Roman; font-size: 20px;font-weight: 500; top:500px; left:480px"> <?php if(isset($_GET['message'])) { echo $_GET['message'];  } ?> </p>
  
</div>
<?php
if(isset($_POST['sbtn']))
{
	$p1=$_POST['part1'];
	$p2=$_POST['part2'];
	$p3=$_POST['part3'];
	$p1cost=$_POST['p1price'];
	$p2cost=$_POST['p2price'];
	$p3cost=$_POST['p3price'];
	$u1=$_POST['u1no'];
	$u2=$_POST['u2no'];
	$u3=$_POST['u3no'];
    
	if(isset($scost)){
		$query="insert into bill(Service_type,Issue_date,Username,cost) values ('".mysql_real_escape_string($service)."','".mysql_real_escape_string($cdate)."','".mysql_real_escape_string($uid)."',$scost)"; 
	}
	else if(isset($p1,$scost))
	{
	$query="insert into bill(Service_type,part1,cost,cost1,Issue_date,Username,Unit_no1) values ('$service','$p1',$scost,$p1cost,'$cdate','$uid',$u1)";
	}
    else if(isset($p1,$p2,$scost)){
		$query="insert into bill(Service_type,part1,part2,cost,cost1,cost2,Issue_date,Username,Unit_no1,Unit_no2) values ('$service','$p1','$p2',$scost,$p1cost,$p2cost,'$cdate','$uid',$u1,$u2)";
	}
	else
	{
	$query="insert into bill(Service_type,part1,part2,part3,cost,cost1,cost2,cost3,Issue_date,Username,Unit_no1,Unit_no2,Unit_no3) values ('$service','$p1','$p2','$p3',$scost,$p1cost,$p2cost,$p3cost,'$cdate','$uid',$u1,$u2,$u3)";
     }

	$inp=mysql_query($query,$con) or die ("error".mysql_error($con));

	if($inp)
	{
		$query9="update servicebook set bill_status=1 where Service_id=$serviceid";
		mysql_query($query9,$con);
		header("Location:update5.php?message=Invoice Issued Successfully");
		
	
      
	} 
}
if(isset($_POST['viewbill'])){
	{
		header("Location: billi.php");

	}
}
	?>
	
</form>
  <form method="POST">
    <input type="submit" name="viewbill" value="View Bill" style="position:absolute;align:center"></form>

</body>
</html>