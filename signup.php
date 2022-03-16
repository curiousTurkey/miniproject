
<!DOCTYPE html>
<html>
   <head>
    <link rel="stylesheet" href="css/signup.css">
      <title> Sign Up </title>
      <script type="text/javascript"> var maxLength=10; </script>
	</head>
	   
		<body>



		    <div class="splitscreen">
			     <div class="left"> 
						<section class="copy"> 
                           <h1><i></i> </h1>    	
						</section>	
				 </div>
				 <div class="right"> 
				   <form method="POST"> 
				     <section class="copy">
					   <h2> Sign Up </h2>
					      <div class="login-container">
						     <p> <font size="4px">Already have an account? <a href="usersignin.php"> <strong> Log In </strong> </a> </p>
						</font>  </div>
                     </section>
                    

                       

                        <div class="input-container name">
                          	<label for="fname"><font size="3px" color="#c8cbcf"><b>  Name </b></font></label>
                            <input name="fname" type="text" required>
                        </div>
					
                         <div class="input-container phone">
                          	<label for="phno"><font size="3px" color="#c8cbcf"><b>  Mobile  </b></font></label>
                           <input name="phno" type = "text" minlength = "10" placeholder="<?php if(isset($_GET['error5'])) echo $_GET['error5']; ?>" required>
                        </div>
						
					    
						<div class="input-container email">
                          	<label for="email"><font size="3px" color="#c8cbcf"><b> Email </b></font></label>
                            <input name="nemail" type="email" required>
                        </div>
						
						<div class="input-container username">
                          	<label for="username"><font size="3px" color="#c8cbcf"><b> Username </b></font></label>
                            <input name="usrnm" maxLength="10" type="text" placeholder="<?php if(isset($_GET['error1'])){  echo $_GET['error1']; } ?>" required>
                        </div>
						
						<div class="input-container password">
                          	<label for="pswd"><font size="3px" color="#c8cbcf"><b> Password</b></font> </label>
                            <input name="pswd" type="password" placeholder="<?php if(isset($_GET['error2'])){  echo $_GET['error2']; } else { echo 'Must contain at least 6 characters'; } ?>" required>
                        </div>

                        <div class="input-container password">
                          	<label for="pswd"><font size="3px" color="#c8cbcf"><b> Confirm Password</b></font> </label>
                            <input name="cpswd" type="password" placeholder="<?php if(isset($_GET['error'])){  echo $_GET['error']; } ?>" required>
                        </div>
                        
						
						<input class="signup-button" type="submit" name="signup" value="sign up"> 
						
						<section class="copy-legal">
						    <p><span class="small"><font color="#c8cbcf"> &nbsp&nbsp&nbsp&nbsp&nbsp By continuing, you agree to our <a href="terms.html"><font color="#fff">terms & conditions.</font></a></font> </span></p>
                        </section>						
					   
				 </div>
				 </form>
				 
				 
			</div>	
<?php
if(isset($_POST) && array_key_exists('signup',$_POST))
{       
$fnm=$_POST['fname'];
$email=$_POST['nemail'];
$usr=$_POST['usrnm'];
$pswd=$_POST['pswd'];
$cpswd=$_POST['cpswd'];
$btn=$_POST['signup'];
$phone=$_POST['phoneno'];
$error='';
$error1='';
$error5='';

include('connection.php');
  
  $query="insert into signup(F_name,Email,Username,Phone_no)values('$fnm','$email','$usr','$phone')";
  $query1="insert into signin(Username,Password,User_type)values('$usr','$pswd','User')";
  
if(isset($_POST['signup']))
{  
	if(strlen($pswd)<6)
	{
		header("Location:signup.php?error2=Password is too short.");
		goto end;
	}
	
	if(($pswd)==($cpswd))
	{
    $inp=mysql_query($query,$con);
	$inp=mysql_query($query1,$con);
    }
    else
    {
    	
    	header("Location:signup.php?error=Passwords do not match! Kindly Check");
    	goto end;
    }
}

   

  if(!$inp)
  {
   header("Location: signup.php?error1=Username Already Exists ! ");
  }	
  else
  {     
     sleep(1); 
  header("Location: thanku.php");  
	   
  }
  end:
	  
mysql_close($con);
}
?>			
		</body>
</html>	

	
				 
				 