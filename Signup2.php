<?php
include_once 'connect.php';
$name=$_POST["name"];
$phn=$_POST["phn"];
$Password=$_POST["Password"];
$email=$_POST["city"];
 echo $Password;

		 $sql="INSERT INTO `custlogin`( `Name`, `Email`, `Password`, `PhoneNo`) 
		 VALUES ('$name','$email','$Password','$phn')";
        
    
 if(mysqli_query($con,$sql)){
 header("Location: HomePage.php");
} else{
echo "ERROR: Could not able to execute $sql. " .mysqli_error($con);
}
  
?>
  <br><br>  

