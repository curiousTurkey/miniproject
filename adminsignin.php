<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
	    <meta name="viewport" content="width=device-width,initial-scale=1.0">
	   <title> Sign In </title>
	   <link rel="stylesheet" type="text/css" href="css/login.css">
	</head>
		
			<body class="admin">
				<div class="bg"><div class="clogo"></div> <p>Volkswagen <font color="#1b28ff">Services</p></div>
			   <section>
			       <div class="form">
				      <form method="POST">
				       <h2> Sign In </h2>
					   <div class="loginlogo"> </div>
					        <div class="adminimage"> </div>
							<div class="passimg"> </div>
					       <div class="inputbox">
						       <input type="text" name="usrnm" placeholder="Admin ID" required>
						   </div>   
						   
						   <div class="inputbox">
						       <input type="password" name="pswd" placeholder="Password" required>
						   </div>
                           
						    <div class="inputbox">
							     <input type="submit" value="Sign In" name="logbutton">
							</div>

							  <a href="aresetpas.php"> Forgot Password? </a>
					  </form>		  
					</div>		  
				</section>
<?php
if(isset($_POST) && array_key_exists('logbutton',$_POST))
{
  $admin=$_POST['usrnm'];
  $pswd=$_POST['pswd'];
  $btn=$_POST['logbutton'];

  
 include('connection.php');
	
	$query="select * from adminsignin where Adminname='$admin' and Password='$pswd' and User_type='Adm'";
     	
	if(isset($_POST['logbutton']))
	{
	   $inp=mysql_query($query,$con);
	   $row=mysql_fetch_array($inp);
	   
			if($row['Adminname']==$admin and $row['Password']==$pswd)
			{

				$_SESSION['loggeduser']=$admin;
			header("Location: admindash.php");
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