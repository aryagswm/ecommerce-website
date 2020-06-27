<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.xx {
	font-weight: bold;
}
</style>
</head>
<?php
include "header.php";
include "menu.php";
include "../connection.php";

?>
<body background="image/backdrop.jpg">
<table width="1200" border="5" align="center" cellpadding="0" cellspacing="0">
  
  <tr bgcolor="#FFFFFF" class="xx">
    <td colspan="8" bgcolor="#FFFFFF"><a href="addproduct.php">Add Product...</a></td>
  </tr>
  
    <tr bgcolor="#72CDE0">
  
    <th colspan="8" align="center" scope="col"><div align="left">
      <form name="form1" method="post" action="">
        <p align="center">Search Name: 
          <label for="textfield3"></label>
          <input type="text" name="search" id="search">
          <input type="submit" name="go" id="go" value="Go">
        </p>
      </form>
    </div></th>
  </tr>
  
  <tr class="xx">
    <td bgcolor="#0099FF">Name</td>
    <td bgcolor="#0099FF">Main Category</td>
    <td bgcolor="#0099FF">Sub Category</td>
    <td bgcolor="#0099FF">Price </td>
    <td bgcolor="#0099FF">Details</td>
    <td bgcolor="#0099FF">Image</td>
    
    <td bgcolor="#0099FF">Delete</td>
  </tr>
      <?php 
	      if($_POST['search']!="")
{
	
$qry="select * from product where name like '%".$_POST['search']."%'  ";
}
else 
	 	$qry="select * from product";
		$res=mysql_query($qry);
	  	while($row=mysql_fetch_array($res))
	  	{
			$id=$row['id'];
			$name=$row['name'];
			$maincategory=$row['maincategory'];
			$subcategory=$row['subcategory'];
			$price=$row['price'];
			$details=$row['details'];
			$image=$row['image'];
	  ?>
	
     
  <tr bgcolor="#FFFFFF">
    <td><?php echo $name; ?></td>
    <td><?php echo $maincategory; ?></td>
	<td><?php echo $subcategory; ?></td>
	<td><?php echo $price; ?></td>
	<td><?php echo $details; ?></td>
	<td align="center"><img src="productgallery/<?php  echo $image?>" width="50" height="50"></td>
    <td><a href="deleteproduct.php?id=<?php echo $id; ?>">Delete</a></td>
  </tr>
  
   
   
 	<?php
	  	}
	?>
   
</table>

</body>
</html>