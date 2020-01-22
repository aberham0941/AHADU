<?php
session_start();
if(isset($_SESSION["houseno"])){
session_destroy();
}
include_once 'dbConnection.php';
$ref=@$_GET['q'];
$houseno = $_POST['houseno'];
$subcity = $_POST['subcity'];

$houseno = stripslashes($houseno);
$houseno = addslashes($houseno);
$subcity = stripslashes($subcity); 
$subcity = addslashes($subcity);
$subcity=md5($subcity); 
$result = mysqli_query($con,"SELECT name FROM clients WHERE houseno = '$houseno' and subcity = '$subcity'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
}
$_SESSION["name"] = $name;
$_SESSION["houseno"] = $houseno;
header("location:bill.php?q=1");
}
else
header("location:$ref?w=Wrong subcity or houseno");


?>