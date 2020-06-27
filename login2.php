<?php 
session_start();

if(isset($_POST['submit'])) 
    {include('dbConfig.php');
        $phn = $_POST['phn'];
        $Password = $_POST['Password'];
		
$fetch=mysql_query("SELECT * FROM custlogin WHERE PhoneNo='$phn' AND Password='$Password'  ");
    $count=mysql_num_rows($fetch);
    
	if ($count != "")
	{
		$_SESSION['PhoneNo']=$phn;
   header("Location: HomePage.php");
		
	}
	else{
		   header("Location: login.php");

	}
    	}
    ?>