<?php
include_once 'connect.php';
$name=$_POST["name"];
$address=$_POST["address"];
$area=$_POST["area"];
$W=$_POST["w"];
$area=$_POST["area"];

    if(isset($_POST['submit']))
	{
		
		$sql="INSERT INTO `basicdetails`(`Name`, `Address`, `Area`, `W/N.W`)
		VALUES ('$name','$address','$area','$W')";
        
    }
    
    if(mysqli_query($con,$sql)){
    header("Location: HomePage.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
  
?>
  <br><br>  

