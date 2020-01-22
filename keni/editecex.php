<?php
include 'db.php';
$owner_id =$_REQUEST['id'];
	$id = $_POST['id'];
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$subcity=$_POST['subcity'] ;
	$houseno=$_POST['houseno'] ;
	$mi = $_POST['mi'];
	
	mysqli_query($conn,"UPDATE owners SET id ='$id', lname ='$lname',
		 fname ='$fname',mi ='$mi', subcity='$subcity', houseno='$houseno' WHERE id = '$owner_id'");
			

		 echo "<script>windows: location='clients.php'</script>";				
			