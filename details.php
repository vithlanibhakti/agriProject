<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Home Page</title>
  <!-- Tell the browser to be responsive to screen width -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<?php
include_once 'dbConfig.php';

include("adminheader - Copy.php");


if(isset($_GET['Id']))
{
$Id=$_GET['Id'];
echo $Id;

$q="SELECT  `Id`, `Name`, `Email`, `Password`, `PhoneNo` FROM `custlogin` WHERE Id = '$Id'";
	$result=mysql_query($q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysql_error().$result);
		}
		echo "<div class='card'><div class=' card-header bg-success white-text text-center '>".'Customer'."</div>";
		echo "<table class='table table-striped table-responsive-md btn-table'>";
		echo "<center>	
		<th style='padding-left:10px;padding-right:10px;'>id</th>
		<th style='padding-left:10px;padding-right:10px;'>Name</th>
		<th style='padding-left:10px;padding-right:10px;'>Email</th>
		<th style='padding-left:10px;padding-right:10px;'>Password</th>
		<th style='padding-left:20px;padding-right:20px;'>PhoneNo</th>
		</center></div>";
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

$q="SELECT `Water_Id`, `Farmer_name`, `Mobile_no`, `Village`, `Survey_no`, `Taluka`, `TestingDate`, `CropName`, `SampleNo`,`Id` FROM `water` WHERE Id = '$Id'";
	$result=mysql_query($q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysql_error().$result);
		}
		echo "<div class='card'><div class=' card-header bg-success white-text text-center '>".'Water Test'."</h1> </div>";
		echo "<table class='table table-striped table-responsive-md btn-table'>";
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
		</center> ";
		while($row=mysql_fetch_assoc($result))
		{
			echo "<tr>";
			foreach($row as $v)
			{
				echo "<td style='padding:5px;'>".$v."</td>";
			}
			echo "</tr>";
		}
		echo "</table> </div>";

		
		$q="SELECT `Soil_Id`, `Farmer_name`, `Mobile`, `Village`, `Survey_number`, `Taluka`, `Testing_date`, `Crop_name`, `Sample_no`,`Id` FROM `soil` WHERE Id = '$Id'";
	$result=mysql_query($q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysql_error().$result);
		}
		echo "<div class='card'><div class=' card-header bg-success white-text text-center '>".'--------------------Soil Test----------------------'."</div>";
		echo "<table class='table table-striped table-responsive-md btn-table'>";
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
		echo "</table> </div>";

		
		$q="SELECT `Plant_Id`, `Farmer_Name`, `Mobile_No`, `Village`, `Survey_No`, `Taluka`, `TestingDate`, `CropName`, `SampleNo`,`Payment_status`, `Id` FROM `plantcons` WHERE Id = '$Id'";
	$result=mysql_query($q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysql_error().$result);
		}
		echo "<div class='card'><div class=' card-header bg-success white-text text-center '>".'--------------------Plant Consulantcy----------------------'."</div>";
		echo "<table class='table table-striped table-responsive-md btn-table'>";
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
		echo "</table></div>";

		
		$q="SELECT `Basic_Id`, `name`, `address`, `area`, `w`, `Id` FROM `try` WHERE Id = '$Id'";
	$result=mysql_query($q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysql_error().$result);
		}
		echo "<div class='card'><div class=' card-header bg-success white-text text-center '>".'Basic Details'."</div>";
		echo "<table class='table table-striped table-responsive-md btn-table'>";
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
		echo "</table> </div>";


// $result = mysql_query("SELECT `Name` FROM `custlogin` WHERE Id = '$Id'");
// $row = mysql_fetch_array($result);
// $EC = $row['Name']; 
// //echo ($EC);

		$q="SELECT `Amount_Id`, `amount`, `date`,  `Id` FROM `amount` WHERE Id = '$Id'";
	$result=mysql_query($q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysql_error().$result);
		}
		echo "<div class='card'><div class=' card-header bg-success white-text text-center '>".'Amount'."</div>";
		echo "<table class='table table-striped table-responsive-md btn-table'>";
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
		echo "</table></div>";

}				
?>