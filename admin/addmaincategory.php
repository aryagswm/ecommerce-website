<?php 
include "header.php";
include "menu.php";
include "../connection.php";

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Main Category</title>
</head>

<body background="image/backdrop.jpg">

<?php 

if(isset($_POST['save']))
{
	$qry="insert into maincategory(maincategory) values('".$_POST['maincategory']."')";
	mysql_query($qry);
	echo '<script>
   alert("Maincategory added successfully");
   window.location="maincategorylist.php";
  

     </script>';
	
	
	}

?>






<table width="600" border="5" align="center" cellpadding="0" cellspacing="0" bgcolor="#0099FF">
  <tr>
    <td><form action="" method="post" enctype="multipart/form-data" name="form1">
       <table width="600" border="0" cellspacing="3" cellpadding="0">
      
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <td><strong>Main Category</strong></td>
          <td><label for="maincategory"></label>
            <input type="text" name="maincategory" id="maincategory" /></td>
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