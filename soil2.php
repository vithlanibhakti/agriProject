
<?php

include("connect.php");
include("header.php");
?>	 

<?php   echo $EC;
include_once 'dbConfig.php';
$fname=$_POST["fname"];
$phn=$_POST["phn"];
$village=$_POST["village"];
$survey=$_POST["survey"];
$taluka=$_POST["taluka"];
$testing=$_POST["testing"];
$crop=$_POST["crop"];
$sample=$_POST["sample"];
$sro=$_POST["sro"];
$srr=$_POST["srr"];
$eco=$_POST["eco"];
$ecr=$_POST["ecr"];
$oco=$_POST["oco"];
$ocr=$_POST["ocr"];
$phoso=$_POST["phoso"];
$phosr=$_POST["phosr"];
$poto=$_POST["poto"];
$potr=$_POST["potr"];
$opinion=$_POST["opinion"];
   $sql="INSERT INTO `soil`(`Farmer_name`, `Mobile`, `Village`, `Survey_number`, `Taluka`, `Testing_date`, `Crop_name`, `Sample_no`, `SoilReactionOb`, `SoilReactionRes`, `ECO`, `ECR`, `OCO`, `OCR`, `PhospherousOb`, `PhospherousRes`, `PotashOb`, `PotashRes`, `Opinion`) 
	 VALUES ('$fname','$phn','$village','$survey','$taluka','$testing','$crop','$sample','$sro','$srr','$eco','$ecr','$oco','$ocr','$phoso','$phosr','$poto','$potr','$opinion')";
	
if(mysqli_query($con,$sql)){
     echo "suuccess";

 } else{
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
 }
  include("footer.html");
?>
  <br><br>  

