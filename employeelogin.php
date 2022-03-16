<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
	    <meta name="viewport" content="width=device-width,initial-scale=1.0">
	   <title> Sign In </title>
	   <link rel="stylesheet" type="text/css" href="css/slogin.css">
	</head>
		
			<body class="admin">
				<div class="bg"><div class="clogo"></div> <p>Volkswagen <font color="#1b28ff">Services</p></div>
			   <section>
			       <div class="form">
				      <form method="POST">
				       <h2> Sign In </h2>
					     <div class="loginlogo"> </div>
					     <div class="userimage"> </div>
					     <div class="passimg"> </div>
					       <div class="inputbox">
						       <input type="text" name="employee" placeholder="Emp ID" required>
						   </div>   
						   
						   <div class="inputbox">
						       <input type="password" name="pswd" placeholder="Password" required>
						   </div>
                           
						    <div class="inputbox">
							     <input type="submit" value="SIGN IN" name="logbutton">
							</div>

							  <a href="eresetpas.php"> Forgot Password? </a>
					  </form>		  
					</div>		  
				</section>
<?php
if(isset($_POST) && array_key_exists('logbutton',$_POST))
{
  $usr=$_POST['employee'];
  $pswd=$_POST['pswd'];
  $btn=$_POST['logbutton'];


  
 include('connection.php');
	
	$query="select * from empsignin where Empusername='$usr' and Password='$pswd' and User_type='Emp'";
	$query1="select F_name from empsignup where Empusername='$usr'";
	
     	
	if(isset($_POST['logbutton']))
	{
	   $inp=mysql_query($query,$con);
	   $result=mysql_query($query1,$con);
	   $row=mysql_fetch_array($inp);
	   $row1=mysql_fetch_array($result);
	   
			if($row['Empusername']==$usr && $row['Password']==$pswd)
			{
				$_SESSION['loggeduser']=$usr;
				$_SESSION['name']=$row1['F_name'];
			header("Location: employeework.php");
			}  
	        else
	        {
		    echo '<script>alert("Invalid Credentials") </script>';
	        }
	}
}
?>	
   </body>
</html>			