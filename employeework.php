<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
    .sidebar h4 {
    color: #ccc;
    margin-top: 0;
    margin-bottom: 20px;
}

.sidebar a{
    color: #fff;
    display: block;
    width: 100%;
    line-height: 60px;
    text-decoration: none;
    padding-top: 10px;
    padding-left: 70px;
    box-sizing: border-box;
    transition: 0.556s;
    transition-property: background;
    

}
    </style>
	

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Volkswagen Services</title>
	<link rel="stylesheet" type="text/css" href="css/employee.css">

	<script type="text/javascript" src="js/jquery.js"></script> 
	<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
	<script type="text/javascript" src="DataTables/datatables.min.js"></script>
   
   <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
function refreshPage(){
    window.location.reload();
}
</script>

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
        <img src="css/images/staff.png" class="profile_pic">
        <h4><font color="#fff"><?php if(isset($_SESSION['loggeduser'])) {echo $_SESSION['loggeduser']; }?></font></h4>
    </center>

<a href="emppasswordreset.php"><div class="icon"></div><span style=" color: #fff;
     font-size: 20px;
   
     position: absolute;
     left: 50px;">Reset Password</span></a>

</div>

<div class="content"></div>
</form>
<div class="heading">

   <u>Available works</u> </div>
   <form method="POST">
   <?php

   $cdate=date("Y-m-d",strtotime("Today"));
	include("connection.php");
    $query="select Service_id,Car_model,Reg_no,Service_type_id,Status,Booked_date from servicebook";
    $result=mysql_query($query,$con);
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
       <th>      </th>
       <th>      </th> 
       </tr>
       </thead>
       <tbody>
       	<?php

       while($result1=mysql_fetch_array($result))
       { 
       	if($cdate==$result1['Booked_date'])
          {
            if($result1['Status']!='Completed')
            {
          $sid=$result1['Service_id'];
          $cmodel=$result1['Car_model'];
          $rno=$result1['Reg_no'];
          $stid=$result1['Service_type_id'];
          $stat=$result1['Status'];
          ?>
          
       	<tr>
       		
       	    <td align="center"><?php echo $sid ?></td>
       	    <td align="center"><?php echo $cmodel ?></td>
       	    <td align="center"><?php echo $rno ?></td>
       	    <td align="center"><?php echo $stid ?></td>
       	    <td align="center"><?php echo $stat ?></td>
       	    <td> <a class="linkbutton" href="update1.php?id=<?php echo $result1['Service_id']; ?>">Take Job</a>  </td>
       	    <td> <a class="linkbutton" href="update2.php?id=<?php echo $result1['Service_id']; ?>&sid=<?php echo $stid; ?>">Completed</a> </td>
       	</tr>  
       	<?php 
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