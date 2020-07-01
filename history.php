<html>
 <head>
  <title>Header</title>
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

<?php


include_once 'connect.php';
$result = mysqli_query($con,"SELECT Id AS EmploeeCode FROM `custlogin` where PhoneNo ='".$_SESSION['PhoneNo']."'");
$row = mysqli_fetch_array($result);
$Id = $row['EmploeeCode']; 

$q="SELECT  `Id`, `Name`, `Email`, `Password`, `PhoneNo` FROM `custlogin` WHERE Id = '$Id'";
	$result=mysqli_query($con,$q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysqli_error().$result);
		}
		echo "<h1>".'--------------------Customer----------------------'."</h1>";
		echo "<table border=3>";
		echo "<center>	
		<th style='padding-left:10px;padding-right:10px;'>id</th>
		<th style='padding-left:10px;padding-right:10px;'>Name</th>
		<th style='padding-left:10px;padding-right:10px;'>Email</th>
		<th style='padding-left:10px;padding-right:10px;'>Password</th>
		<th style='padding-left:20px;padding-right:20px;'>PhoneNo</th>
		</center>";
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			foreach($row as $v)
			{
				echo "<td style='padding:5px;'>".$v."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";

$q="SELECT `Water_Id`, `Farmer_name`, `Mobile_no`, `Village`, `Survey_no`, `Taluka`, `TestingDate`, `CropName`, `SampleNo`,`Id` FROM `water` WHERE Id = '$Id'";
	$result=mysqli_query($con,$q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysqli_error().$result);
		}
		echo "<h1>".'--------------------Water Test----------------------'."</h1>";
		echo "<table border=3>";
		echo "<center>	
		<th style='padding-left:10px;padding-right:10px;'>Water_Id</th>
		<th style='padding-left:10px;padding-right:10px;'>Farmer_name</th>
		<th style='padding-left:10px;padding-right:10px;'>Mobile_no</th>
		<th style='padding-left:10px;padding-right:10px;'>Village</th>
		<th style='padding-left:20px;padding-right:20px;'>Survey_no</th>
		<th style='padding-left:20px;padding-right:20px;'>Taluka</th>
		<th style='padding-left:20px;padding-right:20px;'>TestingDate</th>
		<th style='padding-left:20px;padding-right:20px;'>CropName</th>
		<th style='padding-left:20px;padding-right:20px;'>SampleNo</th>
		<th style='padding-left:20px;padding-right:20px;'>Id</th>
		</center>";
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			foreach($row as $v)
			{
				echo "<td style='padding:5px;'>".$v."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";

		
		$q="SELECT `Soil_Id`, `Farmer_name`, `Mobile`, `Village`, `Survey_number`, `Taluka`, `Testing_date`, `Crop_name`, `Sample_no`,`Id` FROM `soil` WHERE Id = '$Id'";
	$result=mysqli_query($con,$q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysqli_error().$result);
		}
		echo "<h1>".'--------------------Soil Test----------------------'."</h1>";
		echo "<table border=3>";
		echo "<center>	
		<th style='padding-left:10px;padding-right:10px;'>Soil_Id</th>
		<th style='padding-left:10px;padding-right:10px;'>Farmer_name</th>
		<th style='padding-left:10px;padding-right:10px;'>Mobile_no</th>
		<th style='padding-left:10px;padding-right:10px;'>Village</th>
		<th style='padding-left:20px;padding-right:20px;'>Survey_no</th>
		<th style='padding-left:20px;padding-right:20px;'>Taluka</th>
		<th style='padding-left:20px;padding-right:20px;'>TestingDate</th>
		<th style='padding-left:20px;padding-right:20px;'>CropName</th>
		<th style='padding-left:20px;padding-right:20px;'>SampleNo</th>
		<th style='padding-left:20px;padding-right:20px;'>Id</th>
		</center>";
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			foreach($row as $v)
			{
				echo "<td style='padding:5px;'>".$v."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";

		
		$q="SELECT `Plant_Id`, `Farmer_Name`, `Mobile_No`, `Village`, `Survey_No`, `Taluka`, `TestingDate`, `CropName`, `SampleNo`,`Payment_status`, `Id` FROM `plantcons` WHERE Id = '$Id'";
	$result=mysqli_query($con,$q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysqli_error().$result);
		}
		echo "<h1>".'--------------------Plant Consulantcy----------------------'."</h1>";
		echo "<table border=3>";
		echo "<center>	
		<th style='padding-left:10px;padding-right:10px;'>Plant_Id</th>
		<th style='padding-left:10px;padding-right:10px;'>Farmer_name</th>
		<th style='padding-left:10px;padding-right:10px;'>Mobile_no</th>
		<th style='padding-left:10px;padding-right:10px;'>Village</th>
		<th style='padding-left:20px;padding-right:20px;'>Survey_no</th>
		<th style='padding-left:20px;padding-right:20px;'>Taluka</th>
		<th style='padding-left:20px;padding-right:20px;'>TestingDate</th>
		<th style='padding-left:20px;padding-right:20px;'>CropName</th>
		<th style='padding-left:20px;padding-right:20px;'>SampleNo</th>
		<th style='padding-left:20px;padding-right:20px;'>Payment_status</th>
		<th style='padding-left:20px;padding-right:20px;'>Id</th>
		</center>";
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			foreach($row as $v)
			{
				echo "<td style='padding:5px;'>".$v."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";

		
		$q="SELECT `Basic_Id`, `name`, `address`, `area`, `w`, `Id` FROM `try` WHERE Id = '$Id'";
	$result=mysqli_query($con,$q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysqli_error().$result);
		}
		echo "<h1>".'--------------------Basic Details----------------------'."</h1>";
		echo "<table border=3>";
		echo "<center>	
		<th style='padding-left:10px;padding-right:10px;'>Basic_Id</th>
		<th style='padding-left:10px;padding-right:10px;'>name</th>
		<th style='padding-left:10px;padding-right:10px;'>address</th>
		<th style='padding-left:10px;padding-right:10px;'>area</th>
		<th style='padding-left:20px;padding-right:20px;'>w</th>
		<th style='padding-left:20px;padding-right:20px;'>Id</th>
		</center>";
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			foreach($row as $v)
			{
				echo "<td style='padding:5px;'>".$v."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";


// $result = mysql_query("SELECT `Name` FROM `custlogin` WHERE Id = '$Id'");
// $row = mysql_fetch_array($result);
// $EC = $row['Name']; 
// //echo ($EC);

		$q="SELECT `Amount_Id`, `amount`, `date`,  `Id` FROM `amount` WHERE Id = '$Id'";
	$result=mysqli_query($con,$q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysqli_error().$result);
		}
		echo "<h1>".'--------------------Amount----------------------'."</h1>";
		echo "<table border=3>";
		echo "<center>	
		<th style='padding-left:10px;padding-right:10px;'>Amount_Id</th>
		<th style='padding-left:10px;padding-right:10px;'>amount</th>
		<th style='padding-left:10px;padding-right:10px;'>date</th>
		<th style='padding-left:20px;padding-right:20px;'>Id</th>
		</center>";
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			foreach($row as $v)
			{
				echo "<td style='padding:5px;'>".$v."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
		
		?>

<style>

:root {
    font-size: 10px;
}

*,
*::before,
*::after {
    box-sizing: border-box;
}

body {
    font-family: "Open Sans", Arial, sans-serif;
    min-height: 100vh;
    background-color: #fafafa;
    color: #262626;
    padding-bottom: 3rem;
}

.img {
    display: block;
}

.container {
    max-width: 93.5rem;
    margin: 0 auto;
    padding: 0 2rem;
}
/* Gallery Section */

.gallery {
    display: flex;
    flex-wrap: wrap;
    margin: -1rem -1rem;
    padding-bottom: 3rem;
}

.gallery-item {
    position: relative;
    flex: 1 0 22rem;
    margin: 1rem;
    color: #fff;
    cursor: pointer;
}

.gallery-item:hover .gallery-item-info,
.gallery-item:focus .gallery-item-info {
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.3);
}

.gallery-item-info {
    display: none;
}

.gallery-item-info li {
    display: inline-block;
    font-size: 1.7rem;
    font-weight: 600;
}


.gallery-item-type {
    position: absolute;
    top: 1rem;
    right: 1rem;
    font-size: 2.5rem;
    text-shadow: 0.2rem 0.2rem 0.2rem rgba(0, 0, 0, 0.1);
}

.gallery-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

@supports (display: grid) {
    .profile {
        display: grid;
        grid-template-columns: 1fr 2fr;
        grid-template-rows: repeat(3, auto);
        grid-column-gap: 3rem;
        align-items: center;
    }

    .profile-image {
        grid-row: 1 / -1;
    }

    .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(22rem, 1fr));
        grid-gap: 2rem;
    }

}

</style>


<?php 
require_once 'connect.php'; 
 echo "<br>". "<h1>".'--------------------Images----------------------'."</h1>";
// Get image data from database 
$result = mysqli_query($con,"SELECT Id,image FROM attach where Id='$Id' ORDER BY uploaded DESC"); 
$num=mysqli_num_rows($result);
$data = array();
?>

<?php if($num > 0){ ?> 
    <div class="gallery"> 
	<main>

	<div class="container">

		<div class="gallery">

			<div class="gallery-item" tabindex="0">

        <?php while($row = mysqli_fetch_assoc($result)){?><br><br><?php
//echo "<p style='color:red; font-size:22px'>" . $row['Id'] . "</p>";		
		?> <br><br>
            <img class="img" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
        <?php  } ?> 
		
			</div>

    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } 
include("footer.html");
				?>
		

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
