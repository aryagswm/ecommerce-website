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

<style type="text/css">
.fd {
	font-weight: bold;
}
.f {
	font-weight: bold;
}
</style>
</head>

<body background="image/backdrop.jpg">
<?php 
if(isset($_POST['button']))
{
	 $update="update subcategory set subcategory='".$_POST['subcategory']."',maincategoryid='".$_POST['maincategoryid']."'where id='".$id."'";
	mysql_query($update);
	
	echo '<script>
   alert("Sub Category updated successfully !!");
   window.location="subcategorylist.php";
  

     </script>';

	
	
	
	
	}











?>







<!------- data list on particular id--------->

<?php 
$qry="select * from subcategory where id='".$id."'";

$res=mysql_query($qry);
while($row=mysql_fetch_array($res))
{
	$id=$row['id'];
	$subcategory=$row['subcategory'];
	$maincategoryid=$row['maincategoryid'];
	
	
	
	
	}


?>






<table width="500" border="5" align="center" cellpadding="0" cellspacing="0" bgcolor="#0099FF">
  <tr>
    <th scope="col"><form name="form1" method="post" action="">
      <table width="500" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th scope="col">&nbsp;</th>
          <th scope="col">&nbsp;</th>
        </tr>
        <tr>
          <td class="f">Sub Category</td>
          <td><label for="name"></label>
            <input type="text" name="subcategory" id="subcategory" value="<?php  echo $subcategory;?>"></td>
        </tr>
        
         <tr>
          <td class="fd">Main Category ID</td>
          <td><label for="name"></label>
            <input type="text" name="maincategoryid" id="maincategoryid" value="<?php  echo $maincategoryid;?>"></td>
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
