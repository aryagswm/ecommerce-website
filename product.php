<?php 
include "header.php";
include "connection.php";
?>
<!DOCTYPE html>
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

<br>
<table width="400" height="44" border="0" align="center">
  <tr>
    <td width="400" align="center"><h1> Rent Vehicles</h1></td>
  </tr>
</table>
<br>


<h3>&nbsp;</h3>
<br>



<table width="548" height="297" border="5" align="center" cellpadding="0" cellspacing="0">
  <form action="" method="post" name="asd">
    <tr>
      <td height="54" colspan="2" align="center" bgcolor="#FFFFFF"><h4>SEARCH YOUR DESIRED VEHICLE </h4></td>
    </tr>
    <tr>
      <td width="294" height="85" align="center" bgcolor="#0099FF"><h4>TYPE</h4></td>
      <td width="240" align="center" bgcolor="#0099FF"><label for="maincategory"></label>
        <select name="maincategory" id="maincategory">
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
      <td height="79" align="center" bgcolor="#0099FF"><strong>BRAND</strong></td>
      <td align="center" bgcolor="#0099FF"><select name="subcategory" id="subcategory">
      </select></td>
    </tr>
    <tr>
      <td height="79" colspan="2" align="center" bgcolor="#FFFFFF"><input type="submit" name="go" id="go" value="Go"></td>
    </tr>
  </form>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><br>
</p>
  <p>
    
    
    <?php 
	   if(isset($_POST['go']))
{
	
	$qry="select * from product where subcategory='".$_POST['subcategory']."'";

	//$qry="select * from product";
	$res=mysql_query($qry);
	while($row=mysql_fetch_array($res))
	{
		
		$id=$row['id'];
		$name=$row['name'];
		$maincategory=$row['maincategory'];
		$subcategory=$row['subcategory'];
		$price=$row['price'];
		$details=$row['details'];
		$image=$row['image'];
		
		
		
	
	
	?>
    
    
    
<div class="responsive">    
	<div class="gallery">
  		<a target="_blank" href="single.php?id=<?php echo $id; ?>">
    		<img src="admin/productgallery/<?php echo $image; ?>"  width="300" height="200">
  		</a>
  		<div class="desc"><h4>Name : </h4><?php echo $name; ?></div>
        <div class="desc"><h4>Price :</h4> <?php echo $price; ?></div>
      <div class="desc"><h4>Details : </h4><?php echo $details; ?></div>
        
	</div>
	</div>
    
    <?php 
	}}
	?>
    

 
    
    </p>


</body>
</html>



