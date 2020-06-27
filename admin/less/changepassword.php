<?php
include "../connection.php";
include "header.php";
include "menu.php";
?>

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
	if($dbpassword==$oldpassword)
	{
	
 $update="update admin set password='".$_POST['newpassword']."' where id='".$id."'";
mysql_query($update);
echo '<script>
	alert("Password changed Successfully !! ");
	window.location="changepassword.php";
	</script>';
}
else 
{
	
	echo '<script>
	alert("Password did not match database !! ");
	window.location="changepassword.php";
	</script>';
}
	
	}




?>

<table width="600" border="5" align="center" cellpadding="0" cellspacing="0" bgcolor="#0099FF">
  
  <tr>
    <td><div align="center">
      <form id="form1" name="form1" method="post" action="">
<table width="600" border="0" cellspacing="3" cellpadding="0">
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td width="220"><strong>Old Password</strong></td>
            <td width="260"><label for="oldpassword"></label>
              <input type="text" name="oldpassword" id="oldpassword" value='<?php echo $password; ?>'></td>
          </tr>
          <tr>
            <td><strong>New Password</strong></td>
            <td><label for="image"></label>
              <input type="text" name="image" id="image" /></td>
          </tr>
          <tr>
            <td><strong>Confirm Password</strong></td>
            <td><label for="confirmpassword"></label>
              <input type="text" name="confirmpassword" id="confirmpassword" /></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
              <input type="submit" name="save" id="save" value="Save" />
            </div></td>
            </tr>
        </table>
      </form>
    </div></td>
  </tr>
</table>


</body>
</html>