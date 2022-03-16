<?php
session_start();
include("connection.php");

$id=$_GET['id'];
$_SESSION['compid']=$id;

$query="update comp set status=1 where F_id='$id'";
$inp=mysql_query($query,$con);

if($inp)
{
	
	header("Location:complaintfeedback1.php?F_id=$id");

}
?>