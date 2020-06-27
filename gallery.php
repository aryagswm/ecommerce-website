<?php 
include "header.php"
?>
<!DOCTYPE html>
<html>
<head>
<title> Udaipur Bikers</title>

<style>

body
{
	background:url(images/backdrop.jpg);
}

div.gallery {
    border: 1px solid #ccc;
	

}

div.gallery:hover {
    border: 1px solid #777;
	
}

div.gallery img {
    width: 100%;
    height: auto;
	
}

div.desc {
    padding: 15px;
    text-align: center;
	background:#FFF;
	
	
}

* {
    box-sizing: border-box;
	
	
	
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
	
}

@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
		
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
		
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
	}
</style>

</head>
<body>


  <h3>&nbsp;</h3>
  <table width="400" height="44" border="0" align="center">
    <tr>
      <td width="400" align="center"><h1>Our Expeditions</h1></td>
    </tr>
</table> <br>
    <p>
    
    
    <?php 
	
	include "connection.php";
	$qry="select * from gallery";
	$res=mysql_query($qry);
	while($row=mysql_fetch_array($res))
	{
		
		$id=$row['id'];
		$name=$row['name'];
		$image=$row['image'];
		
		
		
	
	
	?>
    
    
    
    <div class="responsive">    
	<div class="gallery">
  		<a target="_blank" href="admin/uploadgallery/<?php echo $image; ?>">
    		<img src="admin/uploadgallery/<?php echo $image; ?>"  width="300" height="200">
  		</a>
  		<div class="desc"><?php echo $name; ?></div>
	</div>
	</div>
    
    <?php 
	}
	?>
    

 
    
    </p>


</body>
</html>



