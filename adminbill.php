<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
</style>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>Volkswagen Services</title>
	<link rel="stylesheet" type="text/css" href="css/adminbill.css">
	
	<script type="text/javascript" src="js/jquery.js"></script> 
	<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
	<script type="text/javascript" src="DataTables/datatables.min.js"></script>


	 <?php
	  include("connection.php");
	  $cdate=date("Y-m-d",strtotime("Today"));
    $query="select * from servicebook";
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
<a href="complaintfeedback.php"><div class="icon5"></div><span> Inquiry & Feedback</span></a>
</div>
<div class="content">
	
	<h1 style="position:absolute; top:75px; left:675px; font-family: Times New Roman; color:#fff; border:1px solid; border-radius: 5px;"> Issue Invoice </h1> 
<div class="tablee">
     	
	 <table id='worklist' border='0' class='worktable'>
	  <thead>
       <tr>
       <th>Service ID</th>
       <th>Car Model</th>
       <th>Reg. Number</th>
       <th>Service Type ID</th>
       <th>Customer ID </th>
       <th> </th>

       </tr>
       </thead>
       <tbody>
       	<?php

       while($result1=mysql_fetch_array($result))
       { 

        if($result1['Booked_date']==$cdate)
         {
         	if($result1['Status']=='Completed')
         	{
         		if($result1['bill_status']==0)
         		{
          $sid=$result1['Service_id'];
          $cmodel=$result1['Car_model'];
          $rno=$result1['Reg_no'];
          $stid=$result1['Service_type_id'];
          $cid=$result1['Username'];
      
          switch($stid)
          {
          	case 100 : $stid1="Engine Service"; 
			             $scost=7000;
          	break;
          	case 101 : $stid1="Regular Service";
			 			 $scost=3000;
          	break;
          	case 102 : $stid1="Body Service";
			 			 $scost=5000;
          	break;
          }
          ?>
          
       	<tr>
       		
       	    <td align="center"><?php echo $sid; ?></td>
       	    <td align="center"><?php echo $cmodel; ?></td>
       	    <td align="center"><?php echo $rno; ?></td>
       	    <td align="center"><?php echo $stid1; ?></td>
       	    <td align="center"><?php echo $cid; ?></td>
       	    <td align="center"><a class="linkbutton" href="update5.php?id=<?php echo $cid; ?>&type=<?php echo $stid1;?>&sid=<?php echo $sid; ?>&scost=<?php echo $scost; ?>">Issue Bill</a> </td>
       	    
       	   
       	</tr>  
       	<?php 
          }
         }
        }
      }
        ?> 
       
       </tbody>
      </table>
       </div>

<script type="text/javascript">
              $(document).ready(function() {
              	$("#worklist").DataTable();
             }
             ); </script>
</form>
</body>
</html>             