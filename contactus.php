<!DOCTYPE html>

<html>
   <head>
      <meta charset="utf-8">
      <title>Contact Us </title>
      <link rel="stylesheet" href="css/contactus.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
   
     
   
      <div class="container">
      <div class="text">
        <h5>Connect With Us ! </h5><br> <font size="5px"> We love to reach out and solve your concerns with us. </font>
      </div>
	   
      <form method="POST">
         <div class="form-row">
            <div class="input-data">
               <input type="text" required name="fname">
               <div class="underline"></div>
               <label for="">First Name</label>
            </div>
            <div class="input-data">
               <input type="text" required name="lname">
               <div class="underline"></div>
               <label for="">Last Name</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="text" required name="mail">
               <div class="underline"></div>
               <label for="">Email Address</label>
            </div>
            <div class="input-data">
               <input type="text" required name="sub">
               <div class="underline"></div>
               <label for="">Subject</label>
            </div>
         </div>
         <div class="form-row">
         <div class="input-data textarea">
            <textarea rows="8" cols="80" required placeholder="max 500 letters." name="text1"></textarea>
            <br />
            <div class="underline"></div>
            <label for="">Write your message</label>
            <br />
            <div class="form-row submit-btn">
               <div class="input-data">
                  <div class="inner"></div>
                  <input type="submit" value="submit" name="button">
               </div>
            </div>
         </div>
      </div>
      </form>
      
 

</div>

<?php
if(isset($_POST) && array_key_exists('button',$_POST))
{
$fnm=$_POST['fname'];
$lnm=$_POST['lname'];
$mail=$_POST['mail'];
$sub=$_POST['sub'];

$btn=$_POST['button'];

$mes= mysql_real_escape_string($_POST['text1']);

include('connection.php');

$query1="insert into comp(F_name,L_name,Email,Subject,Message,status)values('$fnm','$lnm','$mail','$sub','$mes',0)";

if(isset($_POST['button']))
{
   $inp=mysql_query($query1,$con);
   
}

if(!$inp){
echo '<script> alert("Could not send Ticket, Try again later"); </script>';
}
else{


   echo "<script type='text/javascript' > alert('Ticket sent successfully'); </script>";
      
}
}
?>
<a href="welcome.html" style="position : absolute; top:100px; font-size:20px"> Click here redirect to home page.</a>
</body>
</html>
  