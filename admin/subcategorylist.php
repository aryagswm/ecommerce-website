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
    <th colspan="4" align="left" bgcolor="#FFFFFF" scope="col"><a href="addsubcategory.php"><strong>Add Sub Category...</strong></a></th>
  </tr>
  
   <tr bgcolor="#72CDE0">
    <th colspan="4" scope="col"><div align="left">
      <form name="form1" method="post" action="">
        <p>Search Sub Category : 
          <label for="textfield3"></label>
          <input type="text" name="search" id="search">
          <input type="submit" name="go" id="go" value="Go">
        </p>
      </form>
    </div></th>
  </tr>
  
  <tr>
    <th bgcolor="#0099FF" scope="col"><strong>Sub Category</strong></th>
    <th bgcolor="#0099FF" scope="col"><strong>Main Category ID</strong></th>
    <th bgcolor="#0099FF" scope="col"><strong>Edit</strong></th>
    <th bgcolor="#0099FF" scope="col"><strong>Delete</strong></th>

  </tr>
  
  
  <?php 
    if($_POST['search']!="")
{
	
$qry="select * from subcategory where subcategory like '%".$_POST['search']."%'  ";
}
else 
  
  $qry="select * from subcategory";

  $res=mysql_query($qry);  
   while($row=mysql_fetch_array($res))
   {
	   $id=$row['id'];
	   $subcategory=$row['subcategory'];
	   $maincategoryid=$row['maincategoryid'];
	

  ?>
 
  <tr bgcolor="#FFFFFF">
    <td><?php echo $subcategory; ?></td>
    <td><?php echo $maincategoryid; ?></td>
    <td><a href="editsubcategory.php?id=<?php  echo $id;?>">Edit</a></td>
    <td><a href="deletesubcategory.php?id=<?php echo $id; ?>">Delete</a></td>
    
  </tr>
  
  <?php 
   }
  ?>
  
  
</table>
</body>
</html>
