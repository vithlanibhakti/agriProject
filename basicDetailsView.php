<!DOCTYPE html>
<html>
 <head>
  <title>Admin HomePage</title>
  <meta charset="utf-8">
 
    <meta name="description" content="">
    <meta name="author" content="">
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="themes/adminside.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="script.js"></script>
<script language="javascript" src="highlight.js"></script>
<link href="sample.css" rel="stylesheet" type="text/css" />
<link href="table.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
a.ex1:hover, a.ex1:active {color: #4ba61e;} 
.top-contact-menu {

  width: 100%;
}
.top-contact-menu h2 {
  color: #fff;
  font-size: 14px;
  display: inline-block;
  
}
ul.address-top-menu {
  list-style: none;
  float: right;
  padding-right: 10px;
  vertical-align: top;
  margin-top: 10px;
}
</style>
</head>
<body>
 <div id="main"> 
  <br /><br />
  <center><h1><span class="a">SHIV AGRI CONSULTANCY</span></h1></center>
  <div class="container">
  <div id="navbar">  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
  

  <div class="top-contact-menu">
  <a href="Signup.php"><h2 style="position:relative"><span class="new">NEW ENTRY</span></h2>
  <ul class="address-top-menu">
  	<i class="fa fa-share-square-o" aria-hidden="true" style="font-size:34px;color:#4ba61e"></i>
    <i class="fa fa-print" aria-hidden="true" style="font-size:34px;color:#4ba61e"></i>
	</ul>
 </div>
 
  <body id="body" style="color:black;">
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <center><h1 class="bk ex1 had">ADMIN</h1></center><br>
  
<div id="nav">
<ul><li>
  <center><a href="basicDetailsView.php" class="ex1">Home</a></center></li><br><center><li>
  <a href="basic noti.php" class="ex1">Notification</a></center></li><br><center><li>
  <a href="s.php" class="ex1">search</a></center></li><br><center><li>
  <a href="PlantNoti.php" class="ex1">Plant Consultancy</a></center></li><br><center><li>
  <a href="receiptView.php" class="ex1">Recipt/Payment</a></center></li><br><center><li>
  <a href="amount.php" class="ex1">Income</a></center></li><br><center><li>
  <a href="adminlogout.php" class="ex1">Logout</a></center></li><br>
  </ul>
<script language="javascript">setPage()</script>
</div>

</div>
  
<?php
//Including Database configuration file.
include "connect.php";

      session_start();
if(!isset($_SESSION['PhoneNo']))
{
	echo "<script>alert('You are not logged on...');</script>";
	header("refresh:0; url='adminlogin.php'");
}
else
{
	$PhoneNo = $_SESSION['PhoneNo'];
}


	$q="SELECT  `Id`, `Name`, `Email`, `Password`, `PhoneNo` FROM `custlogin`";
	$result=mysqli_query($con,$q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysqli_error().$result);
		}
	
		echo "<table border=3>";
		echo "<center>	
		<th style='padding-left:10px;padding-right:10px;'>id</th>
		<th style='padding-left:10px;padding-right:10px;'>Name</th>
		<th style='padding-left:10px;padding-right:10px;'>Email</th>
		<th style='padding-left:10px;padding-right:10px;'>Password</th>
		<th style='padding-left:20px;padding-right:20px;'>PhoneNo</th>
		<th style='padding-left:20px;padding-right:20px;'>Details</th>
		<th style='padding-left:20px;padding-right:20px;'>Delete</th>
		
		</center>";
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			foreach($row as $v)
			{
				echo "<td style='padding:5px;'>".$v."</td>";
			}
				echo "<td> <a href='details.php?Id=".$row['Id']."'>Details</a></td>";
				echo "<td> <a href='deleteuser.php?Id=".$row['Id']."'>Delete</a></td>";
			echo "</tr>";
		}
		echo "</table>";
?>
</body>
</html>
<script>

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
