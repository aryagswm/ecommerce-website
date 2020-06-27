<?php 
include "header.php";
include "menu.php";
include "../connection.php";

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body background="image/backdrop.jpg">

<?php 

if(isset($_POST['save']))
{
	$qry="insert into signup(name,email,username,password) values('".$_POST['name']."','".$_POST['email']."','".$_POST['username']."','".$_POST['password']."')";
	mysql_query($qry);
	echo '<script>
   alert("Member added successfully");
   window.location="memberlist.php";
  

     </script>';
	
	
	}

?>






<table width="600" border="5" align="center" cellpadding="0" cellspacing="0" bgcolor="#0099FF">
  <tr>
    <td><form action="" method="post" enctype="multipart/form-data" name="form1">
       <table width="600" border="0" cellspacing="3" cellpadding="0">
        <tr>
          <td width="239"><strong>Name</strong></td>
          <td width="241"><label for="name"></label>
            <input type="text" name="name" id="name" /></td>
          </tr>
        <tr>
          <td><strong>Email</strong></td>
          <td><label for="email"></label>
            <input type="text" name="email" id="email" /></td>
          </tr>
        <tr>
          <td><strong>Username</strong></td>
          <td><input type="text" name="username" id="username" /></td>
        </tr>
        <tr>
          <td><strong>Password</strong></td>
          <td><input type="text" name="password" id="password" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
            <input type="submit" name="save" id="save" value="Save" />
            </div></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>


</body>
</html>