<?php 
session_start();
include('connect.php');
if(isset($_POST['submit'])) 
 {
        $phn =mysqli_real_escape_string($con, $_POST['phn']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
		ECHO $phn,$password;
	$fetch="SELECT * FROM admin_login WHERE PhoneNo='$phn' AND Password='$password' ";
	  $result = mysqli_query($con,$fetch);

    $count=mysqli_num_rows($result);
    echo $count;
	if ($count != "")
	 {
	$_SESSION['PhoneNo']=$phn;
   header("Location: basicDetailsView.php");
	 }
	 else{
	 header("Location: adminlogin.php");}
    	}
    ?>