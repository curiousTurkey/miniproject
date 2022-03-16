<?php session_start() ?>
<!DOCTYPE html>
 <head>
	   <meta name="viewport" content="width=device-width,initial-scale=1.0">
	   <title> Reset Password </title>
	   <link rel="stylesheet" type="text/css" href="css/resetpassword.css">
      
 </head>
 <body>

 	<form method="POST">
    <div class="main"></div>
 		 <div class="box">
 		<h1 align="center"> Reset Password </h1>
 	     <br>
 	     <br>
 	  
        <br>
        <br>
 	     <span><?php if(isset($_GET['message'])){ echo $_GET['message']; }  ?></span>
        <span class="spann"><?php if(isset($_GET['message1'])){ echo $_GET['message1']; echo "<a href='employeelogin.php' class='link'><font color='#000f94'>Click here to redirect</font></a>"; } ?> </span>
        
         <div class="class2">
 	     <p>New Password : </p><input type="password" name="pswd" placeholder="Minimum 6 characters" required>
 	     <br>
 	     <p>Confirm Password : </p><input type="password" name="cpswd" required>
        <br>
        <input type="submit" value="Change Password" name="cbutton">
 	     </div>
     </form>
  </div>
<!--PHP code -->
<?php
if(isset($_POST) && array_key_exists('cbutton',$_POST))
{
   
   $usr=$_SESSION['loggeduser'];
   $npswd=$_POST['pswd'];
   $ncpswd=$_POST['cpswd'];

   include("connection.php");
   
   $query="select * from empsignin";
   $query1="update empsignin set Password='$npswd' where Empusername='$usr'";
   $inp=mysql_query($query,$con);
   while($result=mysql_fetch_array($inp))
    {
       if($_SESSION['loggeduser']==$usr)
       {  
          $inp1=mysql_query($query1,$con);
          if(!$inp1)
           header("Location: emppasswordreset.php?message=Password didin't update Successfully. Please try again later.");
          else
           header("Location: emppasswordreset.php?message1=Password updated successfully. Login with new credentials.");  

       }  
       else
       {
         header("Location: emppasswordreset.php?message=Username not registered with us ! ");
         
       }
    }
   
}
header("refresh : 120; url=employeelogin.php");
?>

 </body>
 </html>
