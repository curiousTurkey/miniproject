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
<p style="color:#000; position: absolute; left: 680px;"> <a href="admindash.php">Click Here</a> To Go Home	<?php
include("connection.php");
if(isset($_SESSION['billuser']))
{
$user=$_SESSION['billuser'];
}
if(isset($_SESSION['cdate']))
{
$cdate=$_SESSION['cdate'];
}


			$query1="select * from bill where Username='$user' and Issue_date='$cdate' order by Invoice_no desc";
            $result=mysql_query($query1,$con);
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
            	$i=$i+1;
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
			<?php if(isset($user)) {echo $user;} ?>
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
       	
       	?>
			

			</table>
		</div>



</body>
