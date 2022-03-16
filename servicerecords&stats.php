<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>Volkswagen Services</title>
	 <link rel="stylesheet" type="text/css" href="css/userservicerecord.css">
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

<a href="user-servicebooking.php"><div class="icon"></div><span>Service Booking</span></a>
<a href="servicerecords&stats.php"><div class="icon1"></div><span>Service Records</span></a>
<a href="bill.php"><div class="icon2"></div><span>View Bill</span></a>
<a href="userdetailsedit.php"><div class="icon3"></div><span>Edit Details</span></a> 
<a href="userhome.php"><div class="icon4"></div><span>Home</span></a>

</div>

<div class="content"></div>
</form>

<div class="heading">Service Records</div>

 <form method="POST">
   <?php

   $cdate=date("Y-m-d",strtotime("Today"));
	include("connection.php");
    $query="select Service_id,Car_model,Reg_no,Service_type_id,Status,Booked_date,Username from servicebook order by Service_id desc";
    $result=mysql_query($query,$con);
    if(isset($_SESSION['loggeduser'])){
    	$usr=$_SESSION['loggeduser'];
    }
    ?>
     <div class="tablee">
     	
	 <table id='worklist' border='0' class='worktable'>
	  <thead>
       <tr>
       <th>Service ID</th>
       <th>Car Model</th>
       <th>Reg. Number</th>
       <th>Service Type ID</th>
       <th>Status</th>
       <th>Booked Date </th>

       </tr>
       </thead>
       <tbody>
       	<?php

       while($result1=mysql_fetch_array($result))
       { 
       	if($usr==$result1['Username'])
          {
          $sid=$result1['Service_id'];
          $cmodel=$result1['Car_model'];
          $rno=$result1['Reg_no'];
          $stid=$result1['Service_type_id'];
          $stat=$result1['Status'];
          $date=$result1['Booked_date'];
          switch($stid)
          {
          	case 100 : $stid1="Engine Servie";
          	break;
          	case 101 : $stid1="Regular Service";
          	break;
          	case 102 : $stid1="Body Service";
          	break;
          }
          ?>
          
       	<tr>
       		
       	    <td align="center"><?php echo $sid; ?></td>
       	    <td align="center"><?php echo $cmodel; ?></td>
       	    <td align="center"><?php echo $rno; ?></td>
       	    <td align="center"><?php echo $stid1; ?></td>
       	    <td align="center"><?php echo $stat; ?></td>
       	    <td align="center"><?php echo $date; ?></td>
       	   
       	</tr>  
       	<?php 
          }
         }  
        ?> 
       
       </tbody>
      </table>
       </div>
      
<script type="text/javascript">
              $(document).ready(function() {
              	$("#worklist").DataTable(
					  {
						  "order":[[0,"desc"]]
					  }
				  );
             }
             ); </script>
          </form>



<?php
include('connection.php');

?>

</body>
</html>