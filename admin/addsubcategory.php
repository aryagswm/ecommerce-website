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

<?php 

if(isset($_POST['save']))
{
	$qry="insert into subcategory(subcategory,maincategoryid) values('".$_POST['subcategory']."','".$_POST['maincategoryid']."')";
	mysql_query($qry);
	echo '<script>
   alert("Subcategory added successfully !! ");
   window.location="subcategorylist.php";
  

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
          <td><strong>Sub Category</strong></td>
          <td><label for="subcategory"></label>
            <input type="text" name="subcategory" id="subcategory" /></td>
          </tr>
           <td><strong>Main Category ID</strong></td>
          <td><label for="maincategoryid"></label>
            <label for="maincategoryid"></label>
            <select name="maincategoryid" id="maincategoryid">
            
			<?php $res=mysql_query($qry="select * from maincategory");
              while($row=mysql_fetch_array($res))
			  {
			
			
			?>
            
              <option value="<?php echo $row['id'];?>"><?php echo $row['maincategory']; ?></option>
            
            <?php 
			  }
			
			?>
            
            </select></td>
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