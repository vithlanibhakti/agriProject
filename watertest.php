<!DOCTYPE html>
<html>
 <head>
 
<style>
div.invoice {
		border:2px solid #ccc;
		padding:10px;
			}
.bottomright {
  position: absolute;
  bottom: 8px;
  right: 16px;
  font-size: 18px;
}

</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="themes/sidenavbar.css" rel="stylesheet" type="text/css">

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
   <table>
    <tr>
     <td><label>farmer name</label></td>
     <td><input type="text" name="fname" id="fname" class="form-control"></td>
	 </tr>
	 <tr><td>
     <label>Mobile No</label></td>
     <td><input type="text" name="phn" id="phn" class="form-control" rows="5"></td></tr>
	 
	 <tr><td>
     <label>Village</label></td><td>
     <input type="text" name="village" id="village" class="form-control"></td>
	 </tr>
	 <tr><td>
     <label>Survey No</label></td><td>
     <input type="text" name="survey" id="survey" class="form-control" rows="5"></td>
	 </tr>
	 <tr><td>
     <label>Taluka</label></td><td>
     <input type="text" name="taluka" id="taluka" class="form-control" rows="5"></td></tr>
	 
	 <tr><td>
     <label>Date of Testing</label></td><td>
     <input type="date" name="testing" id="testing" class="form-control" rows="5"></td></tr>
	 
	 <tr><td>
     <label>Name OF crop</label></td><td>
     <input type="text" name="crop" id="crop" class="form-control" rows="5"></td></tr>
	 
	 <tr><td>
     <label>Sample No</label></td><td>
     <input type="text" name="sample" id="sample" class="form-control" rows="5"></td></tr>
	 </table>
	 
	 <div class="invoice"><center> WATER TESTING REPORT</center> </DIV><br><center>
<table border="1px">
<th>SR</th>
<th>PARAMETER</th>
<th>OBSERVATION</th>
<th>RESULT</th>
</center>
<tr><td>1</td>
<td>PH</td>
<td><input type="text" name="pho" id="pho"></td>
<td><input type="text" name="phr" id="phr"></td>
</tr>
<tr><td>2</td>
<td>ELECTRICAL CONDUCTIVITY
(MILLI MHOS/CM)</td>
<td><input type="text" name="eco" id="eco"></td>
<td><input type="text" name="ecr" id="ecr"></td>
</tr>
<tr><td>3</td>
<td>NA MEQ/LIT</td>
<td><input type="text" name="nao" id="nao"></td>
<td><input type="text" name="nar" id="nar"></td>
</tr>
<tr><td>4</td>
<td>[CA+MG]/MEG/LIT</td>
<td><input type="text" name="cao" id="cao"></td>
<td><input type="text" name="car" id="car"></td>
</tr>

<tr><td>5</td>
<td>SAR</td>
<td><input type="text" name="sao" id="sao"></td>
<td><input type="text" name="sar" id="sar"></td>
</tr>
<tr><td>6</td>
<td>CLASS[SR]</td>
<td><input type="text" name="classo" id="classo"></td>
<td><input type="text" name="classr" id="classr"></td>
</tr>

<tr><td>7</td>
<td>PPM SALT IN WATER</td>
<td><input type="text" name="salto" id="salto"></td>
<td><input type="text" name="saltr" id="saltr"></td>
</tr>
<tr><td>8</td>
<td>CO3+HCO3</td>
<td><input type="text" name="coo" id="coo"></td>
<td><input type="text" name="cor" id="cor"></td>
</tr>
<tr><td>9</td>
<td>RSC MEQ/LIT</td>
<td><input type="text" name="rsco" id="rsco"></td>
<td><input type="text" name="rscr" id="rscr"></td>
</tr>
</table>
<div>Opinion:- <textarea name="opinion" id="opinion"> </textarea></div>
   

</table>
	 
     <input type="submit" name="post" id="post" class="btn btn-info" value="Post" />
	 
    </div>
	<table border="2px">
<tr><td>EC</td><td></td><td></td><td></td><td>SAR</td><td></td><td>SALINITY</td><td>RSC</td><td></td><td>SODICITY</td></tr>
<tr>
<td>c1</td>
<td><250</td>
<td>micromhos/cm</td>
<td>safe</td>
<td>s1</td>
<td><10</td>
<td>low</td>
<td>r1</td>
<td><1.25</td>
<td>safe</td>
</tr>

<tr>
<td>c2</td>
<td>250-750</td>
<td>micromhos/cm	</td>
<td>marginal</td>
<td>s2</td>
<td>10-18</td>
<td>medium</td>
<td>r2</td>
<td>1.25-2.50</td>
<td>marginal</td>
</tr>


<tr>
<td>c3</td>
<td>750-2250</td>
<td>micromhos/cm</td>
<td>problematic</td>
<td>s3</td>
<td>18-26</td>
<td>high</td>
<td>r3</td>
<td>>2.50</td>
<td>unsuitable</td>
</tr>


<tr>
<td>c4</td>
<td>>2250</td>
<td>micromhos/cm</td>
<td>unsafe</td>
<td>s4</td>
<td>>26</td>
<td>very high</td>
<td>-</td>
<td>-</td>
<td>-</td>
</tr>

</table>
<table><tr><td>
note:- 1.this report gives the idea of fertility status of given sample (soil / water), note involves any garrenty of crop production.</td></tr>
<tr>
<td>2.Homogenous chemical materials measure the hetero genious soil materials, May be slight variable.</td></tr>
<tr><td>3.this report is prepared by the work of instrument and mannualy that give slight error sometime.</td></tr>
<BR>
<div class="bottomright">ANILKUMAR HADAVANI
<BR>
M.Sc.(Agri)
</div>

   </form>
   
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
  if($('#fname').val() != '' && $('#phn').val() != '' && $('#village').val() != '' && $('#survey').val() != '' && $('#taluka').val() != '' && $('#testing').val() != '' && $('#crop').val() != '' && $('#sample').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insertwater.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#comment_form')[0].reset();
	 alert("sucess");
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
