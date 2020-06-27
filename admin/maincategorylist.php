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
<style type="text/css">
.vc {
	color: #FFF;
}
</style>
</head>

<body background="image/backdrop.jpg">
<table width="600" border="5" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFFFFF">
    <th colspan="3" scope="col"><div align="left">
      <p><a href="addmaincategory.php"><strong>Add Main Category...</strong></a>    </p>
    </div></th>
  </tr>
  <tr>
    <th colspan="3" align="left" bgcolor="#0099FF" scope="col"><label for="textfield"></label></th>
  </tr>
  <tr bgcolor="#72CDE0">
    <th colspan="3" scope="col"><div align="left">
      <form name="form1" method="post" action="">
        <p>Search Main Category : 
          <label for="textfield3"></label>
          <input type="text" name="search" id="search">
          <input type="submit" name="go" id="go" value="Go">
        </p>
      </form>
    </div></th>
  </tr>
  <tr bgcolor="#FFFFFF">
    <th bgcolor="#0099FF" scope="col"><strong>Main Category</strong></th>
    <th bgcolor="#0099FF" scope="col"><strong>Edit</strong></th>
    <th bgcolor="#0099FF" scope="col"><strong>Delete</strong></th>

  </tr>
  
  
  <?php 
  if($_POST['search']!="")
{
	
$qry="select * from maincategory where maincategory like '%".$_POST['search']."%'  ";
}
else 

  $qry="select * from maincategory";

  $res=mysql_query($qry);  
   while($row=mysql_fetch_array($res))
   {
	   $id=$row['id'];
	   $maincategory=$row['maincategory'];
	

  ?>
 
  <tr bgcolor="#0099FF">
    <td bgcolor="#FFFFFF"><?php echo $maincategory; ?></td>
    <td bgcolor="#FFFFFF"><a href="editmaincategory.php?id=<?php  echo $id;?>">Edit</a></td>
    <td bgcolor="#FFFFFF"><a href="deletemaincategory.php?id=<?php echo $id; ?>">Delete</a></td>
    
  </tr>
  
  <?php 
   }
  ?>
  
  
</table>
</body>
</html>
