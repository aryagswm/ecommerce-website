<?php 
include "header.php";
include "menu.php";
include "../connection.php";

?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">

</head>

<body background="image/backdrop.jpg">
<table width="745" border="5" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th colspan="6" align="left" valign="top" bgcolor="#FFFFFF" scope="col"><a href="addmember.php">Add Member....</a></th>
  </tr>

  <tr bgcolor="#72CDE0">
  
    <th colspan="6" scope="col"><div align="left">
      <form name="form1" method="post" action="">
        <p align="center">Search Name: 
          <label for="textfield3"></label>
          <input type="text" name="search" id="search">
          <input type="submit" name="go" id="go" value="Go">
        </p>
      </form>
    </div></th>
  </tr>
  <tr>
    <th width="202" bgcolor="#0099FF" scope="col">Name</th>
    <th width="122" bgcolor="#0099FF" scope="col">Email</th>
    <th width="153" bgcolor="#0099FF" scope="col">Username</th>
    <th width="80" bgcolor="#0099FF" scope="col">Password</th>
    <th width="102" bgcolor="#0099FF" scope="col">Edit </th>
    <th width="64" bgcolor="#0099FF" scope="col">Delete</th>

  </tr>
  
  
  <?php 
    if($_POST['search']!="")
{
	
$qry="select * from signup where name like '%".$_POST['search']."%'  ";
}
else 
  $qry="select * from signup";

  $res=mysql_query($qry);  
   while($row=mysql_fetch_array($res))
   {
	   $id=$row['id'];
	   $name=$row['name'];
	   $email=$row['email'];
	   $username=$row['username'];
	   $password=$row['password'];

  ?>
 
  <tr>
    <td bgcolor="#FFFFFF"><?php echo $name; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $email; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $username; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $password; ?></td>
    <td bgcolor="#FFFFFF"><a href="editmember.php?id=<?php  echo $id;?>">Edit</a></td>
    <td bgcolor="#FFFFFF"><a href="deletemember.php?id=<?php echo $id; ?>">Delete</a></td>
    
  </tr>
  
  <?php 
   }
  ?>
  
  
</table>
</body>
</html>
