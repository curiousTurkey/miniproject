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
 	     <p>Username : </p><input type="text" name="usr" placeholder="Enter registered username " required>
 	     <br>
 	     <br>
 	  
        <br>
        <br>
 	     <span><?php if(isset($_GET['message'])){ echo $_GET['message']; }  ?></span>
        <span class="spann"><?php if(isset($_GET['message1'])){ echo $_GET['message1']; echo "<a href='usersignin.php' class='link'><font color='#000f94'>Click here to redirect</font></a>"; } ?> </span>
        
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
   
   $usr=$_POST['usr'];
   $npswd=$_POST['pswd'];
   $ncpswd=$_POST['cpswd'];

   include("connection.php");
   
   $query="select * from signin";
   $query1="update signin set Password='$npswd' where Username='$usr'";
   $inp=mysql_query($query,$con);
     if(strlen($ncpswd)<6)
   {
      header("Location: aresetpas.php?message=Password is too short");
   }
   else if($npswd!=$ncpswd){

      header("Location: aresetpas.php?message=Password doesn't match");
   }
   else
   {
      $stat=0;
   while($result=mysql_fetch_array($inp))
    {
       if($result['Username']==$usr)
       {  $stat=1;
          $inp1=mysql_query($query1,$con);
          if(!$inp1)
           header("Location: uresetpassword.php?message=Password didin't update Successfully. Please try again later.");
          else
           header("Location: uresetpassword.php?message1=Password updated successfully. Login with new credentials.");  

       }  
       
    }
  
   
}
header("refresh : 120; url=usersignin.php");
}
?>
 </body>
 </html>