<?php
session_start();
include("dbConfig.php");
if(!isset($_SESSION['PhoneNo']))
{
	echo "<script>alert('You are not logged on...');</script>";
	header("refresh:0; url='login.php'");
}
else
{	
	$PhoneNo = $_SESSION['PhoneNo'];
 }
$result = mysql_query("SELECT Id FROM `custlogin` where PhoneNo ='".$_SESSION['PhoneNo']."'");
$row = mysql_fetch_array($result);
 $EC = $row['Id']; 

//insert.php
//if(isset($_POST["name"]))
//{
 include("connect.php");
 $fname=mysqli_real_escape_string($con,$_POST["fname"]);
$phn=mysqli_real_escape_string($con,$_POST["phn"]);
$village=mysqli_real_escape_string($con,$_POST["village"]);
$survey=mysqli_real_escape_string($con,$_POST["survey"]);
$taluka=mysqli_real_escape_string($con,$_POST["taluka"]);
$testing=mysqli_real_escape_string($con,$_POST["testing"]);
$crop=mysqli_real_escape_string($con,$_POST["crop"]);
$sample=mysqli_real_escape_string($con,$_POST["sample"]);
$sro=mysqli_real_escape_string($con,$_POST["sro"]);
$srr=mysqli_real_escape_string($con,$_POST["srr"]);
$eco=mysqli_real_escape_string($con,$_POST["eco"]);
$ecr=mysqli_real_escape_string($con,$_POST["ecr"]);
$oco=mysqli_real_escape_string($con,$_POST["oco"]);
$ocr=mysqli_real_escape_string($con,$_POST["ocr"]);
$phoso=mysqli_real_escape_string($con,$_POST["phoso"]);
$phosr=mysqli_real_escape_string($con,$_POST["phosr"]);
$poto=mysqli_real_escape_string($con,$_POST["poto"]);
$potr=mysqli_real_escape_string($con,$_POST["potr"]);
$opinion=mysqli_real_escape_string($con,$_POST["opinion"]);
   $sql="INSERT INTO `soil`(`Farmer_name`, `Mobile`, `Village`, `Survey_number`, `Taluka`, `Testing_date`, `Crop_name`, `Sample_no`, `SoilReactionOb`, `SoilReactionRes`, `ECO`, `ECR`, `OCO`, `OCR`, `PhospherousOb`, `PhospherousRes`, `PotashOb`, `PotashRes`, `Opinion`,`Id`) 
	 VALUES ('$fname','$phn','$village','$survey','$taluka','$testing','$crop','$sample','$sro','$srr','$eco','$ecr','$oco','$ocr','$phoso','$phosr','$poto','$potr','$opinion','$EC')";
 $a=mysqli_query($con, $sql);
 
//}
?>