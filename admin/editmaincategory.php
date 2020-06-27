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

</head>

<body background="image/backdrop.jpg">
<?php 
if(isset($_POST['button']))
{
	 $update="update maincategory set maincategory='".$_POST['maincategory']."'where id='".$id."'";
	mysql_query($update);
	
	echo '<script>
   alert("Main Category updated successfully !!");
   window.location="maincategorylist.php";
  

     </script>';

	
	
	
	
	}











?>







<!------- data list on particular id--------->

<?php 
$qry="select * from maincategory where id='".$id."'";

$res=mysql_query($qry);
while($row=mysql_fetch_array($res))
{
	$id=$row['id'];
	$maincategory=$row['maincategory'];
	
	
	
	
	}


?>






<table width="410" border="5" align="center" cellpadding="0" cellspacing="0" bgcolor="#0099FF">
  <tr>
    <th width="406" scope="col"><form name="form1" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th scope="col">&nbsp;</th>
          <th scope="col">&nbsp;</th>
        </tr>
        <tr>
          <td><strong>Main Category</strong></td>
          <td><label for="name"></label>
            <input type="text" name="maincategory" id="maincategory" value="<?php  echo $maincategory;?>"></td>
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
