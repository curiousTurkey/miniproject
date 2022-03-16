<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>Volkswagen Services</title>
	 <link rel="stylesheet" type="text/css" href="css/invoice.css">
	 <link rel="stylesheet" type="text/css" href="css/userbill.css">

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
<form method="POST">
	<div class="heading"> Invoice Generated </div>
	<?php
	if(isset($_SESSION['loggeduser'])){
		$user=$_SESSION['loggeduser'];
	}
	include("connection.php");
     $cdate=date("Y-m-d",strtotime("Today"));
     $query="select MAX(Invoice_no) from bill where Username='$user' and Issue_date='$cdate'";
     $inp=mysql_query($query,$con);
     if(!$inp){
     	echo "error";
     }
     else {
     	while($inp1=mysql_fetch_array($inp))

     	$inv=$inp1['MAX(Invoice_no)'];
     }
	if(isset($_SESSION['loggeduser']))
	{
		$user=$_SESSION['loggeduser'];
		$query5="select F_name,Email from signup where Username='$user'";
		$res=mysql_query($query5,$con);
		$res1=mysql_fetch_array($res);
		$user1=$res1['F_name'];
		$user2=$res1['Email'];
		
		
	}
			

			$query1="select * from bill where Username='$user' and Issue_date='$cdate' and Invoice_no=$inv";
            $result=mysql_query($query1,$con);
			if($result == 0) {
				goto end;
			}
            $i=1;
            while($result1=mysql_fetch_array($result)and$i<2)
            {
            	$Invc=$result1['Invoice_no'];
            	$stype=$result1['Service_type'];
            	$p1=$result1['part1'];
            	$p2=$result1['part2'];
            	$p3=$result1['part3'];
            	$scost=$result1['cost'];
            	$p1cost=$result1['cost1'];
            	$p2cost=$result1['cost2'];
            	$p3cost=$result1['cost3'];
            	$date=$result1['Issue_date'];
            	$u1=$result1['Unit_no1'];
            	$u2=$result1['Unit_no2'];
            	$u3=$result1['Unit_no3'];
            	$s1=1;
            	$vat=750;
            }
       $i=1;
       ?>
<div class="invoice">
		<div class="company-address">
			Volkswagen Services
			<br />
			489 Road Street
			<br />
			Muvattupuzha, Kerala
			<br />
		</div>
	
		<div class="invoice-details">
			Invoice #: <?php if(isset($Invc)) {echo $Invc;} ?>
			<br />
			Date: <?php if(isset($date)) {echo $date;} ?>
		</div>
		
		<div class="customer-address">
			To:
			<br />
			<?php if(isset($user1)) {echo $user1;echo "<br>"; echo $user2;} ?>
			<br />
			
			<br />
		
			<br />
		</div>
		
		<div class="clear-fix"></div>
			<table border='1' cellspacing='0'>
				<tr>
					<th width=250>Description</th>
					<th width=80>Amount</th>
					<th width=100>Unit price</th>
					<th width=100>Total price</th>
				</tr>
				<?php
               
        ?>
          
       	<tr>
       		
       	    <td><?php if(isset($stype)) echo $stype; ?></td>
       	    <td><?php if(isset($s1)) echo $s1; ?></td>
       	    <td><?php if(isset($scost))echo $scost; ?></td>
       	    <td><?php if(isset($scost))echo $scost; ?></td>
       	</tr>
       	<tr>    
       	    <td><?php if(isset($p1))echo $p1; ?></td>
       	    <td><?php if(isset($u1))echo $u1; ?></td>
       	    <td><?php if(isset($p1cost))echo $p1cost; ?></td>
       	     <td><?php if(isset($p1cost)){ $p1cost=$p1cost*$u1; echo $p1cost; } ?></td>
       	</tr>
       	<tr>
       		<td><?php if(isset($p2))echo $p2; ?></td>
       		<td><?php if(isset($u2))echo $u2; ?></td>
       		<td><?php if(isset($p2cost))echo $p2cost; ?></td>
       		<td><?php if(isset($p2cost)){ $p2cost=$p2cost*$u2; echo $p2cost;} ?></td>
       	</tr>
       	<tr>
       	<tr>
       		<td><?php if(isset($p3))echo $p3; ?></td>
       		<td><?php if(isset($u3))echo $u3; ?></td>
       		<td><?php if(isset($p3cost))echo $p3cost; ?></td>
       		<td><?php if(isset($p3cost)){ $p3cost=$p3cost*$u3; echo $p3cost;} ?></td>
       	</tr>
       		<td align="right"> VAT </td>
            <td></td>
            <td></td>
            <td align="left"><?php
			$total=$scost+($p1cost)+($p2cost)+($p3cost);
			$vat=(($total)/100)*18;
			if(isset($vat)) echo $vat; ?>	
       	<tr>
       	<td align="right">Total </td>
       	<td></td>
       	<td></td>
       	

       	
       	<td align="left">
       		<?php
       		if(isset($scost)) 
       		{ 
       	$total=$scost+($p1cost)+($p2cost)+($p3cost)+$vat; if(isset($total)) echo $total; 
          }
        ?> </td>
       </tr>
       	<?php
       	end:
       	?>
			

			</table>
		</div>




</body>
</html>