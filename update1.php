<?php
session_start();

include("connection.php");

$id=$_GET['id'];

$query="update servicebook set Status='Ongoing' where Service_id='$id'";
$inp=mysql_query($query,$con);

if($inp)
{
	
	header("Location:employeework.php");

}
?>