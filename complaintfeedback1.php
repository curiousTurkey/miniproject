<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css"> 
    ::placeholder{
    	color: #000;
    	opacity: 1;
    }
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>Volkswagen Services</title>
	 <link rel="stylesheet" type="text/css" href="css/adminfeedback.css">
	 <script type="text/javascript" src="js/jquery.js"></script> 
	<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
	<script type="text/javascript" src="DataTables/datatables.min.js"></script>
	<?php
	include("connection.php");
	if(isset($_GET['F_id']))
	{
		$id=$_GET['F_id'];
	}
	$query="select * from comp";
	$result=mysql_query($query,$con);

	while($res=mysql_fetch_array($result))
	{
		if($res['F_id']==$id)
		{
	$fname=$res['F_name'];
	$lname=$res['L_name'];
	$email=$res['Email'];
	$sub=$res['Subject'];
	$message=$res['Message'];
    }
   }
	
	
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
       
      </form>

   <div class="view"> 
    
    <label style="position:absolute; font-family:Times New Roman; font-size: 20px;font-weight: 500; top:120px; left:80px;"> Sl. no &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
     <label style="position:absolute; font-family:Times New Roman; font-size: 20px;font-weight: 500; top:180px; left:80px;"> First Name : </label>
     <label style="position:absolute; font-family:Times New Roman; font-size: 20px;font-weight: 500; top:180px; left:660px;"> Last Name : </label> 
     <label style="position:absolute; font-family:Times New Roman; font-size: 20px;font-weight: 500; top:240px; left:80px;"> Subject &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: </label>
     <label style="position:absolute; font-family:Times New Roman; font-size: 20px;font-weight: 500; top:240px; left:660px;"> Email &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: </label>
     <label style="position:absolute; font-family:Times New Roman; font-size: 20px;font-weight: 500; top:300px; left:80px;"> Feedback / Inquiry / Complaint : </label>

      <p style="position: absolute;font-family:Times New Roman; font-size: 20px;font-weight: 500; top:102px; left:200px;"> <?php if(isset($_SESSION['compid'])) echo $_SESSION['compid']  ?>
      <p style="position: absolute;font-family:Times New Roman; font-size: 20px;font-weight: 500; top:160px; left:200px;"> <?php echo $fname; ?>

      <p style="position: absolute;font-family:Times New Roman; font-size: 20px;font-weight: 500; top:160px; left:770px;"> <?php echo $lname; ?>
      <p style="position: absolute;font-family:Times New Roman; font-size: 20px;font-weight: 500; top:220px; left:200px;"> <?php echo $sub; ?>
      <p style="position: absolute;font-family:Times New Roman; font-size: 20px;font-weight: 500; top:220px; left:770px;"> <?php echo $email; ?>
     <textarea rows="10" cols="50" placeholder="<?php echo $message; ?>" style="position: absolute; top : 58px; left:-400px; border:none; outline: none; font-size:18px; font-weight: 500; " readonly></textarea>
    

 
    </div>
	<center>
	<div class="div"><a href="admindash.php" style="position:absolute;align:center;top : 580px;  font-size:18px; font-weight: 500;">Click here to go home</a></div>
</center>
</body>
</html>