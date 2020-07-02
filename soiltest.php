<!DOCTYPE html>
<html>
 <head>
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
</script>
</head>
<body>

<?php
include("connect.php");      
    include("header.php");?>
                
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
   <table class="table">
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
	 
	 <div class="invoice"><center> SOIL TESTING REPORT</center> </DIV><br><center>
<table  class="table">
<th>SR</th>
<th>PARAMETER</th>
<th>OBSERVATION</th>
<th>RESULT</th>
</center>
<tr><td>1</td>
<td>SOIL REACTION</td>
<td><input type="text" name="sro" id="sro"></td>
<td><input type="text" name="srr" id="srr"></td>
</tr>
<tr><td>2</td>
<td>ELECTRICAL CONDUCTIVITY
(MILLI MHOS/CM)</td>
<td><input type="text" name="eco" id="eco"></td>
<td><input type="text" name="ecr" id="ecr"></td>
</tr>
<tr><td>3</td>
<td>ORGANIC CARBON(%)
(NITROGEN)</td>
<td><input type="text" name="oco" id="oco"></td>
<td><input type="text" name="ocr" id="ocr"></td>
</tr>
<tr><td>4</td>
<td>AVAILABEL PHOSPHEROUS</td>
<td><input type="text" name="phoso" id="phoso"></td>
<td><input type="text" name="phosr" id="phosr"></td>
</tr>

<tr><td>5</td>
<td>AVAILABEL POTASH</td>
<td><input type="text" name="poto" id="poto"></td>
<td><input type="text" name="potr" id="potr"></td>
</tr>
</table>
<div>Opinion:- <textarea name="opinion" id="opinion"> </textarea></div>
   

</table>
	 
     <input type="submit" name="post" id="post" class="btn btn-info" value="Post" />
	 
    </div>
    <div class="container">
<table class="table">
<tr><td>SR</td><td>PARAMETERS</td><td>LOW</td><td>MEDIUM</td><td>HIGH</td></tr>
<tr>
<td>1</td>
<td>pH</td>
<td>0-6.4
(ACIDIC)</td>
<td>6.5-8.2
(NORMAL)</td>
<td>>8.2
(ALKALINE)</td>
</tr>

<tr>
<td>2</td>
<td>EC</td>
<td>0.99
(SIMPLE)</td>
<td>1-3
(HARMFUL)</td>
<td>>3
(UNSAFE)</td>
</tr>

<tr>
<td>3</td>
<td>O.C(%)</td>
<td>0-0.50</td>
<td>0.51-0.75</td>
<td>>0.75</td>
</tr>


<tr>
<td>4</td>
<td>AVAILABEL PHOS.</td>
<td>0-25</td>
<td>26-60</td>
<td>>61</td>
</tr>


<tr>
<td>5</td>
<td>AVAILABEL POTASH</td>
<td>0-150</td>
<td>151-300</td>
<td>>300</td>
</tr>
</table>
</div>
<table  class="table" ><tr><td>
note:- 1.this report gives the idea of fertility status of given sample (soil / water), note involves any garrenty of crop production.</td></tr>
<tr>
<td>2.Homogenous chemical materials measure the hetero genious soil materials, May be slight variable.</td></tr>
<tr><td>3.this report is prepared by the work of instrument and mannualy that give slight error sometime.</td></tr>
<BR>
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
  if($('#name').val() != '' && $('#area').val() != '' && $('#address').val() != ''&& $('#w').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insertsoil.php",
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
