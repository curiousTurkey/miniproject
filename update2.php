<?php
session_start();
include("connection.php");

$id=$_GET['id'];
$stid=$_GET['sid'];
$query1="update stock set Engine=Engine-10";
$query2="update stock set Body=Body-10";
$query3="update stock set Consumables=Consumables-10";

$query="update servicebook set Status='Completed' where Service_id='$id'";
$inp=mysql_query($query,$con);
switch ($stid) {
	case 100:
		$inp2=mysql_query($query1,$con);
		break;
	
	case 101: 
	     $inp3=mysql_query($query2,$con);
	     break;
	case 102:  
	     $inp4=mysql_query($query3,$con);
	     break;   
}

if($inp)
{
	
	header("Location:employeework.php");

}
?>