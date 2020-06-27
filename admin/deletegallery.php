<?php
include "../connection.php";

 
echo $id=$_GET['id'];
echo $qry="delete from gallery where id='".$id."'";
mysql_query($qry);
echo '<script>
   alert("Image deleted successfully");
   window.location="gallerylist.php";
  

     </script>';
	 



?>