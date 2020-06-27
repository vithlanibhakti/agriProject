<!DOCTYPE html>
<html>
 <head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="themes/sidenavbar.css" rel="stylesheet" type="text/css">

 </head>
 <style>
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4ba61e;
  border: none;
  border-radius: 15px;
  
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #4ba61e;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.new {
  background-color: #4ba61e;
  border-radius: 15px;
    width: 7em;
font-size:38px;
}
</style>
<body>
<?php
include("adminheader.php");

?>	 
  <!--<div class="container">
   <!--<nav class="navbar navbar-inverse">
    <div class="container-fluid">
     
     <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span></a>
       <ul class="dropdown-menu"></ul>
      </li>
     </ul>
    </div>
   </nav>
   <br />
   <form method="post" id="comment_form">
<label>Enter Amount</label>
     <input type="text" name="amount" id="amount" class="form-control">	 
<label>Enter Date</label>
     <input type="Date" name="date" id="date" class="form-control">	 
	 
     <input type="submit" name="post" id="post" class="btn btn-info button" value="Post" />
   </form>
 </body>
</html>--><div id="main"> 
<?php 
$sql=mysql_query("SELECT SUM(amount) AS Total, MONTH(date) as month, YEAR(date) as year FROM amount GROUP BY month;");
echo "<h2  class='new'>"."Monthy Income :--";
   while ($row = mysql_fetch_array($sql)) {
        echo "<br>".$row['Total'];
    }

$sql=mysql_query("SELECT SUM(amount) AS YearTotal, MONTH(date) as month, YEAR(date) as year FROM amount GROUP BY year;");
echo "<h2  class='new'>"."yearly Income :--";
   while ($row = mysql_fetch_array($sql)) {
        echo "<br>".$row['YearTotal'];
    }
	// include_once("footer.html");

echo "</center>";
	?>
	</div>
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
 debugger;
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  if($('#amount').val() != '' )
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insertamount.php",
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


function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}</script>

