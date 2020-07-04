<style>
	body {
		font-family: "Open Sans", Arial, sans-serif;
		min-height: 100vh;
		background-color: #fafafa;
		color: #262626;
		padding-bottom: 3rem;
	}


	
</style>

<?php
session_start(); 

//Including Database configuration file.
include "connect.php";

//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {
	$Name = $_POST['search'];

	$q = "SELECT  `Id`, `Name`, `Email`, `Password`, `PhoneNo` FROM `custlogin` WHERE Name LIKE '%$Name%' OR Id LIKE '%$Name%'";
	$result = mysqli_query($con, $q);
	if ($result === FALSE) {
		die("Query Failed!" . mysqli_error($con) . $result);
	}
	echo "<div class='card mt-5'><div class=' card-header bg-secondary white-text text-center '>Customer</div>";
	echo "<table class='table table-striped table-responsive-md btn-table'>";
	echo "<center>	
		<th style='padding-left:10px;padding-right:10px;'>id</th>
		<th style='padding-left:10px;padding-right:10px;'>Name</th>
		<th style='padding-left:10px;padding-right:10px;'>Email</th>
		<th style='padding-left:10px;padding-right:10px;'>Password</th>
		<th style='padding-left:20px;padding-right:20px;'>PhoneNo</th>
		</center>";
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		foreach ($row as $v) {
			echo "<td style='padding:5px;'>" . $v . "</td>";
		}
		echo "</tr>";
	}
	echo "</table> </div>";

	$q = "SELECT `Water_Id`, `Farmer_name`, `Mobile_no`, `Village`, `Survey_no`, `Taluka`, `TestingDate`, `CropName`, `SampleNo`,`Id` FROM `water` WHERE Farmer_Name LIKE '%$Name%' OR Id LIKE '%$Name%'";
	$result = mysqli_query($con, $q);
	if ($result === FALSE) {
		die("Query Failed!" . mysqli_error($con) . $result);
	}
	echo "<div class='card'><div class=' card-header bg-secondary white-text text-center '>" . 'Water Test' . "</div>";
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
		</center>";
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		foreach ($row as $v) {
			echo "<td style='padding:5px;'>" . $v . "</td>";
		}
		echo "</tr>";
	}
	echo "</table></div>";


	$q = "SELECT `Soil_Id`, `Farmer_name`, `Mobile`, `Village`, `Survey_number`, `Taluka`, `Testing_date`, `Crop_name`, `Sample_no`,`Id` FROM `soil` WHERE Farmer_Name LIKE '%$Name%' OR Id LIKE '%$Name%'";
	$result = mysqli_query($con, $q);
	if ($result === FALSE) {
		die("Query Failed!" . mysqli_error($con) . $result);
	}
	echo "<div class='card'><div class=' card-header bg-secondary white-text text-center '>" . 'Soil Test' . "</div>";
	echo "<table class='table table-striped table-responsive-md btn-table'>";
	echo "<center>	
		<th>Soil_Id</th>
		<th>Farmer_name</th>
		<th>Mobile_no</th>
		<th>Village</th>
		<th>Survey_no</th>
		<th>Taluka</th>
		<th>TestingDate</th>
		<th>CropName</th>
		<th>SampleNo</th>
		<th>Id</th>
		</center>";
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		foreach ($row as $v) {
			echo "<td style='padding:5px;'>" . $v . "</td>";
		}
		echo "</tr>";
	}
	echo "</table></div>";


	$q = "SELECT `Plant_Id`, `Farmer_Name`, `Mobile_No`, `Village`, `Survey_No`, `Taluka`, `TestingDate`, `CropName`, `SampleNo`,`Payment_status`, `Id` FROM `plantcons` WHERE  Farmer_Name LIKE '%$Name%' OR Id LIKE '%$Name%'";
	$result = mysqli_query($con, $q);
	if ($result === FALSE) {
		die("Query Failed!" . mysqli_error($con) . $result);
	}
	echo "<div class='card'><div class=' card-header bg-secondary white-text text-center '>" . 'Plant Consulantcy' . "</div>";
	echo "<table class='table table-striped table-responsive-md btn-table'>";
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
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		foreach ($row as $v) {
			echo "<td style='padding:5px;'>" . $v . "</td>";
		}
		echo "</tr>";
	}
	echo "</table></div>";


	$q = "SELECT `Basic_Id`, `name`, `address`, `area`, `w`, `Id` FROM `try` WHERE name LIKE '%$Name%' OR Id LIKE '%$Name%'";
	$result = mysqli_query($con, $q);
	if ($result === FALSE) {
		die("Query Failed!" . mysqli_error($con) . $result);
	}
	echo "<div class='card'><div class=' card-header bg-secondary white-text text-center '>" . 'Basic Details' . "</div>";
	echo "<table class='table table-striped table-responsive-md btn-table'>";
	echo "<center>	
		<th>Basic_Id</th>
		<th>name</th>
		<th>address</th>
		<th>area</th>
		<th>w</th>
		<th>Id</th>
		</center>";
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		foreach ($row as $v) {
			echo "<td style='padding:5px;'>" . $v . "</td>";
		}
		echo "</tr>";
	}
	echo "</table></div>";


	$result = mysqli_query($con, "SELECT `Id` FROM `custlogin` WHERE Name LIKE '%$Name%'");
	$row = mysqli_fetch_array($result);
	$EC = $row['Id'];
	//echo ($EC);

	$q = "SELECT `Amount_Id`, `amount`, `date`,`Id` FROM `amount` WHERE Id LIKE '%$Name%' OR Id = '$EC'";
	$result = mysqli_query($con, $q);
	if ($result === FALSE) {
		die("Query Failed!" . mysqli_error($con) . $result);
	}
	echo "<div class='card'><div class=' card-header bg-secondary white-text text-center '>" . 'Amount' . "</div>";
	echo "<table class='table table-striped table-responsive-md btn-table'>";
	echo "<center>	
		<th>Amount_Id</th>
		<th>amount</th>
		<th>date</th>
		<th>Id</th>
		</center>";
	while ($row = mysqli_fetch_assoc($result)) {

		echo "<tr>";
		foreach ($row as $v) {
			echo "<td>" . $v . "</td>";
		}
		echo "</tr>";
	}
	echo "</table></div>";
}

$result = mysqli_query($con, "SELECT `Id` FROM `custlogin` WHERE Name LIKE '%$Name%'");
	$row = mysqli_fetch_array($result);
	$EC = $row['Id'];


//$result = mysqli_query($con, "SELECT * FROM attachment where id='$Id'ORDER BY uploaded DESC");
echo $EC;

$result = mysqli_query($con, "SELECT * FROM `attachment` WHERE `id` LIKE '$EC'");

$num = mysqli_num_rows($result);

if($num > 0){
?><div class="container">

		
<div class="row">
	<?php while($row = mysqli_fetch_assoc($result)){?><br><br><?php
//echo "<p style='color:red; font-size:22px'>" . $row['Id'] . "</p>";		
	?> 

		<div class="col-md-4 p-1">
		<!-- <img class="img" src="data:image/jpg;charset=utf8;base64,<?php //echo base64_encode($row['image']); ?>" />  -->
		<img class="img-fluid" src="upload/<?=$row["image"] ?>" /> 
		</div> 
	<?php  } ?> 
	
		</div>


</div> <?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } 
// include("footer.html");
				?>
</ul>