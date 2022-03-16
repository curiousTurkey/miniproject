<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>Volkswagen Services</title>
	 <link rel="stylesheet" type="text/css" href="css/adminfeedback.css">
	 <link rel="stylesheet" type="text/css" href="usermenu.css">
	 <script type="text/javascript" src="js/jquery.js"></script> 
	<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
	<script type="text/javascript" src="DataTables/datatables.min.js"></script>

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

<a href="stockpurchase.php"><div class="icon"></div><span>Purchase Stock</span></a>
<a href="hirestaff.php"><div class="icon1"></div><span>Hire Staff</span></a>
<a href="staffdismiss.php"><div class="icon2"></div><span>Dismiss Staff</span></a>
<a href="adminbill.php"><div class="icon3"></div><span>Issue Bill</span></a> 
<a href="admindash.php"><div class="icon4"></div><span>Home</span></a>
<a href="complaintfeedback.php"><div class="icon5"></div><span>Inquiry & Feedback</span></a>
</div>

<div class="content">
	<p style="position:absolute; font-size: 28px; font-family: Times New Roman; top : 50px; left: 650px; border: 1px solid;border-color: #fff; border-radius:5px; color:#fff; background:#061533;"> Inquiry & Feedback </p>

	<?php
	include("connection.php");
	$query="select * from comp";
	$result=mysql_query($query,$con);
    ?>
    <div class="tablee">
      <table id='worklist' border='0' class='worktable'>
       <thead>
       <tr>
       <th>First Name</th>
       <th>Last Name</th>
       <th>Email</th>
       <th>Subject</th>
       <th>        </th>
       </tr>
       </thead>
        <tbody>
        <?php
        while($res=mysql_fetch_array($result))
        {
        	if($res['status']==0)
        	{
        		$fid=$res['F_id'];
        		$fname=$res['F_name'];
        		$lname=$res['L_name'];
        		$sub=$res['Subject'];
        		$email=$res['Email'];

        	
         
        ?>
        	<tr>
        		<td align="center"><?php echo $fname; ?></td>
       	        <td align="center"><?php echo $lname; ?></td>
       	        <td align="center"><?php echo $email; ?></td>
                <td align="center"><?php echo $sub; ?></td>
       	        <td align="center"> <a class="linkbutton" href="update3.php?id=<?php echo $res['F_id']; ?>">View</a></td>
     
       	    </tr>
       	    <?php
            }
        }
       	    ?>
        </tbody>
</div>
</form>

<script type="text/javascript">
              $(document).ready(function() {
              	$("#worklist").DataTable();
             }
             ); </script>



</body>
</html>