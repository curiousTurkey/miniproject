<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <style type="text/css">.btn1{
  padding: 5px;
  background: #00012f;
  text-decoration: none;
  float: right;
  margin-top: -30px;
  margin-right: 40px;
  border-radius: 2px;
  font-size: 15px;
  font-weight: 600;
  color: #fff;
  transition: 0.45s;
  transition-property: background;
  position: absolute;
  top: 75px;
  left: 65px;
}
.btn:hover{
  background: #00048d;
  color: #fff;
}
::placeholder{
  color: #fff;
  font-weight: 600;
  font-size: 20px;
  opacity: 1;
  text-align: center;

}
</style>
  <script type="text/javascript">
    window.addEventListener("load", myInit, true); function myInit(){ move(); move1(); move2(); }
  </script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>Volkswagen Services</title>
	 <link rel="stylesheet" type="text/css" href="css/admindash.css">
	 <link rel="stylesheet" type="text/css" href="css/progressbar.css">
<?php

include("connection.php");
$cdate=date("Y-m-d",strtotime("Today"));
$query="select * from stock";
$result=mysql_query($query,$con);
$result1=mysql_fetch_array($result);
$eng=$result1['Engine'];
$bod=$result1['Body'];
$consum=$result1['Consumables'];
$query1="select * from servicebook where Status='Completed' and Booked_date='$cdate'";
$res=mysql_query($query1,$con);
$count=mysql_num_rows($res);
$query2="select * from comp";
$res1=mysql_query($query2,$con);
$count1=mysql_num_rows($res1);
?>   
</head>

<body>
  <?php if(isset($_SESSION['payment_success'])) { echo "<script> alert('Payment Successful'); </script>"; unset($_SESSION['payment_success']); } ?>
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

<div class="content"><div class="box"><p></p></div><div class="box1"><p></p></div><div class="box2"><p></p></div></div>
<div class="box3"><p></p></div> <div class="box4"></div>

</form>
<!--Engine parts Stock Info -->

<div class="progress">
  <div class="eng-image"> <img src="css/images/car-engine.png" style="width: 80px; height:80px; position: absolute; top: -85px; left: 60px;"></div>
	<p class="perc"><?php $per=($eng/1000)*100; echo $per; echo "%"; ?></p>
<div class="w3-light-grey">
  <div id="myBar" class="w3-container w3-dark-grey" style="height:8px;width:0%; border-radius:0px; background: rgba(0, 0, 0, 0.0);"></div>
</div>



<button class="btn1" onclick="move()">Refresh</button>

<span style="position: absolute; top: 100px; font-size: 20px; color: #fff; font-family: monospace; left: 30px; "> Engine Stock &nbsp&nbspAvailable</span>
</div>


<!-- Body parts Stock info. -->
<div class="progress1">
   <div class="eng-image"> <img src="css/images/chassis.png" style="width: 80px; height:80px; position: absolute; top: -85px; left: 60px;"></div>
	<p class="perc"><?php $per2=($bod/1000)*100; echo $per2; echo "%"; ?></p>
<div class="w3-light-grey">
  <div id="myBar1" class="w3-container w3-dark-grey" style="height:8px;width:0%; border-radius:0px; background: rgba(0, 0, 0, 0.0);"></div>
</div>


<button class="btn2" onclick="move1()">Refresh</button>
<span style="position: absolute; top: 100px; font-size: 20px; color: #fff; font-family: monospace; left: 30px; "> Body Stock Available</span>
</div>

<!-- Regular Service Parts -->
<div class="progress2">
   <div class="eng-image"> <img src="css/images/car-wash.png" style="width: 80px; height:80px; position: absolute; top: -85px; left: 60px;"></div>
	<p class="perc"><?php $per3=($consum/1000)*100; echo $per3; echo "%"; ?></p>
<div class="w3-light-grey">
  <div id="myBar2" class="w3-container w3-dark-grey" style="height:8px;width:0%; border-radius:0px; background: rgba(0, 0, 0, 0.0);"></div>
</div>

<button class="btn3" onclick="move2()">Refresh</button>
<span style="position: absolute; top: 100px; font-size: 20px; color: #fff; font-family: monospace; left: 30px; "> &nbsp&nbspConsumables Stock Available</span>
</div>
<!--Services Done -->
<div class="servicedone">
  <p style="font-family: monospace; text-align: center; font-size: 25px"> Services Completed <br> Today </p>

<input type="text" name="servicecount" style="background: #000; border-radius: 5px;" readonly placeholder="<?php echo $count ?>"> 
   
</div>
<!-- Feedback Count -->
<div class="feed">
  <p style="font-family: monospace; text-align: center; font-size: 25px; color:#fff;font-weight:600 ;">Complaints <br> & <br> Feedback</p>

<input type="text" name="servicecount" style="background: #000; border-radius: 5px;" readonly placeholder="<?php echo $count1 ?>"> 
   
</div>


<!--Engine parts JS script -->
<script>
function move() {
  var elem = document.getElementById("myBar");
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= <?php echo $per; ?>) {
      clearInterval(id);
    } else {
      width++;
      elem.style.width = width + '%';
    }
  }
}
</script>
<!--body parts js script -->
<script>
function move1() {
  var elem = document.getElementById("myBar1");
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= <?php echo $per2; ?>) {
      clearInterval(id);
    } else {
      width++;
      elem.style.width = width + '%';
    }
  }
}
</script>

<!-- regular service parts script -->

<script>
function move2() {
  var elem = document.getElementById("myBar2");
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= <?php $per=($consum/1000)*100; echo $per3; ?>) {
      clearInterval(id);
    } else {
      width++;
      elem.style.width = width + '%';
    }
  }
}
</script>







</body>
</html>