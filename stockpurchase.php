<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Stock Purchase</title>
	<link rel="stylesheet" type="text/css" href="css/stockpurchase.css">
	<style>input[type="submit"]:hover{
	background: #01017d;
	transition: 0.6s;
	transition-property: background;
    }
    input[type="submit"]{
	background:#0066A2;
    color:white;
    border-style:outset;
   	border-color:#0066A2;
     height:30px;
     width:80px;
    font:bold15px arial,sans-serif;
    text-shadow:none;}
	/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>

</head>
<body>
		  	<header>
	  		 <nav>
	  		 	<div class="logo"> <img src="image/logo.png" style="position: fixed;
	float: left;
	margin: 16px 36px;
	color: #fff;
	font-weight: bold;
	font-size: 24px;
	height: 60px;
	width: 60px;
	top: -11px;"> <p style=" color: #fff;
   							 margin: 0;
    						text-transform: uppercase;
    						font-size: 23px;
    						font-weight: 900;
    						padding-left: 120px;
    						padding-top: 15px;
    						font-family: monospace;
    						">volkswagen</p></div>
	  		 	<div class="menu">
	  		 	</div>
	  		 </nav>
	  		</header>
<form method="POST">
	<section>

			<div class="item">
			<img src="image/Vwoils.png">
			<p style="color:#000; font-size: 30px; padding-left: 30px; font-family: sans-serif;">Consumables For Volkswagen Cars</p>
			Quantity <input type="number" name="qty1" placeholder="" style="border: 1px solid #848484;
				-webkit-border-radius: 30px;
				-moz-border-radius: 30px;
				border-radius: 30px;
				outline:0;
				height:25px;
				padding-left:10px;
				padding-right:10px;
				width: 25%;">
			<span></span>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="btn1" value="Buy Now"> 
			<p style="color:#000; font-size:20px; font-family: sans-serif; padding-left: 50px; padding-top: 20px;"> Price per unit : 5$ </p>
		</div>
			<div class="item">
			<img src="image/Vwbody.jpg">
			<p style="color:#000; font-size: 30px; padding-left: 30px; font-family: sans-serif;">Body Parts For Volkswagen Cars</p>
			Quantity <input type="number" name="qty2" placeholder="" style="border: 1px solid #848484;
				-webkit-border-radius: 30px;
				-moz-border-radius: 30px;
				border-radius: 30px;
				outline:0;
				height:25px;
				padding-left:10px;
				padding-right:10px;
				width: 25%;">
			<span></span>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="btn2" value="Buy Now"> 

			<p style="color:#000; font-size:20px; font-family: sans-serif; padding-left: 50px; padding-top: 20px;"> Price per unit : 300$ </p>
		</div>
		
		<div class="item">
			<img src="image/VWengine.jpg">
			<p style="color:#000; font-size: 30px; padding-left: 30px; font-family: sans-serif;">Engine Parts For Volkswagen Cars</p>
			Quantity <input type="number" name="qty3" placeholder="" style="border: 1px solid #848484;
				-webkit-border-radius: 30px;
				-moz-border-radius: 30px;
				border-radius: 30px;
				outline:0;
				height:25px;
				padding-left:10px;
				padding-right:10px;
				width: 25%;">
			<span></span>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="btn3" value="Buy Now"> <p style="color:#000; font-size:20px; font-family: sans-serif; padding-left: 50px; padding-top: 20px;"> Price per unit : 650$ </p>
		</div>
		
	</section>
</form>
	<div class="select">
		
	</div>
	<?php
include("connection.php");
if(isset($_POST['btn1']))
{
	$Qty=$_POST['qty1'];
	$price=5;
	$product="Consumables";
	header("Location:checkout.php?qty=$Qty&price=$price&pro=$product");

}
if(isset($_POST['btn2']))
{
	$Qty=$_POST['qty2'];
	$price=300;
	$product="Body Parts";
	header("Location:checkout.php?qty=$Qty&price=$price&pro=$product");
}
if(isset($_POST['btn3']))
{
	$Qty=$_POST['qty3'];
	$price=650;
	$product="Engine Parts";
	header("Location:checkout.php?qty=$Qty&price=$price&pro=$product");
}
?>
</body>
</html>
