<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
	<link href="themes/sidenavbar.css" rel="stylesheet" type="text/css">
	
<!--===============================================================================================-->
<script type="text/javascript">
function validation()
{
 var a = document.form.name.value;
 if(!isNaN(a))
{
alert("Please Enter Only Characters");
document.form.name.select();
return false;
}
}
</script>
</head>
<body>

<?php
session_start();
include("dbConfig.php");
if(!isset($_SESSION['PhoneNo']))
{
	echo "<script>alert('You are not logged on...');</script>";
	header("refresh:0; url='login.php'");
}
else
{	
	$PhoneNo = $_SESSION['PhoneNo'];
 }
$result = mysql_query("SELECT CONCAT(prefix, Id) AS EmploeeCode FROM `custlogin` where PhoneNo ='".$_SESSION['PhoneNo']."'");
$row = mysql_fetch_array($result);
 $EC = $row['EmploeeCode']; 

$result = mysql_query("SELECT Name FROM `custlogin` where PhoneNo ='".$_SESSION['PhoneNo']."'");
$row = mysql_fetch_array($result);
$Name = $row['Name']; 
?>	 

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#"><?php echo $Name;?></a>
  <a href="#">EmploeeCode<?php echo $EC;?></a>
  <a href="#">History</a>
  <a href="#">Recipt/Payment</a>
  <a href="about.php">AboutUS</a>
  <a href="logout.php">Logout</a>
  
</div>
<div id="main">
<div id="navbar">  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
<i class="fa fa-bell ffloat-right block2" aria-hidden="true" style="align:right"></i>
</ul>                   
<?php   echo $EC; ?>
                
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
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
		
 <form id="loginform" class="login100-form validate-form" method="post" name="form"  action="BasicDetails2.php" onsubmit="return validation()" >
							<h1> BasicDetails Form </h1>
					<br> <br>
						<div class="wrap-input100 validate-input m-b-35" data-validate = "Enter Name">
						<input class="input100" id="name" type="text" name="name" required>
						<span class="focus-input100" data-placeholder="Name"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-35" data-validate = "Enter Address">
						<input class="input100" id="address" type="text" name="address" required>
						<span class="focus-input100" data-placeholder="Address"></span>
					</div>
		
					<div class="wrap-input100 validate-input m-b-35 " data-validate = "Enter Area">
						<input class="input100" id="area" type="text" name="area" required>
						<span class="focus-input100" data-placeholder="Area"></span>
					</div>
		
					
					<div class="wrap-input100 validate-input m-b-35" data-validate = "Enter W/N.W">
						<input class="input100" id="w" type="text" name="w"  required>
						<span class="focus-input100" data-placeholder="W/N.W"></span>
					</div>
					
					<div class="container-login100-form-btn m-t-85 m-b-35">
						<button class="login100-form-btn" type="submit" name="submit">
							Submit
						</button>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html> 	