<?php
include "../connection.php";

 
echo $id=$_GET['id'];
echo $qry="delete from subcategory where id='".$id."'";
mysql_query($qry);
echo '<script>
   alert("Sub Category deleted successfully");
   window.location="subcategorylist.php";
  

     </script>';
	 



?>