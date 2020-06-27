<?php
session_start();

 
include "../connection.php";
 $username=$_POST['username'];
 $password=$_POST['password'];

 $qry="select * from admin where username='".$username."' and password='".$password."' ";
 $res=mysql_query($qry);
 $res1=mysql_fetch_array($res);
if($res1!="")  
     { 
	  $_SESSION['id']=$res1['id'];
	  $_SESSION['username']=$res1['username'];
	  $_SESSION['name']=$res1['name'];
	  $_SESSION['password']=$res1['password'];
	  
	 
	 	  echo '<script>
	alert("Login Successful !!");
	window.location="welcome.php";
	</script>';
	}
      else 
	  {
		  
	echo '<script>
	alert("Login Unsuccessful !!	");
	window.location="index.php";
	</script>';

	 

	 }
?>