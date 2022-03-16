<?php

$con=mysql_connect('localhost','root','') or die("Server couldn't connect".mysql_error($con));
  
  $db=mysql_select_db('service_center',$con) or die("Couldn't access database".mysql_error($con));


?>
