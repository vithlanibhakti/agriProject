<?php
include_once 'header.php';
include_once 'dbConfig.php';

$result = mysql_query("SELECT Id AS EmploeeCode FROM `custlogin` where PhoneNo ='".$_SESSION['PhoneNo']."'");
$row = mysql_fetch_array($result);
$EC = $row['EmploeeCode']; 

$q="SELECT  `Id`, `Name`, `Email`, `Password`, `PhoneNo` FROM `custlogin` WHERE Id = '$EC'";
	$result=mysql_query($q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysql_error().$result);
		}
		echo "<h1>".'--------------------Customer----------------------'."</h1>";
		echo "<table border=3>";
		echo "<center>	
		<th style='padding-left:10px;padding-right:10px;'>id</th>
		<th style='padding-left:10px;padding-right:10px;'>Name</th>
		<th style='padding-left:10px;padding-right:10px;'>Email</th>
		<th style='padding-left:10px;padding-right:10px;'>Password</th>
		<th style='padding-left:20px;padding-right:20px;'>PhoneNo</th>
		</center>";
		while($row=mysql_fetch_assoc($result))
		{
			echo "<tr>";
			foreach($row as $v)
			{
				echo "<td style='padding:5px;'>".$v."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";

$q="SELECT `Water_Id`, `Farmer_name`, `Mobile_no`, `Village`, `Survey_no`, `Taluka`, `TestingDate`, `CropName`, `SampleNo`,`Id` FROM `water` WHERE Id = '$EC'";
	$result=mysql_query($q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysql_error().$result);
		}
		echo "<h1>".'--------------------Water Test----------------------'."</h1>";
		echo "<table border=3>";
		echo "<center>	
		<th style='padding-left:10px;padding-right:10px;'>Water_Id</th>
		<th style='padding-left:10px;padding-right:10px;'>Farmer_name</th>
		<th style='padding-left:10px;padding-right:10px;'>Mobile_no</th>
		<th style='padding-left:10px;padding-right:10px;'>Village</th>
		<th style='padding-left:20px;padding-right:20px;'>Survey_no</th>
		<th style='padding-left:20px;padding-right:20px;'>Taluka</th>
		<th style='padding-left:20px;padding-right:20px;'>TestingDate</th>
		<th style='padding-left:20px;padding-right:20px;'>CropName</th>
		<th style='padding-left:20px;padding-right:20px;'>SampleNo</th>
		<th style='padding-left:20px;padding-right:20px;'>Id</th>
		</center>";
		while($row=mysql_fetch_assoc($result))
		{
			echo "<tr>";
			foreach($row as $v)
			{
				echo "<td style='padding:5px;'>".$v."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";

		
		$q="SELECT `Soil_Id`, `Farmer_name`, `Mobile`, `Village`, `Survey_number`, `Taluka`, `Testing_date`, `Crop_name`, `Sample_no`,`Id` FROM `soil` WHERE Id = '$EC'";
	$result=mysql_query($q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysql_error().$result);
		}
		echo "<h1>".'--------------------Soil Test----------------------'."</h1>";
		echo "<table border=3>";
		echo "<center>	
		<th style='padding-left:10px;padding-right:10px;'>Soil_Id</th>
		<th style='padding-left:10px;padding-right:10px;'>Farmer_name</th>
		<th style='padding-left:10px;padding-right:10px;'>Mobile_no</th>
		<th style='padding-left:10px;padding-right:10px;'>Village</th>
		<th style='padding-left:20px;padding-right:20px;'>Survey_no</th>
		<th style='padding-left:20px;padding-right:20px;'>Taluka</th>
		<th style='padding-left:20px;padding-right:20px;'>TestingDate</th>
		<th style='padding-left:20px;padding-right:20px;'>CropName</th>
		<th style='padding-left:20px;padding-right:20px;'>SampleNo</th>
		<th style='padding-left:20px;padding-right:20px;'>Id</th>
		</center>";
		while($row=mysql_fetch_assoc($result))
		{
			echo "<tr>";
			foreach($row as $v)
			{
				echo "<td style='padding:5px;'>".$v."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";

		
		$q="SELECT `Plant_Id`, `Farmer_Name`, `Mobile_No`, `Village`, `Survey_No`, `Taluka`, `TestingDate`, `CropName`, `SampleNo`,`Payment_status`, `Id` FROM `plantcons` WHERE Id = '$EC'";
	$result=mysql_query($q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysql_error().$result);
		}
		echo "<h1>".'--------------------Plant Consulantcy----------------------'."</h1>";
		echo "<table border=3>";
		echo "<center>	
		<th style='padding-left:10px;padding-right:10px;'>Plant_Id</th>
		<th style='padding-left:10px;padding-right:10px;'>Farmer_name</th>
		<th style='padding-left:10px;padding-right:10px;'>Mobile_no</th>
		<th style='padding-left:10px;padding-right:10px;'>Village</th>
		<th style='padding-left:20px;padding-right:20px;'>Survey_no</th>
		<th style='padding-left:20px;padding-right:20px;'>Taluka</th>
		<th style='padding-left:20px;padding-right:20px;'>TestingDate</th>
		<th style='padding-left:20px;padding-right:20px;'>CropName</th>
		<th style='padding-left:20px;padding-right:20px;'>SampleNo</th>
		<th style='padding-left:20px;padding-right:20px;'>Payment_status</th>
		<th style='padding-left:20px;padding-right:20px;'>Id</th>
		</center>";
		while($row=mysql_fetch_assoc($result))
		{
			echo "<tr>";
			foreach($row as $v)
			{
				echo "<td style='padding:5px;'>".$v."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";

		
		$q="SELECT `Basic_Id`, `name`, `address`, `area`, `w`, `Id` FROM `try` WHERE Id = '$EC'";
	$result=mysql_query($q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysql_error().$result);
		}
		echo "<h1>".'--------------------Basic Details----------------------'."</h1>";
		echo "<table border=3>";
		echo "<center>	
		<th style='padding-left:10px;padding-right:10px;'>Basic_Id</th>
		<th style='padding-left:10px;padding-right:10px;'>name</th>
		<th style='padding-left:10px;padding-right:10px;'>address</th>
		<th style='padding-left:10px;padding-right:10px;'>area</th>
		<th style='padding-left:20px;padding-right:20px;'>w</th>
		<th style='padding-left:20px;padding-right:20px;'>Id</th>
		</center>";
		while($row=mysql_fetch_assoc($result))
		{
			echo "<tr>";
			foreach($row as $v)
			{
				echo "<td style='padding:5px;'>".$v."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";


// $result = mysql_query("SELECT `Name` FROM `custlogin` WHERE Id = '$Id'");
// $row = mysql_fetch_array($result);
// $EC = $row['Name']; 
// //echo ($EC);

		$q="SELECT `Amount_Id`, `amount`, `date`,  `Id` FROM `amount` WHERE Id = '$EC'";
	$result=mysql_query($q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysql_error().$result);
		}
		echo "<h1>".'--------------------Amount----------------------'."</h1>";
		echo "<table border=3>";
		echo "<center>	
		<th style='padding-left:10px;padding-right:10px;'>Amount_Id</th>
		<th style='padding-left:10px;padding-right:10px;'>amount</th>
		<th style='padding-left:10px;padding-right:10px;'>date</th>
		<th style='padding-left:20px;padding-right:20px;'>Id</th>
		</center>";
		while($row=mysql_fetch_assoc($result))
		{
			echo "<tr>";
			foreach($row as $v)
			{
				echo "<td style='padding:5px;'>".$v."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";

include_once("footer.html");
?>