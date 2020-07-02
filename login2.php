<?php 
session_start();
include('dbConfig.php');
if(isset($_POST['submit']))  {
	
	$phn =mysqli_real_escape_string($con, $_POST['phn']);
	$Password = mysqli_real_escape_string($con,$_POST['Password']);
	ECHO $phn,$Password;
		
	$fetch="SELECT * FROM custlogin WHERE PhoneNo='$phn' AND Password='$Password' ";
	 $result = mysqli_query($con,$fetch);
	$count=mysqli_num_rows($result);
    
	if ($count != "")
	{
		$_SESSION['PhoneNo']=$phn;
   header("Location: HomePage.php");
		
	}elseif(isset($_POST['submit'])){
		$fetch=mysqli_query($con,"SELECT * FROM admin_login WHERE PhoneNo='$phn' AND Password='$Password' ");
    	$count=mysqli_num_rows($fetch);
    	echo $count;
		if ($count != "")
	 			{
		$_SESSION['PhoneNo']=$phn;
   		header("Location: basicDetailsView.php");
	 			}
	}
	else{
		   header("Location: login.php");

	}
    	}
    ?>