<?php 
session_start();
include('dbConfig.php');
if(isset($_POST['submit'])) 
 {
        $phn = $_POST['phn'];
        $password = $_POST['password'];
		ECHO $phn,$password;
	$fetch=mysql_query("SELECT * FROM admin_login WHERE PhoneNo='$phn' AND Password='$password' ");
    $count=mysql_num_rows($fetch);
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