<!DOCTYPE html>
<html>
 <head>
  <title>Admin HomePage</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="themes/adminside.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="script.js"></script>
  <link href="table.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
<script language="javascript" src="highlight.js"></script>
<link href="sample.css" rel="stylesheet" type="text/css" />

  <style>a.ex1:hover, a.ex1:active {color: #4ba61e;} 
  </style>
 </head>
 <body>
  <br /><br /><div id="main"> 
  <center><h1><span class="a">SHIV AGRI CONSULTANCY</span></h1></center>
  <div class="container">
  <div id="navbar">  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
  
<!--<div>
 
    <div class="container-fluid">
     
     <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span></a>
       <ul class="dropdown-menu"></ul>
      </li>
     </ul>
    </div>-->
<?php
include_once 'dbConfig.php';
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
?>
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
  <a href="photo.php" class="ex1">Images</a></center></li><br><center><li>
  <a href="receiptView.php" class="ex1">Recipt/Payment</a></center></li><br><center><li>
  <a href="amount.php" class="ex1">Income</a></center></li><br><center><li>
  <a href="adminlogout.php" class="ex1">Logout</a></center></li><br>
  </ul>
<script language="javascript">setPage()</script>
</div>

</div>
  
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
