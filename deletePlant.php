<?php
	include 'connect.php';
	$id=$_POST['id'];
	$sql = "DELETE FROM `plantcons` WHERE  Plant_Id=$id";
	if (mysqli_query($con, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($con);
?>