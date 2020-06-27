<?php 
include "header.php";
include "menu.php";
include "../connection.php";
$id=$_GET['id'];
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body background="image/backdrop.jpg">
<?php 
if(isset($_POST['button']))
{
	 $update="update signup set name='".$_POST['name']."',email='".$_POST['email']."',username='".$_POST['username']."',password='".$_POST['password']."' where id='".$id."'";
	mysql_query($update);
	
	echo '<script>
   alert("Member updated successfully !!");
   window.location="memberlist.php";
  

     </script>';

	
	
	
	
	}











?>







<!------- data list on particular id--------->

<?php 
$qry="select * from signup where id='".$id."'";

$res=mysql_query($qry);
while($row=mysql_fetch_array($res))
{
	$id=$row['id'];
	$name=$row['name'];
	$email=$row['email'];
	$username=$row['username'];
	$password=$row['password'];
	
	
	
	}


?>






<table width="547" border="5" align="center" cellpadding="0" cellspacing="0" bgcolor="#0099FF">
  <tr>
    <th width="535" scope="col"><form name="form1" method="post" action="">
      <table width="300" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th scope="col">&nbsp;</th>
          <th scope="col">&nbsp;</th>
        </tr>
        <tr>
          <td align="left" valign="baseline"><p><strong>Name</strong></p></td>
          <td><label for="name"></label>
            <input type="text" name="name" id="name" value="<?php  echo $name;?>"></td>
        </tr>
        <tr>
          <td align="left" valign="baseline"><p><strong>Email</strong></p></td>
          <td><label for="email"></label>
            <input type="text" name="email" id="email" value="<?php  echo $email;?>"></td>
        </tr>
        <tr>
          <td align="left" valign="baseline"><p><strong>Username</strong></p></td>
          <td><label for="password"></label>
            <input type="text" name="username" id="username" value="<?php  echo $username;?>"></td>
        </tr>
        <tr>
          <td align="left" valign="baseline"><p><strong>Password</strong></p></td>
          <td><label for="password"></label>
            <input type="text" name="password" id="password" value="<?php  echo $password;?>">
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="button" id="button" value="Submit"></td>
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
