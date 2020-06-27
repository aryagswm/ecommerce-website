<?php 
include "header.php";
include "menu.php";
include "../connection.php";

?>


<!doctype html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">

</script>

<script>

$(document).ready(function() {
 
	$("#maincategory").change(function() {
		$(this).after('<div id="loader"><img src="img/loading.gif" alt="loading subcategory" /></div>');
		$.get('loadsubcategory.php?maincategory='+ $(this).val(), function(data) {
			
			$("#subcategory").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });
 
});


</script>

</head>
<body background="image/backdrop.jpg">

<?php 

if(isset($_POST['save']))
{
	$qry="insert into product(name,maincategory,subcategory,price,details,image) values('".$_POST['name']."','".$_POST['maincategory']."','".$_POST['subcategory']."','".$_POST['price']."','".$_POST['details']."','".$_POST['image']."')";
	mysql_query($qry);
	echo '<script>
   alert("Product added successfully");
   window.location="productlist.php";
     </script>';
	}

?>

<table width="600" border="5" align="center" cellpadding="0" cellspacing="0" bgcolor="#0099FF"> 
  <tr>
    <td><form action="productgallery/checkproductgallery.php" method="post" enctype="multipart/form-data" name="form1">
       <table width="600" border="0" cellspacing="3" cellpadding="0">
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="239"><strong>Name</strong></td>
          <td width="241"><label for="name"></label>
            <input type="text" name="name" id="name" /></td>
          </tr>
        <tr>
          <td><strong>Main Category</strong></td>
          <td><label for="maincategory"></label>
            <select name="maincategory" size="1" id="maincategory">
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
          <td><strong>Sub Category</strong></td>
          <td><label for="subcategory"></label>
            <select name="subcategory" id="subcategory">
              
            </select></td>
        </tr>
        <tr>
          <td><strong>Price</strong></td>
          <td><input type="text" name="price" id="price" /></td>
        </tr>
        <tr>
          <td><strong>Details</strong></td>
          <td><input type="text" name="details" id="details" /></td>
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