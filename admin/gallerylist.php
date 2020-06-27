<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<?php
include "header.php";
include "menu.php";
include "../connection.php";

?>
<body background="image/backdrop.jpg">
<table width="100%" border="0">
  <tr>
    <td align="left"><table width="600" border="5" align="center" cellpadding="0" cellspacing="0">
      <tr bgcolor="#FFFFFF">
        <td colspan="4"><strong><a href="addgallery.php">Add Gallery...</a></strong></td>
      </tr>
      
       <tr bgcolor="#72CDE0">
    <th colspan="4" scope="col"><div align="left">
      <form name="form1" method="post" action="">
        <p align="center">Search Gallery : 
          <label for="textfield3"></label>
          <input type="text" name="search" id="search">
          <input type="submit" name="go" id="go" value="Go">
        </p>
      </form>
    </div></th>
  </tr>
      
      <tr>
        <td align="center" bgcolor="#0099FF"><strong>Name</strong></td>
        <td align="center" bgcolor="#0099FF"><strong>Image</strong></td>
        
        <td align="center" bgcolor="#0099FF"><strong>Delete</strong></td>
      </tr>
      <?php 
	      if($_POST['search']!="")
{
	
$qry="select * from gallery where name like '%".$_POST['search']."%'  ";
}
else
	 	$qry="select * from gallery";
	  	$res=mysql_query($qry);
	  	while($row=mysql_fetch_array($res))
	  	{
			$id=$row['id'];
			$name=$row['name'];
			$image=$row['image'];
	  ?>
	
     
  <tr bgcolor="#FFFFFF">
    <td><?php echo $name; ?></td>
    <td align="center"><img src="uploadgallery/<?php  echo $image?>" width="50" height="50"></td>
   
    <td><a href="deletegallery.php?id=<?php echo $id; ?>">Delete</a></td>
  </tr>
   
   
 	<?php
	  	}
	?>
   
    </table>

</body>
</html>