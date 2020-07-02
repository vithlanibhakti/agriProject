<?php
include_once 'header.php';
include_once 'dbConfig.php';

$result = mysqli_query($con,"SELECT Id AS EmploeeCode FROM `custlogin` where PhoneNo ='".$_SESSION['PhoneNo']."'");
$row = mysqli_fetch_array($result);
$EC = $row['EmploeeCode']; 

$q="SELECT  `Id`, `Name`, `Email`, `Password`, `PhoneNo` FROM `custlogin` WHERE Id = '$EC'";
	$result=mysqli_query($con,$q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysqli_error().$result);
		}
		echo "<div class='container'><div class='card '><div class=' card-header bg-secondary white-text text-center '>Customer</div>";
		echo "<table class='table table-striped table-responsive-md btn-table '>";
		echo "<center>	
		<th >id</th>
		<th>Name</th>
		<th >Email</th>
		<th >Password</th>
		<th >PhoneNo</th>
		</center>";
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			foreach($row as $v)
			{
				echo "<td >".$v."</td>";
			}
			echo "</tr>";
		}
		echo "</table></div>";

$q="SELECT `Water_Id`, `Farmer_name`, `Mobile_no`, `Village`, `Survey_no`, `Taluka`, `TestingDate`, `CropName`, `SampleNo`,`Id` FROM `water` WHERE Id = '$EC'";
	$result=mysqli_query($con,$q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysqli_error().$result);
		}
		echo "<div class='card '><div class=' card-header bg-secondary white-text text-center '>Water Test</div>";
		echo "<table class='table table-striped table-responsive-md btn-table ' >";
		echo "<center>	
		<th >Water_Id</th>
		<th >Farmer_name</th>
		<th >Mobile_no</th>
		<th >Village</th>
		<th >Survey_no</th>
		<th >Taluka</th>
		<th >TestingDate</th>
		<th >CropName</th>
		<th >SampleNo</th>
		<th >Id</th>
		</center>";
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			foreach($row as $v)
			{
				echo "<td >".$v."</td>";
			}
			echo "</tr>";
		}
		echo "</table> </div>";

		
		$q="SELECT `Soil_Id`, `Farmer_name`, `Mobile`, `Village`, `Survey_number`, `Taluka`, `Testing_date`, `Crop_name`, `Sample_no`,`Id` FROM `soil` WHERE Id = '$EC'";
	$result=mysqli_query($con,$q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysqli_error().$result);
		}
		echo "<div class='card '><div class=' card-header bg-secondary white-text text-center '>Soil Test</div>";
		echo "<table class='table table-striped table-responsive-md btn-table ' >";
		echo "<center>	
		<th >Soil_Id</th>
		<th >Farmer_name</th>
		<th >Mobile_no</th>
		<th >Village</th>
		<th >Survey_no</th>
		<th >Taluka</th>
		<th >TestingDate</th>
		<th >CropName</th>
		<th >SampleNo</th>
		<th >Id</th>
		</center>";
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			foreach($row as $v)
			{
				echo "<td>".$v."</td>";
			}
			echo "</tr>";
		}
		echo "</table></div>";

		
		$q="SELECT `Plant_Id`, `Farmer_Name`, `Mobile_No`, `Village`, `Survey_No`, `Taluka`, `TestingDate`, `CropName`, `SampleNo`,`Payment_status`, `Id` FROM `plantcons` WHERE Id = '$EC'";
	$result=mysqli_query($con,$q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysqli_error().$result);
		}
		echo "<div class='card '><div class=' card-header bg-secondary white-text text-center '>Plant Consulantcy</div>";
		echo "<table class='table table-striped table-responsive-md btn-table ' >";
		echo "<center>	
		<th>Plant_Id</th>
		<th>Farmer_name</th>
		<th>Mobile_no</th>
		<th>Village</th>
		<th>Survey_no</th>
		<th>Taluka</th>
		<th>TestingDate</th>
		<th>CropName</th>
		<th>SampleNo</th>
		<th>Payment_status</th>
		<th>Id</th>
		</center>";
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			foreach($row as $v)
			{
				echo "<td >".$v."</td>";
			}
			echo "</tr>";
		}
		echo "</table> </div>";

		
		$q="SELECT `Basic_Id`, `name`, `address`, `area`, `w`, `Id` FROM `try` WHERE Id = '$EC'";
	$result=mysqli_query($con,$q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysqli_error().$result);
		}
		echo "<div class='card '><div class=' card-header bg-secondary white-text text-center '>Basic Details</div>";
		echo "<table class='table table-striped table-responsive-md btn-table '>";
		echo "<center>	
		<th>Basic_Id</th>
		<th>name</th>
		<th>address</th>
		<th>area</th>
		<th>w</th>
		<th>Id</th>
		</center>";
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			foreach($row as $v)
			{
				echo "<td>".$v."</td>";
			}
			echo "</tr>";
		}
		echo "</table> </div>";


// $result = mysql_query("SELECT `Name` FROM `custlogin` WHERE Id = '$Id'");
// $row = mysql_fetch_array($result);
// $EC = $row['Name']; 
// //echo ($EC);

		$q="SELECT `Amount_Id`, `amount`, `date`,  `Id` FROM `amount` WHERE Id = '$EC'";
	$result=mysqli_query($con,$q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysqli_error().$result);
		}
		echo "<div class='card '><div class=' card-header bg-secondary white-text text-center '>Amount</div>";
		echo "<table class='table table-striped table-responsive-md btn-table' >";
		echo "<center>	
		<th>Amount_Id</th>
		<th>amount</th>
		<th>date</th>
		<th>Id</th>
		</center>";
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			foreach($row as $v)
			{
				echo "<td>".$v."</td>";
			}
			echo "</tr>";
		}
		echo "</table> </div> </div>";

include_once("footer.html");
?>