<?php
//insert.php
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

//if(isset($_POST["name"]))
//{
 include("connect.php");
 $name = mysqli_real_escape_string($con, $_POST["fname"]);
 $phn = mysqli_real_escape_string($con, $_POST["phn"]);
 $village = mysqli_real_escape_string($con, $_POST["village"]);
 $survey = mysqli_real_escape_string($con, $_POST["survey"]);
 $taluka = mysqli_real_escape_string($con, $_POST["taluka"]);
 $testing = mysqli_real_escape_string($con, $_POST["testing"]);
 $crop = mysqli_real_escape_string($con, $_POST["crop"]);
 $sample = mysqli_real_escape_string($con, $_POST["sample"]);
 $pho = mysqli_real_escape_string($con, $_POST["pho"]);
 $phr = mysqli_real_escape_string($con, $_POST["phr"]);
$eco=mysqli_real_escape_string($con,$_POST["eco"]);
$ecr=mysqli_real_escape_string($con,$_POST["ecr"]);
$nao=mysqli_real_escape_string($con,$_POST["nao"]);
$nar=mysqli_real_escape_string($con,$_POST["nar"]);
$cao=mysqli_real_escape_string($con,$_POST["cao"]);
$car=mysqli_real_escape_string($con,$_POST["car"]);
$sao=mysqli_real_escape_string($con,$_POST["sao"]);
 $sar=mysqli_real_escape_string($con,$_POST["sar"]);
 $classo=mysqli_real_escape_string($con,$_POST["classo"]);
$classr=mysqli_real_escape_string($con,$_POST["classr"]);
 $salto=mysqli_real_escape_string($con,$_POST["salto"]);
 $saltr=mysqli_real_escape_string($con,$_POST["saltr"]);
$coo=mysqli_real_escape_string($con,$_POST["coo"]);
 $cor=mysqli_real_escape_string($con,$_POST["cor"]);
 $rsco=mysqli_real_escape_string($con,$_POST["rsco"]);
 $rscr=mysqli_real_escape_string($con,$_POST["rscr"]);
$opinion=mysqli_real_escape_string($con,$_POST["opinion"]);

 $query="INSERT INTO `water`(`Farmer_name`, `Mobile_no`, `Village`, `Survey_no`, `Taluka`, `TestingDate`, `CropName`, `SampleNo`, `PH`, `EC`, `NA`, `CA`, `SAR`, `ClassSAR`,`PPM`,`Co3`, `RSC`, `PHR`, `ECR`, `NAR`, `CAR`, `SARR`, `ClassR`,`PPMR`,`COR`,`RSCR`,`opinion`,`Id`)
 VALUES ('$name','$phn','$village','$survey','$taluka','$testing','$crop','$sample','$pho','$eco','$nao','$cao','$sao','$classo','$salto','$coo','$rsco','$phr','$ecr','$nar','$car','$sar','$classr','$saltr','$cor','$rscr','$opinion','$EC')";
 // $query = "
 // INSERT INTO `water`(`Farmer_name`, `Mobile_no`, `Village`, `Survey_no`, `Taluka`,`TestingDate`, `CropName`, `SampleNo`,`PH`,`PHR`, `EC`, `NA`, `CA`, `ECR`, `NAR`, `CAR`,`SAR`, `ClassSAR`,`SARR`, `ClassSR`)
 // VALUES ('$name','$phn','$village','$survey','$taluka','$testing','$crop','$sample','$pho','$phr','$eco','$nao','$cao','$ecr','$nar','$car','$sao','$classo','$sar','$classr') ";
 $a=mysqli_query($con, $query);
 
//}
?>