<?php
include_once 'dbConnection.php';
ob_start();
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$subcity = $_POST['subcity'];
$houseno = $_POST['houseno'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$mob = $_POST['mob'];
$password = $_POST['password'];
//$balance = $_POST['balance'];
//$status = $_POST['status'];

$name = stripslashes($name);
$name = addslashes($name);
$name = ucwords(strtolower($name));
$gender = stripslashes($gender);
$gender = addslashes($gender);
$email = stripslashes($email);
$email = addslashes($email);
$subcity = stripslashes($subcity);
$subcity = addslashes($subcity);
$mob = stripslashes($mob);
$mob = addslashes($mob);
$houseno = stripslashes($houseno);
$houseno = addslashes($houseno);

$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);

$balance='0.00 ETB';
$status='NOT_ACTIVE';
$q3=mysqli_query($con,"INSERT INTO clients VALUES  ('$name' , '$subcity','$houseno' ,'$gender' ,'$email' ,'$mob', '$password')");
mysqli_query($con,"INSERT INTO userbalance VALUES  ('$id' , '$email','$name' ,'$houseno' ,'$balance' ,'$status')");

if($q3)
{
session_start();
$_SESSION["email"] = $email;
$_SESSION["name"] = $name;

header("location:account.php?q=1");
}
else
{
header("location:index.php?q7=Email Already Registered!!!");
}
ob_end_flush();
?>