<?php
include('../../connection.php');

define ("DIR","productgallery/");

if(is_uploaded_file($_FILES['image']['tmp_name']))
{

	
if($_FILES['image']['type']=="image/jpeg" || $_FILES['image']['type']=="image/gif" ||$_FILES["image"]["type"] == "image/jpg" ||$_FILES["image"]["type"] == "image/png")

{
	
$name=$_POST['name'];
$maincategory=$_POST['maincategory'];
$subcategory=$_POST['subcategory'];
$price=$_POST['price'];
$details=$_POST['details'];
$uploadname = $_FILES['image']['name'];


move_uploaded_file($_FILES['image']['tmp_name'],$uploadname);


$qry="insert into product(name,maincategory,subcategory,price,details,image) values('".$name."','".$maincategory."','".$subcategory."','".$price."','".$details."','".$uploadname."')";
	mysql_query($qry);
?>

<script type="text/javascript">alert("Result Uploaded");window.location.href='../productlist.php';</script> 
<?php
}
else
?>
<script type="text/javascript">alert("Result not Uploaded");window.location.href='../productlist.php';</script>
<?php
}
else
?>

<script type="text/javascript">alert("Please check the file format");window.location.href='../productlist.php';</script><!doctype html>
