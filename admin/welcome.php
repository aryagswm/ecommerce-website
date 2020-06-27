<?php 
session_start();
include "header.php";
include "menu.php";

if($_SESSION['id']=="")
{
	
	echo '<script>
   window.location="index.php";
	</script>';
	
	}


?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
.fs {
	text-align: center;
}
</style>



 
</head>

<body background="image/backdrop.jpg">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th width="34%" scope="col">&nbsp;</th>
    <th width="45%" scope="col">&nbsp;</th>
    <th width="21%" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><h1 class="fs">Welcome <?php echo   $_SESSION['name'];?> ! </h1></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
