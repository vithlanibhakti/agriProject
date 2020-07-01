<?php

session_start();
include("connect.php");
if(!isset($_SESSION['PhoneNo']))
{
	echo "<script>alert('You are not logged on...');</script>";
	header("refresh:0; url='login.php'");
}
else
{	
	$PhoneNo = $_SESSION['PhoneNo'];
 }
$result = mysqli_query($con,"SELECT Id FROM `custlogin` where PhoneNo ='".$_SESSION['PhoneNo']."'");
$row = mysqli_fetch_array($result);
 $EC = $row['Id']; 

//insert.php
//if(isset($_POST["name"]))
//{

 $name = mysqli_real_escape_string($con, $_POST["name"]);
 $address = mysqli_real_escape_string($con, $_POST["address"]);
 $area = mysqli_real_escape_string($con, $_POST["area"]);
 $w = mysqli_real_escape_string($con, $_POST["w"]);

 $query = "
 INSERT INTO try( `name`, `address`, `area`, `w`, `Id`)
 VALUES ('$name', '$address','$area','$w','$EC') ";
 $a=mysqli_query($con, $query);
 
//}
?>