<?php
include("connect.php");
include("dbConfig.php");
 
$id=$_POST['id'];
$val=$_POST['val'];
echo json_encode(array($id));
echo json_encode(array($val));
 
	$sql = "SELECT `Id` FROM `plantcons` WHERE  Plant_Id=$id";
	$result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
				$EC=$row["Id"];
               echo json_encode($EC);	
            }
         } else {
            echo json_encode("0 results");
         }
		 $date=date("Y-m-d");
		 echo json_encode($date);
 $sql1="INSERT INTO `amount`(`amount`,`date`,`Id`) VALUES ('$val','$date','$EC')";
 $a=mysql_query($sql1);
// if (($a) > 0) {
                           // echo json_encode("ok");	
            // }
          // else {
            // echo json_encode("0 results");
         // }
	
		 
		 
		 
	mysqli_close($con);
?>