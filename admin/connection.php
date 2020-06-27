<?php 
$hostname="127.0.0.1";
$username="root";
$password="newpassword";
$database="udaipurbikers";
mysql_pconnect($hostname,$username,$password) or die(mysql_error());
mysql_select_db($database) or die("Database is not found");




?>




