<?php
include "db.php";
 session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$username = stripslashes($username);
$username = addslashes($username);
$password = stripslashes($password); 
$password = addslashes($password);
$password=md5($password); 
 $login = mysql_query($conn,"SELECT * FROM user WHERE username = '$username' and password = '$password'") or die('Error');
 $count=mysqli_num_rows($login);
if($count==1){ 
while($row = mysqli_fetch_array($login)) {
	$name = $row['name'];
}
$_SESSION["name"] = $name;
$_SESSION["username"] = $username;
header("location:billing.php?q=1");
}
else
header("location:$ref?w=Wrong Username or Password");


?>
