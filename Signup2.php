<?php
include_once 'connect.php';
$name=$_POST["name"];
$phn=$_POST["phn"];
$Password=$_POST["Password"];
$email=$_POST["email"];
 echo $Password;
if(isset($_POST['submit'])){	
		 $sql="INSERT INTO `custlogin`( `Name`, `Email`, `Password`, `PhoneNo`) 
		 VALUES ('$name','$email','$Password','$phn')";
        }
    
 if(mysqli_query($con,$sql)){
 header("Location: basic.php");
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
  
?>
  <br><br>  

