<?php
 include("connect.php");
 $amount=mysqli_real_escape_string($con,$_POST["amount"]);
 $date=mysqli_real_escape_string($con,$_POST["date"]);

 $sql="INSERT INTO `amount`(`amount`,`date`) VALUES ('$amount','$date')";
 $a=mysqli_query($con, $sql);
 
?>