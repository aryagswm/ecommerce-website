<?php
include "../connection.php";

 
echo $id=$_GET['id'];
echo $qry="delete from product where id='".$id."'";
mysql_query($qry);
echo '<script>
   alert("Product deleted successfully");
   window.location="productlist.php";
  

     </script>';
	 



?>