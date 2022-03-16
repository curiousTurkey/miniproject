<?php
session_start();
include("connection.php");

$username=$_GET['id'];

$query="delete from empsignin where Empusername='$username'";
$query1="delete from empsignup where Empusername='$username'";
$inp=mysql_query($query,$con);


if($inp)
{ 
	$inp1=mysql_query($query1,$con);
	if($inp1)
	{
      header("Location:staffdismiss.php");
    }

}
?>