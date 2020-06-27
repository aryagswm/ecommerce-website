<?php
$Hostname="localhost";
$Username="root";
$Password="";
$Database="UdaipurBikers";

mysql_pconnect($Hostname,$Username,$Password) or die(mysql_error());

mysql_select_db($Database) or die("Database is not found");

?>
