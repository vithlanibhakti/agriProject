
<?php
session_start();
include("dbConfig.php");
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
$result = mysql_query("SELECT CONCAT(prefix, Id) AS EmploeeCode FROM `custlogin` where PhoneNo ='".$_SESSION['PhoneNo']."'");
$row = mysql_fetch_array($result);
 $EC = $row['EmploeeCode']; 

$result = mysql_query("SELECT Name FROM `custlogin` where PhoneNo ='".$_SESSION['PhoneNo']."'");
$row = mysql_fetch_array($result);
$Name = $row['Name']; 
?>	 

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#"><?php echo $Name;?></a>
  <a href="#">EmploeeCode<?php echo $EC;?></a>
  <a href="#">History</a>
  <a href="#">Recipt/Payment</a>
  <a href="about.php">AboutUS</a>
  <a href="logout.php">Logout</a>
  
</div>
<div id="main">
<div id="navbar">  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
<i class="fa fa-bell ffloat-right block2" aria-hidden="true" style="align:right"></i>
</ul>                   
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
	
if(mysql_query($sql)){
     echo "suuccess";

 } else{
 echo "ERROR: Could not able to execute $sql. " . mysql_error($conn);
 }
  include("footer.html");
?>
  <br><br>  

