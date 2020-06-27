<?php 
session_start();
include "header.php";
include "menu.php";
include "../connection.php";

?>

<!doctype html>
<html>
<head>

</head>

<body background="image/backdrop.jpg">

<?php 

$id=$_SESSION['id'];

$qry="select * from admin where id='".$id."'";
$res=mysql_query($qry);
while($row=mysql_fetch_array($res))
{
	$id=$row['id'];
 	$dbpassword=$row['password'];
	
	}

?>


<?php 

if(isset($_POST['button']))

{
	$oldpassword=$_POST['oldpassword'];
	$newpassword=$_POST['newpassword'];
	$cpassword=$_POST['cpassword'];
	if($dbpassword==$oldpassword)
	{
	  if($newpassword==$cpassword)
	  {
	  	$update="update admin set password='".$_POST['newpassword']."' where id='".$id."'";
	  	mysql_query($update);
	  	echo '<script>
	  	alert("Password changed successfully !! ");
	  	window.location="changepassword.php";
	  	</script>';
	  }
	  else
	  { 
	  	echo '<script> 
		alert(" Confirm Password and New Password cannot be different !! ");
		window.location="changepassword.php";
		</script>';
	  }
	}
    else 
	{
	  echo '<script>
	  alert("Old password is wrong !!");
	  window.location="changepassword.php";
	  </script>';
    }
	
}




?>




<table width="300" border="5" align="center" cellpadding="0" cellspacing="0" bgcolor="#0099FF">
  <tr>
    <th scope="col"><form name="form1" method="post" action="">
      <table width="476" height="191" border="0" cellpadding="0" cellspacing="3">
        <tr>
          <th scope="col">&nbsp;</th>
          <th scope="col">&nbsp;</th>
        </tr>
        <tr>
          <td align="left">Old Password</td>
          <td><label for="oldpassword"></label>
            <input type="text" name="oldpassword" id="oldpassword" value=""></td>
        </tr>
        <tr>
          <td align="left">New Password</td>
          <td><label for="newpassword"></label>
            <input type="text" name="newpassword" id="newpassword"></td>
        </tr>
        <tr>
          <td align="left">Confirm Password</td>
          <td><label for="cpassword"></label>
            <input type="text" name="cpassword" id="cpassword"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="center"><div align="left">
            <input type="submit" name="button" id="button" value="Submit">
          </div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form></th>
  </tr>
</table>
</body>
</html>
