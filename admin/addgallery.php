<?php 
include "header.php";
include "menu.php";
include "../connection.php";

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Gallery</title>
</head>

<body background="image/backdrop.jpg">

<?php 

if(isset($_POST['save']))
{
	$qry="insert into gallery(name,image) values('".$_POST['name']."','".$_POST['image']."')";
	mysql_query($qry);
	echo '<script>
   alert("Gallery added successfully");
   window.location="gallerylist.php";
  

     </script>';
	
	
	}

?>






<table width="600" border="5" align="center" cellpadding="0" cellspacing="0" bgcolor="#0099FF">
  <tr>
    <td><form action="uploadgallery/checkgallery.php" method="post" enctype="multipart/form-data" name="form1">
       <table width="600" border="0" cellspacing="3" cellpadding="0">
        <tr>
          <td width="239"><strong>Name</strong></td>
          <td width="241"><label for="name"></label>
            <input type="text" name="name" id="name" /></td>
          </tr>
       
        <tr>
          <td><strong>Image</strong></td>
          <td><input type="file" name="image" id="image" /></td>
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
    </form></td>
  </tr>
</table>


</body>
</html>