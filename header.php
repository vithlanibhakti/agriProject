<html>
 <head>
  <title>Header</title>
  <meta charset="utf-8">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="themes/adminside.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="script.js"></script>
  <link href="table.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
<link href="sample.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="highlightclient.js"></script>
<link href="sample.css" rel="stylesheet" type="text/css" />

<style>

    #ABC {
      background-color: #4ba61e;
      top: 0;
      left: 0;
      width: 100%;
    }
a.ex1:hover, a.ex1:active {color: #4ba61e;} 
.new {
  background-color: white;
  border-radius: 15px;
  width:80px;
font-size:18px;
}

.blah {
    text-align:center
}
.blah > div {
    vertical-align:top;
    display:inline-block;   
}

</style>
  </head>

<?php
session_start();
include("connect.php");
if(!isset($_SESSION['PhoneNo']))
{
	echo "<script>alert('You are not logged on...');</script>";
	header("refresh:0; url='login.php'");
}
else
{	
	$PhoneNo = $_SESSION['PhoneNo'];
       
}
$result = mysqli_query($con,"SELECT CONCAT(prefix, Id) AS EmploeeCode FROM `custlogin` where PhoneNo ='".$_SESSION['PhoneNo']."'");
$row = mysqli_fetch_array($result);
$EC = $row['EmploeeCode']; 


$result = mysqli_query($con,"SELECT Name FROM `custlogin` where PhoneNo ='".$_SESSION['PhoneNo']."'");
$row = mysqli_fetch_array($result);
 $Name = $row['Name']; 
		?>	 
<div>


	<div class="wrap-input100 validate-input m-t-85 m-b-35">
<section id="ABC">


<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<center><h2 class="bk ex1 had"><?php  echo $Name; ?></h2></center>
  <center><h2 class="bk ex1 had"><?php  echo $EC; ?></h2></center>
  
<div id="nav">
<ul><li>
  <center><a href="HomePage.php" class="ex1">Home</a></center></li><br><center><li>
  <a href="history.php" class="ex1">History</a></center></li><br><center><li>
  <a href="receipt.php" class="ex1">Recipt/Payment</a></center></li><br><center><li>
  <a href="about.php" class="ex1">AboutUS</a></center></li><br><center><li>
  <a href="logout.php" class="ex1">Logout</a></center></li><br>
  </ul>
<script language="javascript">setPage()</script>
</div>

</div>
<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
	<h3><center><?php   echo $EC; ?></h3>

<div class="blah">
  <div class="new">
     English
  </div>
  <div class="new">
     ગુજરાતી
  </div>
</div>

</center>
  <div>
    <div class="container-fluid">
     <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	   <span class="label label-pill label-danger count" style="border-radius:10px;"></span>
	   <span class="glyphicon glyphicon-bell" style="font-size:38px;"></span></a>
       <ul class="dropdown-menu"></ul>
      </li>
     </ul>
    </div>
    </div>
    </div>
   <br />
  </section>
<script>
$(document).ready(function(){
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"amountfetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
});
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
