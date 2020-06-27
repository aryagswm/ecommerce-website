<?php 
include('../connection.php');
 
echo $maincategory = $_GET['maincategory'];

$query = mysql_query("SELECT * FROM subcategory WHERE maincategoryid ='".$maincategory."'");
while($row = mysql_fetch_array($query)) {
	echo "<option value='$row[id]'>$row[subcategory]</option>";
}
 
?>




