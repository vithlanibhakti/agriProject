<?php
//insert.php
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

 $name = mysqli_real_escape_string($con, $_POST["fname"]);
 $phn = mysqli_real_escape_string($con, $_POST["phn"]);
 $village = mysqli_real_escape_string($con, $_POST["village"]);
 $survey = mysqli_real_escape_string($con, $_POST["survey"]);
 $taluka = mysqli_real_escape_string($con, $_POST["taluka"]);
 $testing = mysqli_real_escape_string($con, $_POST["testing"]);
 $crop = mysqli_real_escape_string($con, $_POST["crop"]);
 $sample = mysqli_real_escape_string($con, $_POST["sample"]);
 
 $query="INSERT INTO `PlantCons`(`Farmer_Name`, `Mobile_No`, `Village`, `Survey_No`, `Taluka`, `TestingDate`, `CropName`, `SampleNo`, `Id`)
 VALUES ('$name','$phn','$village','$survey','$taluka','$testing','$crop','$sample','$EC')";

 $a=mysqli_query($con, $query);
 
//}
?>