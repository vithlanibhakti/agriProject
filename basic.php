<!DOCTYPE html>
<html>
 <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="themes/adminside.css" rel="stylesheet" type="text/css">
  <link href="table.css" rel="stylesheet" type="text/css">
<style>

.bk{
  background-color: white;
  border-radius: 15px;
	width:220px;
}
a.ex1:hover, a.ex1:active {color: #4ba61e;} 
.d {
  border-radius:20px;
  background-color: #4ba61e;
  border: none;
  font-size: 20px;
  color: #FFFFFF;
  padding: 8px;
  width: 300px;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  text-decoration: none;
  overflow: hidden;
  cursor: pointer;
}
    </style>
</style>
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
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
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
  <center><a href="#" class="bk ex1"><?php echo $Name;?></a><br></center><center>
  <a href="#" class="bk ex1"><?php echo $EC;?></a><br></center><center>
  <a href="#" class="bk ex1">History</a><br></center><center>
  <a href="#" class="bk ex1">Recipt/Payment</a><br></center><center>
  <a href="about.php" class="bk ex1">AboutUS</a><br></center><center>
  <a href="logout.php" class="bk ex1">Logout</a><br></center><center>
  
</div>
<div id="main">
<div id="navbar">  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
<i class="fa fa-bell ffloat-right block2" aria-hidden="true" style="align:right"></i>
</ul>                   
<?php   echo $EC; ?>
                
</div>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
		
				
  <div class="container">
   <!--<nav class="navbar navbar-inverse">
    <div class="container-fluid">
     
     <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span></a>
       <ul class="dropdown-menu"></ul>
      </li>
     </ul>
    </div>
   </nav>-->
   <br />
   <form method="post" id="comment_form">
    <div class="form-group">
     <label>Enter name</label>
     <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
     <label>Enter address</label>
     <input type="text" name="address" id="address" class="form-control" rows="5">
    </div>
	    <div class="form-group">
     <label>Enter area</label>
     <input type="text" name="area" id="area" class="form-control">
    </div>
    <div class="form-group">
     <label>Enter w</label>
     <input type="text" name="w" id="w" class="form-control" rows="5">
    </div><br>
		<div>
		
		<button class="d" type="submit" name="submit" name="post" id="post">post</button>
		</div><br>
   
		
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
  // function load_unseen_notification(view = '')
 // {
   // $.ajax({
    // url:"fetch.php",
    // method:"POST",
    // data:{view:view},
    // dataType:"json",
    // success:function(data)
    // {
     // $('.dropdown-menu').html(data.notification);
     // if(data.unseen_notification > 0)
     // {
    // $('.count').html(data.unseen_notification);
     // }
  // }
  // });
  // }
 
 // load_unseen_notification();
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  if($('#name').val() != '' && $('#area').val() != '' && $('#address').val() != ''&& $('#w').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#comment_form')[0].reset();
	 alert("sucess");
	 window.location.href = 'HomePage.php'; 
     //load_unseen_notification();
    }
   });
  }
  else
  {
   alert("please fill required details");
  }
 });
 
  // $(document).on('click', '.dropdown-toggle', function(){
  // $('.count').html('');
  // load_unseen_notification('yes');
  // });
 
  // setInterval(function(){ 
 // load_unseen_notification();; 
  // }, 5000);
 
});
</script>
