<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<style>
	::placeholder{
		color: #000;
		opacity: .9;
	}
</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>Volkswagen Services</title>
	 <link rel="stylesheet" type="text/css" href="css/user.css">
	 <link rel="stylesheet" type="text/css" href="usermenu.css">
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
		<h4><font color="#fff"><?php if(isset($_SESSION['loggeduser'])) {echo $_SESSION['loggeduser']; $usr=$_SESSION['loggeduser']; }?></font></h4>
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
	<center>
		<h1> Book your service here ! </h1> <span class="status"> <?php if(isset($_GET['stat'])) { echo $_GET['stat'];} ?> </span>
	<table border="0" class="tbl">
	  <tr>
		<th> Car Model </th>
		<th> Registration Number </th>
		<th> Booking Date</th>
		<th> Type Of Service</th>
	  </tr>	



	  <tr>
	  	 <td> 
	  	 	 <select name="carmodel" required>
                <option value="Select Model" selected>Select Model</option>
                <option value="Polo GT">Polo GT </option>
                <option value="Vento">Vento </option>
                <option value="Passat">Passat </option>
                <option value="Golf GTI">Golf GTI </option>
                <option value="Ameo">Ameo </option>
                <option value="Jetta">Jetta </option>
                <option value="Tiguan">Tiguan </option>
                <option value="Beetle">Beetle </option>
                <option value="Polo GT TSI">Polo GT TSI </option>

             </select>
          </td>
        <div class="serviceboxes">
         <td> 
            <input type="text" name="regno" placeholder="Reg Number" required>
         </td>
         <td>
           <input type="Date" name="bkdate" required>
           </td>   
         <td>
           <select name="servicetype" required>
           	    <option value=" " selected>Service Type </option>
           	    <option value="100">Engine Service </option>
           	    <option value="102">Regular Service </option>
           	    <option value="101">Body Service </option>
           	</select> 
           </td>
          </tr>
          </table>
       <input type="submit" name="booknow" value="Book Now!">
          <div class="error"> <span></span>
     </div>
    
     </center>
  </form>


                    




<?php
if(isset($_POST) && array_key_exists('booknow',$_POST))
{
	$inp=0;
	$model=$_POST['carmodel'];
	$reg=$_POST['regno'];
	$bdate=$_POST['bkdate'];
	$stype=$_POST['servicetype'];
	$cdate=date("Y-m-d",strtotime("Today"));
  
include('connection.php');
if(isset($_SESSION['loggeduser'])) 
{
	$usr=$_SESSION['loggeduser'];

}
else
{
	echo 'not set';
}



 $query="insert into servicebook(Username,Car_model,Reg_no,Booked_date,Service_type_id,Status)values('$usr','$model','$reg','$bdate',$stype,'Pending')";
 $query1="select * from servicebook where Booked_date='$bdate'";
 
 if(isset($_POST['booknow']))
 {
	 if($bdate < $cdate ) {
		header("Location:user-servicebooking.php?stat=Select a valid date.");
		goto end;
	 }
 	 if(isset($stype))
 	 {
 	 	if(isset($model))
 	 	{
   $num=mysql_num_rows(mysql_query($query1,$con));
 	if($num<10)
 	{
 		 $inp=mysql_query($query,$con);
 		 header("Location:user-servicebooking.php?stat=Booked Successfully.");
 		
 	}
 	else
   {	$inp=1;
         echo '<script> alert("Slots are filled. Kindly choose another date.") </script>';
   }
  }
 }
}

 
 if(!$inp)
 {
 	 header("Location:user-servicebooking.php?stat=Booking Failed. Please try again later");
 }
 end:

}
?>
</body>
</html>