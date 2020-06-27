<?php
include "../connection.php";

 
echo $id=$_GET['id'];
echo $qry="delete from maincategory where id='".$id."'";
mysql_query($qry);
echo '<script>
   alert("Main Category deleted successfully");
   window.location="maincategorylist.php";
  

     </script>';
	 



?>