
<?php
session_start();
include("connect.php");
include("header.php");
if(!isset($_SESSION['PhoneNo']))
{
	echo "<script>alert('You are not logged on...');</script>";
	header("refresh:0; url='login.php'");
}
else
{	
	$PhoneNo = $_SESSION['PhoneNo'];
 }
$result = mysqli_query($con,"SELECT CONCAT(prefix, Id) AS EmploeeCode FROM `custlogin` where PhoneNo ='".$_SESSION['PhoneNo']."'");
$row = mysqli_fetch_array($result);
 $EC = $row['EmploeeCode']; 

$result = mysqli_query($con,"SELECT Name FROM `custlogin` where PhoneNo ='".$_SESSION['PhoneNo']."'");
$row = mysqli_fetch_array($result);
$Name = $row['Name']; 
$fname=$_POST["fname"];
$phn=$_POST["phn"];
$village=$_POST["village"];
$survey=$_POST["survey"];
$taluka=$_POST["taluka"];
$testing=$_POST["testing"];
$crop=$_POST["crop"];
$sample=$_POST["sample"];
$pho=$_POST["pho"];
$phr=$_POST["phr"];
$eco=$_POST["eco"];
$ecr=$_POST["ecr"];
$nao=$_POST["nao"];
$nar=$_POST["nar"];
$cao=$_POST["cao"];
$car=$_POST["car"];
$sao=$_POST["sao"];
$sar=$_POST["sar"];
$classo=$_POST["classo"];
$classr=$_POST["classr"];

$salto=$_POST["salto"];
$saltr=$_POST["saltr"];

$coo=$_POST["coo"];
$cor=$_POST["cor"];
$rsco=$_POST["rsco"];
$rscr=$_POST["rscr"];
$opinion=$_POST["opinion"];
   $sql="INSERT INTO `water`(`Farmer_name`, `Mobile_no`, `Village`, `Survey_no`, `Taluka`, `TestingDate`, `CropName`, `SampleNo`, `PH`, `EC`, `NA`, `CA`, `SAR`, `ClassSAR`, `PPM`, `Co3`, `RSC`, `PHR`, `ECR`, `NAR`, `CAR`, `SARR`, `ClassR`, `PPMR`, `COR`, `RSCR`, `Opinion`)
   VALUES ('$fname','$phn','$village','$survey','$taluka','$testing','$crop','$sample','$pho','$eco','$nao','$cao','$sao','$classo','$salto','$coo','$rsco','$phr','$ecr','$nar','$car','$sar','$classr','$saltr','$cor','$rscr','$opinion')";
if(mysqli_query($con,$sql)){
     echo "suuccess";

 } else{
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
 }
  include("footer.html");
?>
  <br><br>  

