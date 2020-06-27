
<?php
	include 'connect.php';
	$id=$_POST['id'];
	echo json_encode(array($id));
		
	$sql = "UPDATE `plantcons` SET `Payment_status` = 'Paid' WHERE `plantcons`.`Plant_Id` = $id";
	if (mysqli_query($con, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($con);
?>