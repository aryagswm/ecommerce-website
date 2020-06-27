<?php
include "../connection.php";

 
echo $id=$_GET['id'];
echo $qry="delete from signup where id='".$id."'";
mysql_query($qry);
echo '<script>
   alert("Member delete succssfully");
   window.location="memberlist.php";
  

     </script>';
	 



?>