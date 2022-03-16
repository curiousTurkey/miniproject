<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
</style>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>Volkswagen Services</title>
	 <link rel="stylesheet" type="text/css" href="css/admindash.css">
	 <script type="text/javascript" src="js/jquery.js"></script> 
	<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
	<script type="text/javascript" src="DataTables/datatables.min.js"></script>


	 <?php
	  include("connection.php");
    $query="select * from empsignup";
    $result=mysql_query($query,$con);
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

<a href="stockpurchase.php"><div class="icon"></div><span>Purchase Stock</span></a>
<a href="hirestaff.php"><div class="icon1"></div><span>Hire Staff</span></a>
<a href="staffdismiss.php"><div class="icon2"></div><span>Dismiss Staff</span></a>
<a href="adminbill.php"><div class="icon3"></div><span>Issue Bill</span></a> 
<a href="admindash.php"><div class="icon4"></div><span>Home</span></a>
<a href="complaintfeedback.php"><div class="icon5"></div><span>Inquiry & Feedback</span></a>
</div>
<div class="content">
	
	<h1 style="position:absolute; top:75px; left:675px; font-family: Times New Roman; color:#fff; border:1px solid; border-radius: 5px;"> Staff Dismissal </h1> 

	 <div class="tablee">
     	
	 <table id='worklist' border='0' class='worktable'>
	  <thead>
       <tr>
       <th>Name</th>
       <th>Username</th>
       <th>Email ID</th>
       <th>Phone Number</th>
       <th></th>
       

       </tr>
       </thead>
       <tbody>
  <?php
    while($res=mysql_fetch_array($result))
    {
    	$name=$res['F_name'];
    	$usrname=$res['Empusername'];
    	$email=$res['Emp_email'];
    	$phno=$res['Phone_no'];
    
    

	 ?>
	 	<tr>
       		
       	    <td align="center"><?php echo $name; ?></td>
       	    <td align="center"><?php echo $usrname; ?></td>
       	    <td align="center"><?php echo $email; ?></td>
       	    <td align="center"><?php echo $phno; ?></td>
       	    <td align="center"><a class="linkbutton" href="update4.php?id=<?php echo $usrname; ?>">Dismiss</a></td>
       	   
       	   
    </tr>
    <?php } ?> 

</div>

<script type="text/javascript">
              $(document).ready(function() {
              	$("#worklist").DataTable();
             }
             ); </script>
</form>
</body>
</html>             