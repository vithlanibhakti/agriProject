<?php 
session_start();
include('connect.php');
if(isset($_POST['submit'])) 
 {
        $phn =mysqli_real_escape_string($con, $_POST['phn']);
        $Password = mysqli_real_escape_string($con,$_POST['Password']);
		ECHO $phn,$Password;
	$fetch="SELECT * FROM custlogin WHERE PhoneNo='$phn' AND Password='$Password' ";
	 $result = mysqli_query($con,$fetch);
	$count=mysqli_num_rows($result);
     echo $count;
	 if ($count != "")
	 {
	 $_SESSION['PhoneNo']=$phn;
   header("Location: HomePage.php");
	 }
	 else{
	 header("Location: login.php");}
    	}
    ?>